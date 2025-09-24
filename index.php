<?php
include_once __DIR__ . '/A_Models/BLOG_Blog.php';
$Title = "Best Branding Agency in Ahmedabad for Business Growth";
$MetaDescription = "EEM Branding is a trusted branding &amp; advertising agency in Ahmedabad, specialising in digital marketing, logo design, 3D rendering, and brochure design solutions.";
$MetaKeywords = "branding agency in Ahmedabad, best branding agency, advertising agency Ahmedabad, logo design Ahmedabad, digital marketing agency Ahmedabad, SEO services Ahmedabad, social media marketing Ahmedabad, PPC advertising Ahmedabad, 3D rendering company, brochure design Ahmedabad, creative design agency, website development Ahmedabad, mobile app development Ahmedabad, UI UX design Ahmedabad, branding solutions, business branding services, corporate branding Ahmedabad, brand identity design, best digital marketing agency, content marketing services";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
$testOBJ = new BLOG_Blog();
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 3;
$myaraa = $testOBJ->selectblog($page, $limit);
$total = $testOBJ->getBlogCount();
$totalPages = ceil($total / $limit);

reset($myaraa);
?>
  <!-- Slick CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <main class="main-area">
        <div data-elementor-type="wp-page" data-elementor-id="495" class="elementor elementor-495">
            <div class="elementor-element elementor-element-eb77b1b e-con-full bg-dark-, banner-slider e-flex e-con e-parent"
                data-id="eb77b1b" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-d883cab elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-shortcode"
                    data-id="d883cab" data-element_type="widget" data-widget_type="shortcode.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                            <script>(function ($) { var expand; $(function () { var $accordion, $wideScreen; $accordion = $('#accordion').children('li'); $wideScreen = $(window).width() > 767; if ($wideScreen) { $accordion.on('mouseenter click', function (e) { var $this; e.stopPropagation(); $this = $(this); if ($this.hasClass('out')) { $this.addClass('out') } else { $this.addClass('out'); $this.siblings().removeClass('out') } }) } else { $accordion.on('touchstart touchend', function (e) { var $this; e.stopPropagation(); $this = $(this); if ($this.hasClass('out')) { $this.addClass('out') } else { $this.addClass('out'); $this.siblings().removeClass('out') } }) } }) })(jQuery)</script>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a832da6 elementor-widget elementor-widget-html"
                    data-id="a832da6" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <div class="accrdion-portfolio-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <ul class="accordion-portfolio-lists text-light" id="accordion">
                                        <li
                                            style="background-size:cover; background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('https://eembranding.com/assest/img/home/hero/01-LAMINATE-CATALOGUE-DESIGN.avif');">
                                            <h3>Laminate Catalogue Design</h3>
                                            <span>01</span>
                                            <div class="accordion-overlay">
                                                <span>Laminate Catalogue Design</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Visual Design Stories</a>
                                                </h2>
                                                <p>
                                                    Crafting captivating laminate folder designs that weave stories,
                                                    combining striking visuals with informative content, leaving a
                                                    memorable impact.</p>
                                                <a href="services/catalogue-design-company-in-ahmedabad" data-bs-toggle="" data-bs-target=""><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li class="out"
                                            style="background-size:cover; background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('https://eembranding.com/assest/img/home/hero/02-CREATIVE-DESIGNING.avif');">
                                            <h3>Creative Designing</h3>
                                            <span>02</span>
                                            <div class="accordion-overlay">
                                                <span>Creative Designing</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Identity Maestros</a></h2>
                                                <p>
                                                    Shaping iconic identities that resonate deeply and leave a lasting
                                                    impression.</p>
                                                <a href="services/creative-design-agency-in-ahmedabad" data-bs-toggle="" data-bs-target=""><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li
                                            style="background-size:cover; background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('https://eembranding.com/assest/img/home/hero/03-DIGITAL-MARKETING.avif');">
                                            <h3>Digital Marketing</h3>
                                            <span>03</span>
                                            <div class="accordion-overlay">
                                                <span>Digital Marketing</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Innovative Creations</a>
                                                </h2>
                                                <p>
                                                    From concept to execution, we breathe life into ideas, delivering
                                                    designs that captivate and inspire audiences.</p>
                                                <a href="services/digital-marketing-agency-ahmedabad" data-bs-toggle=""
                                                    data-bs-target=""><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li
                                            style="background-size:cover; background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('https://eembranding.com/assest/img/home/hero/04-WEBSITE-MOBILE.avif');">
                                            <h3>Website &amp; Mobile</h3>
                                            <span>04</span>
                                            <div class="accordion-overlay">
                                                <span>Website &amp; Mobile</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Designing and
                                                        Development</a></h2>
                                                <p>
                                                    Crafting seamless digital experiences for your website and mobile
                                                    platforms with our expert designing and development services.</p>
                                                <a href="services/website-design-company-in-ahmedabad" data-bs-toggle="" data-bs-target=""><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f065a14 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-html"
                    data-id="f065a14" data-element_type="widget" data-widget_type="html.default">
                    <div class="elementor-widget-container">
                        <div class="accrdion-portfolio-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <ul class="accordion-portfolio-lists text-light" id="accordion">
                                        <li
                                            style="background-size:cover; background:linear-gradient(0deg, rgba(255, 0, 150, 0.3), rgba(255, 0, 150, 0.3)), url('https://eembranding.com/assest/img/home/hero/01-LAMINATE-catalogue-design-company-in-ahmedabad.avif');">
                                            <h3>Laminate Catalogue Design</h3>
                                            <span>01</span>
                                            <div class="accordion-overlay">
                                                <span>Laminate Catalogue Design</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Visual Design Stories</a>
                                                </h2>
                                                <p>
                                                    Crafting captivating laminate folder designs that weave stories,
                                                    combining striking visuals with informative content, leaving a
                                                    memorable impact.</p>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#projectSingleModal"><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li class="out"
                                            style="background-image: url('https://eembranding.com/assest/img/home/hero/02-CREATIVE-DESIGNING.avif');">
                                            <h3>Creative Designing</h3>
                                            <span>02</span>
                                            <div class="accordion-overlay">
                                                <span>Creative Designing</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Identity Maestros</a></h2>
                                                <p>
                                                    Shaping iconic identities that resonate deeply and leave a lasting
                                                    impression.</p>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#projectSingleModal"><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li
                                            style="background-image: url('https://eembranding.com/assest/img/home/hero/03-DIGITAL-MARKETING.avif');">
                                            <h3>Digital Marketing</h3>
                                            <span>03</span>
                                            <div class="accordion-overlay">
                                                <span>Digital Marketing</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Innovative Creations</a>
                                                </h2>
                                                <p>
                                                    From concept to execution, we breathe life into ideas, delivering
                                                    designs that captivate and inspire audiences.</p>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#projectSingleModal"><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li
                                            style="background-image: url('https://eembranding.com/assest/img/home/hero/04-WEBSITE-MOBILE.avif');">
                                            <h3>Website &amp; Mobile</h3>
                                            <span>04</span>
                                            <div class="accordion-overlay">
                                                <span>Website &amp; Mobile</span>
                                                <h2><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#projectSingleModal">Designing and
                                                        Development</a></h2>
                                                <p>
                                                    Crafting seamless digital experiences for your website and mobile
                                                    platforms with our expert designing and development services.</p>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#projectSingleModal"><i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="elementor-element elementor-element-a447f1a elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
                data-id="a447f1a" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d7fb0ec e-con-full e-flex e-con e-child"
                        data-id="d7fb0ec" data-element_type="container">
                        <div class="elementor-element elementor-element-d816505 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                            data-id="d816505" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img fetchpriority="high" decoding="async" width="512" height="512"
                                    src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                    class="attachment-large size-large wp-image-5646"   loading="lazy"  alt="">
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-81aaaa4 e-con-full e-flex e-con e-child"
                        data-id="81aaaa4" data-element_type="container">
                        <div class="elementor-element elementor-element-5ed6985 elementor-widget elementor-widget-tg-heading"
                            data-id="5ed6985" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <div class="section-title-two tg-heading-subheading animation-style3">
                                    <span class="sub-title tg-element-title">
                                        <div class="split-line split-line-home-div">
                                            <div class="splite-line-home-sub-div">
                                                <div class="aboutus-name-class">
                                                    <h2>about us </h2>
                                                </div>
                                            </div>

                                        </div>
                                    </span>
                                    <h2 class="title tg-element-title">
                                        <div class="split-line split-line-home-div">
                                            <h3>audio + visual + publicity</h3>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-eb0d556 elementor-widget elementor-widget-text-editor"
                            data-id="eb0d556" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>At <strong>eem</strong>Branding, we specialize in creating unforgettable audio-visual
                                    experiences that captivate audiences and elevate brands. With a passion for
                                    storytelling and a commitment to excellence, we leverage cutting-edge technology and
                                    innovative strategies to craft compelling narratives that resonate with your target
                                    audience.</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-487a50f elementor-widget elementor-widget-text-editor"
                            data-id="487a50f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><strong>Client-Centric Approach:</strong> At <strong>eem</strong>Branding, we believe
                                    in building long-term relationships with our clients. We take the time to understand
                                    your brand, your objectives, and your challenges, tailoring our services to meet
                                    your specific needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
           <!-- Branding Agency In Ahmedabad -->
            <div class="elementor-element elementor-element-b41f9b7 e-flex e-con-boxed e-con e-parent" data-id="b41f9b7"
                data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-dfe69f4 e-con-full e-flex e-con e-child"
                        data-id="dfe69f4" data-element_type="container">
                        <div class="elementor-element elementor-element-cb5e0db elementor-widget elementor-widget-tg-heading"
                            data-id="cb5e0db" data-element_type="widget" data-widget_type="tg-heading.default">
                            <div class="elementor-widget-container">
                                <div class="section-title-two tg-heading-subheading animation-style3">
                                    <h3 class="title tg-element-title">
                                        <div class="split-line split-line-home-div">
                                            <h1>Branding Agency In Ahmedabad </h1>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-95ffdd0 elementor-widget elementor-widget-text-editor"
                            data-id="95ffdd0" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><span style="font-weight: 400;">Transform Your Business with Expert Branding,
                                        Marketing, and Design</span></p>
                                <p><span style="font-weight: 400;">At our </span><a
                                        href="services/advertising-agency-in-ahmedabad"><b>branding
                                            and advertising agency</b></a><span style="font-weight: 400;">, we believe
                                        that strong branding is the cornerstone of business success. Our creative team
                                        works closely with you to craft a unique identity that reflects your values,
                                        engages your audience, and sets you apart from competitors. Whether it’s a
                                        complete brand overhaul or a new campaign launch, we deliver solutions that
                                        drive impact.</span></p>
                                <p><span style="font-weight: 400;">In the digital age, visibility is everything.
                                        Our</span> <a href="services/digital-marketing-agency-ahmedabad"><b>digital
                                            marketing services</b></a><span style="font-weight: 400;"> are designed to
                                        help you reach the right audience through data-driven strategies. From search
                                        engine optimization (SEO) and social media marketing to pay-per-click
                                        advertising, we ensure your business gains the exposure it deserves.</span></p>
                                <p><span style="font-weight: 400;">For businesses in the laminate industry, we offer
                                        professional</span><a href="services/catalogue-design-company-in-ahmedabad">
                                        <b>laminate catalogue design services</b></a><span style="font-weight: 400;">
                                        that highlight the quality and variety of your products. Our catalogues are
                                        designed to be visually stunning and informative, providing your clients with a
                                        clear representation of your offerings.</span></p>
                                <p><span style="font-weight: 400;">Your website is your digital storefront. Our
                                    </span><a href="services/website-design-company-in-ahmedabad"><b>website
                                            design services</b></a><span style="font-weight: 400;"> focus on creating
                                        modern, responsive websites that offer seamless user experiences. We blend
                                        creativity with functionality to develop websites that not only look great but
                                        are also optimized for search engines and conversions.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CREATIVE SOLUTIONS -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-87de0e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="87de0e2" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8fe1e3b"
                        data-id="8fe1e3b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0edc3e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="0edc3e7" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b88d25"
                                        data-id="2b88d25" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d75879b elementor-widget__width-initial elementor-absolute elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="d75879b" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img fetchpriority="high" decoding="async" width="512" height="512"
                                                        src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                        class="attachment-large size-large wp-image-5646"   loading="lazy"  alt="">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-85d5e43 text-center elementor-widget elementor-widget-tg-heading"
                                                data-id="85d5e43" data-element_type="widget"
                                                data-widget_type="tg-heading.default">
                                            
                                                <div class="elementor-widget-container">
		                                                <div class="section-title-two tg-heading-subheading animation-style3">
                                                                        <span class="sub-title tg-element-title" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">C</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">R</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">E</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">T</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">I</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">V</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">E</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">S</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">O</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">L</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">U</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">T</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">I</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">O</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">N</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">S</div></div></div></span>
                                                    <h2 class="title tg-element-title" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">Y</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">G</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">w</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">h</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">,</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">O</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">M</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">:</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">L</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">D</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">M</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">k</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div></div> </div><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">c</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">y</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">.</div></div></div></h2>
                                                </div>        
		                                    </div>  
                                            </div>
                                            <div class="elementor-element elementor-element-6c8b320 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="6c8b320" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="58" height="58"
                                                        src="https://eembranding.com/assest/img/icon/Untitled-2.png"
                                                        class="attachment-large size-large wp-image-5080"   loading="lazy"  alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-2b1c2d9 services-icon elementor-widget elementor-widget-tg-servicesBox"
                                data-id="2b1c2d9" data-element_type="widget" data-widget_type="tg-servicesBox.default">
                                <div class="elementor-widget-container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".0s"
                                                style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/catalogue-design-company-in-ahmedabad">Laminate
                                                            Catalogue Design Services In Ahmedabad</a>
                                                    </h2>
                                                    <p>Transform your brand's identity into tangible excellence with our
                                                        bespoke laminate folder designs. From sleek and professional to
                                                        eye-catching and vibrant, our designs elevate your marketing
                                                        materials, leaving a lasting impression on clients and partners
                                                        alike.</p>
                                                    <a href="services/catalogue-design-company-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".2s"
                                                style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/2-creative-design.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/creative-design-agency-in-ahmedabad">Creative
                                                            Designing Agency In Ahmedabad</a>
                                                    </h2>
                                                    <p>Elevate your brand's visual identity with our innovative and
                                                        captivating creative designing services. From logos to branding
                                                        materials, we bring your vision to life with flair and finesse.
                                                    </p>
                                                    <a href="services/creative-design-agency-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".4s"
                                                style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/digital-marketing-agency-ahmedabad">Digital
                                                            Marketing Agency In Ahmedabad</a>
                                                    </h2>
                                                    <p>Amplify your brand's online presence and generate targeted
                                                        traffic with our comprehensive digital marketing services. From
                                                        strategic planning to execution, we guide you through the
                                                        digital landscape for maximum impact and ROI.</p>
                                                    <a href="services/digital-marketing-agency-ahmedabad" class="link-btn">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".6s"
                                                style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/4-UIUx.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/ui-ux-design-company-in-ahmedabad">Ui
                                                            Ux Design Company In Ahmedabad</a>
                                                    </h2>
                                                    <p>Enhance user satisfaction and engagement with our UI/UX Designing
                                                        services, meticulously crafted to deliver intuitive and visually
                                                        appealing digital experiences."
                                                        From wireframes to prototypes, we specialise in creating
                                                        user-centric designs that elevate your brand and drive
                                                        conversions.</p>
                                                    <a href="services/ui-ux-design-company-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".8s"
                                                style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/5-website-development.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/website-design-company-in-ahmedabad">Website
                                                            Design &amp; Development Company In Ahmedabad</a>
                                                    </h2>
                                                    <p>Empower your online presence with our cutting-edge website
                                                        development services tailored to your unique needs</p>
                                                    <a href="services/website-design-company-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".10s"
                                                style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/6-mobile-app.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/mobile-app-development-company-ahmedabad">Mobile
                                                            App Design &amp; Development Company In Ahmedabad</a>
                                                    </h2>
                                                    <p>Transform your ideas into stunning, user-friendly mobile
                                                        applications with our comprehensive design and development
                                                        services. From concept to launch, we're here to bring your app
                                                        vision to life with cutting-edge technology and intuitive
                                                        design.</p>
                                                    <a href="services/mobile-app-development-company-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".10s"
                                                style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/ExhibitionIcon.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/exhibition-stall-design-company-ahmedabad">Creative & Custom Exhibition Stall Design Services in India</a>
                                                    </h2>
                                                    <p>We create custom exhibition stalls with 3D design and full setup across India. Perfect for trade shows in Ahmedabad, Delhi, Mumbai, and more.</p>
                                                    <a href="services/exhibition-stall-design-company-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".14s"
                                                style="visibility: hidden; animation-delay: 0.14s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/8-3d-rendering.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/3d-rendering-company-in-ahmedabad">3d
                                                            Rendering Services In Ahmedabad</a>
                                                    </h2>
                                                    <p>Elevate your projects with stunning visualisations through our
                                                        precise 3D rendering services. From architectural designs to
                                                        digital walk through, we bring your ideas to life with
                                                        unparalleled realism and detail.</p>
                                                    <a href="services/3d-rendering-company-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="services-item-two wow fadeInUp" data-wow-delay=".16s"
                                                style="visibility: hidden; animation-delay: 0.16s; animation-name: none;">
                                                <div class="services-icon-two">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/icon/9-outdoor-branding.png"
                                                          loading="lazy"  alt="Icon">
                                                </div>
                                                <div class="services-content-two">
                                                    <h2 class="title">
                                                        <a href="services/advertising-agency-in-ahmedabad">Advertising
                                                            Agency In Ahmedabad</a>
                                                    </h2>
                                                    <p>Elevate your brand's visibility with captivating outdoor branding
                                                        solutions tailored to leave a lasting impression on your target
                                                        audience. From eye-catching billboards to engaging signage, we
                                                        help you stand out in the great outdoors.</p>
                                                    <a href="services/advertising-agency-in-ahmedabad" class="link-btn">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-89541a9 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                data-id="89541a9" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img  decoding="async" width="134" height="134"
                                        src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                                        class="attachment-large size-large wp-image-5081"   loading="lazy"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Projects -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-ffe4d1e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="ffe4d1e" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0a8b6dd"
                        data-id="0a8b6dd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-6b74726 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="6b74726" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-30ff143"
                                        data-id="30ff143" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b57a11c elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                                data-id="b57a11c" data-element_type="widget"
                                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="58" height="58"
                                                        src="https://eembranding.com/assest/img/icon/Untitled-2.png"
                                                        class="attachment-large size-large wp-image-5080"   loading="lazy"  alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-701f65a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="701f65a" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3157e1e"
                                        data-id="3157e1e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7233517 elementor-widget elementor-widget-project-list"
                                                data-id="7233517" data-element_type="widget"
                                                data-widget_type="project-list.default">
                                                <div class="elementor-widget-container">
                                                    <div class="project-area-two">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp"
                                                                    data-wow-delay=".1s"
                                                                    style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-8.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/moonshineenchanting"
                                                                        class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp"
                                                                    data-wow-delay=".2s"
                                                                    style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-11.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/fabrino-fabric" class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp"
                                                                    data-wow-delay=".3s"
                                                                    style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-7.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/dazzle-berryenpastel"
                                                                        class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp"
                                                                    data-wow-delay=".4s"
                                                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-12.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/ranwood-rega" class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp"
                                                                    data-wow-delay=".5s"
                                                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/kooyoo-enchanting" class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="project-item-two wow fadeInUp animated"
                                                                    data-wow-delay=".6s"
                                                                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-3.avif"
                                                                          loading="lazy"  alt="Image">
                                                                    <a href="portfolio/kiana"
                                                                        class="link-icon">
                                                                        <img decoding="async"
                                                                            src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                              loading="lazy"  alt="Icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="elementor-element elementor-element-11624ef text-center elementor-widget__width-initial elementor-widget elementor-widget-tg-heading"
                                                data-id="11624ef" data-element_type="widget"
                                                data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="section-title-two tg-heading-subheading animation-style3">
                                                        <span class="sub-title tg-element-title"
                                                            style="perspective: 400px;">
                                                            <h6>Our Projects</h6>
                                                        </span>
                                                        <h2 class="title tg-element-title" style="perspective: 400px;">
                                                            Explore our showcased portfolio to see <br>
                                                             how we transform creative vision into captivating audio-visual masterpieces.
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="elementor-element elementor-element-11624ef text-center elementor-widget__width-initial elementor-widget elementor-widget-tg-heading" data-id="11624ef" data-element_type="widget" data-widget_type="tg-heading.default">
				                                <div class="elementor-widget-container">        
                                                 <div class="section-title-two tg-heading-subheading animation-style3">
                                                    <span class="sub-title tg-element-title" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">O</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">j</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">c</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div></div></div></span>
                                                        <h2 class="title tg-element-title" style="perspective: 400px;">
                                                            Explore our showcased portfolio to see <br>
                                                             how we transform creative vision into captivating audio-visual masterpieces.
                                                        </h2>
                                                    </div>        
		                                        </div>
				                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-6c14204 elementor-widget elementor-widget-tg-btn"
                                data-id="6c14204" data-element_type="widget" data-widget_type="tg-btn.default">
                                <div class="elementor-widget-container">
                                    <a href="" target="_self" rel="nofollow" class="btn">
                                        More Projects<span></span>
                                    </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-418c0cc elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                data-id="418c0cc" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img  decoding="async" width="134" height="134"
                                        src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                                        class="attachment-large size-large wp-image-5081"   loading="lazy"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- Testimonial -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-236c1cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="236c1cb" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-303dc73"
                        data-id="303dc73" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-3b29b66 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                data-id="3b29b66" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eb4d422"
                                        data-id="eb4d422" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1f63193 elementor-widget elementor-widget-tg-heading"
                                                data-id="1f63193" data-element_type="widget"
                                                data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="section-title-two tg-heading-subheading animation-style3">
                                                        <span class="sub-title tg-element-title">Testimonial</span>

                                                        <h2 class="title tg-element-title">Sincere Remarks
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5ab8657"
                                        data-id="5ab8657" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-b949937 elementor-widget elementor-widget-html"
                                                data-id="b949937" data-element_type="widget"
                                                data-widget_type="html.default">
                                                <div class="elementor-widget-container">
                                                    <div class="testimonial-nav m-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-6bc372a elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                data-id="6bc372a" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="58" height="58"
                                        src="https://eembranding.com/assest/img/icon/Untitled-2.png"
                                        class="attachment-large size-large wp-image-5080"   loading="lazy"  alt="" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ab09290 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                data-id="ab09290" data-element_type="widget"
                                data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img  decoding="async" width="134" height="134"
                                        src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                                        class="attachment-large size-large wp-image-5081"   loading="lazy"  alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="custom-displaynone elementor-section elementor-top-section elementor-element elementor-element-7a336c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7a336c0" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a63ca7e"
                        data-id="a63ca7e" data-element_type="column">
                        <div class=" elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-77f1b1d test-bg elementor-widget elementor-widget-testimonial"
                                data-id="77f1b1d" data-element_type="widget" data-widget_type="testimonial.default">
                                <div class="elementor-widget-container">


                                    <script>
                                        jQuery(document).ready(function ($) {

                                            /*===========================================
                                                =           Brand Active         =
                                            =============================================*/
                                            $('.testimonial-active').slick({
                                                dots: true,
                                                infinite: true,
                                                speed: 2000,
                                                autoplay: true,
                                                arrows: false,
                                                rtl: false,
                                                slidesToShow: 2,
                                                slidesToScroll: 1,
                                                responsive: [{
                                                    breakpoint: 1200,
                                                    settings: {
                                                        slidesToShow: 2,
                                                        slidesToScroll: 1,
                                                        infinite: true,
                                                    }
                                                },
                                                {
                                                    breakpoint: 992,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1
                                                    }
                                                },
                                                {
                                                    breakpoint: 767,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1,
                                                        arrows: false,
                                                    }
                                                },
                                                {
                                                    breakpoint: 575,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1,
                                                        arrows: false,
                                                    }
                                                },
                                                ]
                                            });

                                        });
                                    </script>

                                    <div class="row testimonial-active">
                                        <div class="col-lg-6 custom-sider-width">
                                            <div class="testimonial-item">
                                                <div class="testimonial-avatar">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/placeholder.png"
                                                          loading="lazy"  alt="">

                                                    <div class="icon">
                                                        <img decoding="async"
                                                            src="https://eembranding.com/assest/img/home/placeholder.png"
                                                              loading="lazy"  alt="Icon">
                                                    </div>
                                                </div>

                                                <div class="testimonial-content">
                                                    <p>Thank you for masterfully encapsulating our local essence and
                                                        cultural heritage, significantly enhancing our brand recognition
                                                        and strengthening our ties with the community. </p>
                                                    <div class="content-bottom">
                                                        <h2 class="title">Iscon Gathiya</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 custom-sider-width">
                                            <div class="testimonial-item">
                                                <div class="testimonial-avatar">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/placeholder.png"
                                                          loading="lazy"  alt="">

                                                    <div class="icon">
                                                        <img decoding="async"
                                                            src="https://eembranding.com/assest/img/home/placeholder.png"
                                                              loading="lazy"  alt="Icon">
                                                    </div>
                                                </div>

                                                <div class="testimonial-content">
                                                    <p>The team demonstrated extraordinary creativity and meticulous
                                                        attention to detail, transforming our catalogues into potent
                                                        marketing instruments that elevated our brand&#039;s image and
                                                        spurred increased interest and sales for our premium laminates.
                                                    </p>
                                                    <div class="content-bottom">
                                                        <h2 class="title">Rosewood</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 custom-sider-width">
                                            <div class="testimonial-item">
                                                <div class="testimonial-avatar">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/placeholder.png"
                                                          loading="lazy"  alt="">

                                                    <div class="icon">
                                                        <img decoding="async"
                                                            src="https://eembranding.com/assest/img/home/placeholder.png"
                                                              loading="lazy"  alt="Icon">
                                                    </div>
                                                </div>

                                                <div class="testimonial-content">
                                                    <p>Their creativity and precision in designing our premium
                                                        catalogues have truly showcased the essence of Suntouch
                                                        laminates, boosting our brand&#039;s appeal and engagement.</p>
                                                    <div class="content-bottom">
                                                        <h2 class="title">Suntouch</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 custom-sider-width">
                                            <div class="testimonial-item">
                                                <div class="testimonial-avatar">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/placeholder.png"
                                                          loading="lazy"  alt="">

                                                    <div class="icon">
                                                        <img decoding="async"
                                                            src="https://eembranding.com/assest/img/home/placeholder.png"
                                                              loading="lazy"  alt="Icon">
                                                    </div>
                                                </div>

                                                <div class="testimonial-content">
                                                    <p>On time Delivery, with a clear thought process to deliver what we
                                                        wanted with our collaterals.</p>
                                                    <div class="content-bottom">
                                                        <h2 class="title">Nalisha Valves and Automation LTD.</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 custom-sider-width">
                                            <div class="testimonial-item">
                                                <div class="testimonial-avatar">
                                                    <img decoding="async"
                                                        src="https://eembranding.com/assest/img/home/placeholder.png"
                                                          loading="lazy"  alt="">

                                                    <div class="icon">
                                                        <img decoding="async"
                                                            src="https://eembranding.com/assest/img/home/placeholder.png"
                                                              loading="lazy"  alt="Icon">
                                                    </div>
                                                </div>

                                                <div class="testimonial-content">
                                                    <p>Designing a producing excellent creative Laminate Catalogues for
                                                        us to make our brand identity unique.</p>
                                                    <div class="content-bottom">
                                                        <h2 class="title">Nelson Laminate</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="elementor-element elementor-element-19896c7 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-text-editor"
                                data-id="19896c7" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div> -->
                            <!-- <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b6a4f93 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b6a4f93" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3a20cc7"
                                        data-id="3a20cc7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f3d437d text-center elementor-widget elementor-widget-tg-heading"
                                                data-id="f3d437d" data-element_type="widget"
                                                data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="section-title-two tg-heading-subheading animation-style3">
                                                        <span class="sub-title tg-element-title">Blog Post</span>

                                                        <h2 class="title tg-element-title">Interesting Articles Updated
                                                            Daily</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->
                            <!-- <div class="elementor-element elementor-element-a0e1c86 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-blogpost"
                                data-id="a0e1c86" data-element_type="widget" data-widget_type="blogpost.default">
                                <div class="elementor-widget-container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-10 col-sm-10">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb">
                                                    <a
                                                        href="blogs-graphic-design">
                                                        <img  decoding="async" width="1200" height="800"
                                                            src="https://eembranding.com/assest/img/blogs/Blog-Graphic-design.jpg"
                                                            class="attachment-7100 size-7100 wp-post-image"   loading="lazy"  alt=""
                                                            full="" /> </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <a href="category-blog"
                                                        class="tag">Blogs</a>
                                                    <h2 class="title"><a
                                                            href="blogs-graphic-design">The
                                                            Power of Graphic Design in Brand Identity Building</a></h2>
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="fas fa-calendar-alt"></i>March 18, 2025</li>
                                                            <li><i class="far fa-user"></i>
                                                                <a href="mailto:eembranding@gmail.com">eembranding@gmail.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-sm-10">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb">
                                                    <a
                                                        href="blogs-powerful-branding-strategies">
                                                        <img  decoding="async" width="1200" height="800"
                                                            src="https://eembranding.com/assest/img/blogs/1banner-4.jpg"
                                                            class="attachment-7088 size-7088 wp-post-image"   loading="lazy"  alt=""
                                                            full="" /> </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <a href="category-blog"
                                                        class="tag">Blogs</a>
                                                    <h2 class="title"><a
                                                            href="blogs-powerful-branding-strategies">Powerful
                                                            Branding Strategies to Drive Business Growth &#038;
                                                            Revenue</a></h2>
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="fas fa-calendar-alt"></i>March 11, 2025</li>
                                                            <li><i class="far fa-user"></i><a href="mailto:eembranding@gmail.com">eembranding@gmail.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-sm-10">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb">
                                                    <a
                                                        href="blogs-rendering">
                                                        <img  decoding="async" width="1200" height="800"
                                                            src="https://eembranding.com/assest/img/blogs/2Blog-5.jpg"
                                                            class="attachment-7075 size-7075 wp-post-image"   loading="lazy"  alt=""
                                                            full="" /> </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <a href="category-blog"
                                                        class="tag">Blogs</a>
                                                    <h2 class="title"><a
                                                            href="blogs-rendering">How
                                                            3D Rendering Can Help Brands Stand Out in a Competitive
                                                            Market</a></h2>
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="fas fa-calendar-alt"></i>March 7, 2025</li>
                                                            <li><i class="far fa-user"></i><a href="mailto:eembranding@gmail.com">eembranding@gmail.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-10 col-sm-10">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb">
                                                    <a
                                                        href="blogs-best-laminate-catalogue">
                                                        <img  decoding="async" width="1200" height="800"
                                                            src="https://eembranding.com/assest/img/blogs/3banner-for-laminate-catalogue-1.jpg"
                                                            class="attachment-7056 size-7056 wp-post-image"   loading="lazy"  alt=""
                                                            full="" /> </a>
                                                </div>
                                                <div class="blog-post-content">
                                                    <a href="category-blog"
                                                        class="tag">Blogs</a>
                                                    <h2 class="title"><a
                                                            href="blogs-best-laminate-catalogue">Best
                                                            Laminate Catalogue Design Services in India</a></h2>
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="fas fa-calendar-alt"></i>February 28, 2025
                                                            </li>
                                                            <li><i class="far fa-user"></i><a href="mailto:eembranding@gmail.com">eembranding@gmail.com</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        
                    </div>
                </div>
            </section>
            <section
                class="custom-displayblock  elementor-section elementor-top-section elementor-element elementor-element-7a336c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="7a336c0" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a63ca7e"
                        data-id="a63ca7e" data-element_type="column">
                        <div class=" secondphoneview-container">
                             <div class="secondphoneview-testimonials-slider" id="secondphoneview-slider">
                                 <div class="secondphoneview-testimonials-track" id="secondphoneview-track">
                                     <div class="secondphoneview-testimonial-card">
                                         <p class="secondphoneview-testimonial-text">
                                             On time Delivery, with a clear thought process to deliver what we wanted with our collaterals.
                                         </p>
                                         <h3 class="secondphoneview-company-name">Nalisha Valves And Automation LTD.</h3>
                                     </div>

                                     <div class="secondphoneview-testimonial-card">
                                         <p class="secondphoneview-testimonial-text">
                                             Designing a producing excellent creative Laminate Catalogues for us to make our brand identity unique.
                                         </p>
                                         <h3 class="secondphoneview-company-name">Nelson Laminate</h3>
                                     </div>

                                     <div class="secondphoneview-testimonial-card">
                                         <p class="secondphoneview-testimonial-text">
                                             Outstanding service quality and professional approach. They exceeded our expectations in every aspect.
                                         </p>
                                         <h3 class="secondphoneview-company-name">Creative Solutions Inc.</h3>
                                     </div>
                                 </div>
                                 <div class="secondphoneview-touch-indicator">Swipe →</div>
                             </div>

                             <div class="secondphoneview-navigation">
                                 <button class="secondphoneview-nav-btn" id="secondphoneview-prevBtn">‹</button>
                                 <div class="secondphoneview-pagination">
                                     <div class="secondphoneview-pagination-dot active" data-slide="0"></div>
                                     <div class="secondphoneview-pagination-dot" data-slide="1"></div>
                                     <div class="secondphoneview-pagination-dot" data-slide="2"></div>
                                 </div>
                                 <button class="secondphoneview-nav-btn" id="secondphoneview-nextBtn">›</button>
                             </div>
                         </div>
                        
                    </div>
                </div>
            </section>

            <!-- blogs  -->
            <div class="elementor-element elementor-element-319dc0b e-flex e-con-boxed e-con e-parent e-lazyloaded"
                data-id="319dc0b" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4cb10b0 text-center elementor-widget elementor-widget-tg-heading"
                        data-id="4cb10b0" data-element_type="widget" data-widget_type="tg-heading.default">
                        <!-- <div class="elementor-widget-container">
                            <div class="section-title-two tg-heading-subheading animation-style3">
                                <div class="sub-title tg-element-title">
                                    <div class="split-line split-line-home-div">
                                        <h6>Blog Post</h6>
                                    </div>
                                </div>
                                <h2 class="title tg-element-title">
                                    Interesting Article Updates
                                </h2>
                            </div>
                        </div> -->
                        <div class="elementor-widget-container">
                            <div class="section-title-two tg-heading-subheading animation-style3">
                                    <span class="sub-title tg-element-title" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">B</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">P</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div></div></div></span>
                             <h2 class="title tg-element-title" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">I</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">g</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">A</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">r</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">i</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">c</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">l</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">U</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">d</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">t</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">e</div><div style="position: relative; display: inline-block; opacity: 1; transform: translate(0px, 0px);">s</div></div></div></h2>
                        </div>
		                </div>
                    </div>
                    <div class="elementor-element elementor-element-aac83e7 section-title-style-default readmore-btn-only-text meta-visibility-show title_position_default title_hover_border_default title-default img_hover_animation_default meta_position_default tpg-category-position-default grid-hover-overlay-type-always tpg-el-box-border-enable tpg-border-bottom-disable elementor-widget elementor-widget-tpg-grid-layout"
                        data-id="aac83e7" data-element_type="widget" data-widget_type="tpg-grid-layout.default">
                        <div class="elementor-widget-container">
                            <div class="rt-container-fluid rt-tpg-container tpg-el-main-wrapper clearfix grid-layout4-main "
                                id="rt-tpg-container-2422815129" data-layout="grid-layout4"
                                data-grid-style="tpg-full-height" data-sc-id="elementor" data-el-settings=""
                                data-el-query="" data-el-path="">
                                <div class="tpg-header-wrapper ">
                                    <div class="tpg-widget-heading-wrapper rt-clear heading-default ">
                                        <span class="tpg-widget-heading-line line-left"></span>
                                        <h2 class="tpg-widget-heading">
                                            <span>
                                            </span>
                                        </h2> <span class="tpg-widget-heading-line line-right"></span>
                                    </div>
                                </div>
                                <div data-title="Loading ..."
                                    class="rt-row rt-content-loader grid-layout4 grid-behaviour tpg-full-height grid_layout_wrapper">
                                    <?php
                                        while ($item = current($myaraa)) {
                                            ?>
                                            <div class="rt-col-md-4 rt-col-sm-6 rt-col-xs-12 default rt-grid-item" data-id="7100">
                                                <div class="rt-holder tpg-post-holder">
                                                    <div class="rt-detail rt-el-content-wrapper">
                                                        <div class="rt-img-holder tpg-el-image-wrap has-thumbnail">
                                                            <a data-id="7100" href="<?php echo $item["URL"]; ?>" class="tpg-post-link" target="_self">
                                                                <img fetchpriority="high" decoding="async" src="<?php echo $item['Thumbnail']; ?>"
                                                                     class="rt-img-responsive" width="1200" height="800"
                                                                       loading="lazy"  alt="The Power of Graphic Design in Brand Identity Building">
                                                            </a>
                                                            <div class="overlay grid-hover-content"></div>
                                                        </div>
                                                    
                                                        <div class="entry-title-wrapper">
                                                            <div class="tpg-separate-category style1 top_left cat-above-title">
                                                                <span class="categories-links">
                                                                    <a class="blogs" href="blogs">Blogs</a>
                                                                </span>
                                                            </div>
                                                            <h3 class="entry-title">
                                                                <a data-id="7100" href="<?php echo $item["URL"]; ?>" class="tpg-post-link" target="_self">
                                                                <?php echo $item["BlogTitle"]; ?>
                                                                
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    
                                                        <div class="tpg-excerpt tpg-el-excerpt">
                                                            <div class="tpg-excerpt-inner">
                                                            <?php 
                                                              if (!empty($item["BlogContent"])) {
                                                                  $decodedContent = html_entity_decode($item["BlogContent"]);
                                                                  $plainTextContent = strip_tags($decodedContent);
                                                                  $excerpt = mb_substr(trim($plainTextContent), 0, 150, 'UTF-8');
                                                                  $lastSpace = mb_strrpos($excerpt, ' ', 0, 'UTF-8');
                                                                  if ($lastSpace !== false) {
                                                                      $excerpt = mb_substr($excerpt, 0, $lastSpace, 'UTF-8');
                                                                  }
                                                                  echo $excerpt . '...';
                                                              } else {
                                                                  echo 'No content available...';
                                                              }
                                                              ?>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="post-footer">
                                                            <div class="read-more">
                                                                <a data-id="7100" href="<?php echo $item["URL"]; ?>" class="tpg-post-link" target="_self">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            // Move to next item
                                            next($myaraa);
                                        }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-678f840 elementor-widget elementor-widget-tg-btn"
                        data-id="678f840" data-element_type="widget" data-widget_type="tg-btn.default">
                        <div class="elementor-widget-container">
                            <a href="blogs" target="_blank" rel="nofollow" class="btn">
                                Our Blogs<span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ready to elevate your brand's digital -->
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-08773b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="08773b0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a489b65"
                        data-id="a489b65" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c0962ad elementor-widget elementor-widget-tg-cta"
                                data-id="c0962ad" data-element_type="widget" data-widget_type="tg-cta.default">
                                <div class="elementor-widget-container">
                                    <div class="newsletter-inner">
                                        <div class="newsletter-content">
                                            <div
                                                class="section-title white-title mb-30 tg-heading-subheading animation-style2">
                                                <span class="sub-title tg-element-title">
                                                    <h6 class="text-white"> Ready to elevate your brand's digital
                                                        presence?</h6>
                                                </span>
                                                <h2 class="title tg-element-title">
                                                    Transform your vision into reality today!
                                                </h2>
                                            </div><a href="contact-us" target="_self" rel="nofollow"
                                                class="btn">Call Now <span></span></a>
                                        </div>
                                        <div class="newsletter-img">
                                            <img decoding="async"
                                                src="https://eembranding.com/assest/img/home/newslettar_img.png"
                                                  loading="lazy"  alt="Image" class="wow fadeInRight wp-content-newslettar"
                                                data-wow-delay=".2s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!-- Brand Logo Slider -->

