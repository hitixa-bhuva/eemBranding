

<?php
function getPaginatedBlogs($conn, $perPage = 6) {
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($page < 1) $page = 1;

    $offset = ($page - 1) * $perPage;

    $blogs = [];
    $stmt = $conn->prepare("SELECT * FROM blogs ORDER BY id DESC LIMIT ?, ?");
    $stmt->bind_param("ii", $offset, $perPage);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }

    // Get total blog count
    $totalResult = $conn->query("SELECT COUNT(*) as total FROM blogs");
    $totalRow = $totalResult->fetch_assoc();
    $totalBlogs = $totalRow['total'];
    $totalPages = ceil($totalBlogs / $perPage);

    return [
        'blogs' => $blogs,
        'totalPages' => $totalPages,
        'currentPage' => $page
    ];
}

?>