<div class="newbrand-slider-wrapper">
  <div class="newbrand-slide-track">
    <!-- Repeat logos to simulate infinite loop -->
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png" alt="Nalisha"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nelson.png" alt="Nelson"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png" alt="Sun Touch"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png" alt="Bite Bazzar"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bravio.png" alt="Bravio"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/durian.png" alt="Durian"></div>

    <!-- Repeating again for infinite feel -->
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png" alt="Nalisha"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nelson.png" alt="Nelson"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png" alt="Sun Touch"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png" alt="Bite Bazzar"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bravio.png" alt="Bravio"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/durian.png" alt="Durian"></div>
    <!-- Repeating again for infinite feel -->
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png" alt="Nalisha"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/nelson.png" alt="Nelson"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png" alt="Sun Touch"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png" alt="Bite Bazzar"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/bravio.png" alt="Bravio"></div>
    <div class="newbrand-slide"><img src="https://eembranding.com/assest/img/portfolio/logo/durian.png" alt="Durian"></div>
  </div>
</div>
        <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>    
        
       <script>
        class SecondPhoneViewTestimonialSlider {
            constructor() {
                this.currentSlide = 0;
                this.totalSlides = 3;
                this.track = document.getElementById('secondphoneview-track');
                this.dots = document.querySelectorAll('.secondphoneview-pagination-dot');
                this.prevBtn = document.getElementById('secondphoneview-prevBtn');
                this.nextBtn = document.getElementById('secondphoneview-nextBtn');
                this.slider = document.getElementById('secondphoneview-slider');
                
                this.init();
            }

            init() {
                this.bindEvents();
                this.updateSlider();
                this.setupTouchEvents();
            }

            bindEvents() {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());
                
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.goToSlide(index));
                });

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.prevSlide();
                    if (e.key === 'ArrowRight') this.nextSlide();
                });
            }

            setupTouchEvents() {
                let startX = 0;
                let endX = 0;
                let isDragging = false;

                this.slider.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                });

                this.slider.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    e.preventDefault();
                    endX = e.touches[0].clientX;
                });

                this.slider.addEventListener('touchend', () => {
                    if (!isDragging) return;
                    isDragging = false;
                    
                    const diff = startX - endX;
                    const threshold = 50;

                    if (Math.abs(diff) > threshold) {
                        if (diff > 0) {
                            this.nextSlide();
                        } else {
                            this.prevSlide();
                        }
                    }
                });

                // Mouse events for desktop
                this.slider.addEventListener('mousedown', (e) => {
                    startX = e.clientX;
                    isDragging = true;
                    this.slider.style.cursor = 'grabbing';
                });

                document.addEventListener('mousemove', (e) => {
                    if (!isDragging) return;
                    e.preventDefault();
                    endX = e.clientX;
                });

                document.addEventListener('mouseup', () => {
                    if (!isDragging) return;
                    isDragging = false;
                    this.slider.style.cursor = 'grab';
                    
                    const diff = startX - endX;
                    const threshold = 50;

                    if (Math.abs(diff) > threshold) {
                        if (diff > 0) {
                            this.nextSlide();
                        } else {
                            this.prevSlide();
                        }
                    }
                });
            }

            goToSlide(index) {
                this.currentSlide = index;
                this.updateSlider();
            }

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                this.updateSlider();
            }

            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                this.updateSlider();
            }

            updateSlider() {
                const translateX = -this.currentSlide * 33.333;
                this.track.style.transform = `translateX(${translateX}%)`;

                // Update dots
                this.dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentSlide);
                });

                // Update navigation buttons
                this.prevBtn.disabled = this.currentSlide === 0;
                this.nextBtn.disabled = this.currentSlide === this.totalSlides - 1;
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new SecondPhoneViewTestimonialSlider();
        });

        // Auto-play functionality (optional)
        let secondPhoneViewAutoPlayInterval;
        const startSecondPhoneViewAutoPlay = () => {
            secondPhoneViewAutoPlayInterval = setInterval(() => {
                const slider = window.secondPhoneViewTestimonialSlider || new SecondPhoneViewTestimonialSlider();
                slider.nextSlide();
            }, 5000);
        };

        const stopSecondPhoneViewAutoPlay = () => {
            clearInterval(secondPhoneViewAutoPlayInterval);
        };

        // Start auto-play after 3 seconds of inactivity
        let secondPhoneViewInactivityTimer;
        const resetSecondPhoneViewInactivityTimer = () => {
            clearTimeout(secondPhoneViewInactivityTimer);
            stopSecondPhoneViewAutoPlay();
            secondPhoneViewInactivityTimer = setTimeout(startSecondPhoneViewAutoPlay, 3000);
        };

        document.addEventListener('click', resetSecondPhoneViewInactivityTimer);
        document.addEventListener('touchstart', resetSecondPhoneViewInactivityTimer);
        document.addEventListener('keydown', resetSecondPhoneViewInactivityTimer);

        // Store slider instance globally
        window.secondPhoneViewTestimonialSlider = new SecondPhoneViewTestimonialSlider();
    </script>
    <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>