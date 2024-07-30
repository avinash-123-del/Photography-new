@extends('component.master')
@section('content')



<div id="magic-cursor">
    <div id="ball"></div>
</div>

<div id="content-wrap">


    <div id="page-header" class="ph-full ph-bg-image ph-image-shadow ph-image-cover-5 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image 
							============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="assets/img/page-header/project-ph/project-ph-1.jpg" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <div class="ph-caption">
                <div class="ph-categories ph-appear">
                    <div class="ph-category" style="">People</div>
                    <!-- <div class="ph-category">Varia</div> -->
                </div> <!-- /.ph-categories -->

                <h2 class="ph-caption-title ph-appear">Victorian Girls</h2>
            </div>

            <div class="project-info-list anim-fadeinup margin-top-60">
                <ul>
                    <li>
                        <div class="pi-list-heading">Client</div>
                        <div class="pi-list-cont">Themetorium</div>
                    </li>
                    <li>
                        <div class="pi-list-heading">Year</div>
                        <div class="pi-list-cont">2021</div>
                    </li>
                    <li>
                        <div class="pi-list-heading">Role</div>
                        <div class="pi-list-cont">Branding</div> <!-- Describe in a few words -->
                    </li>
                    <li>
                        <div class="pi-list-heading">Website</div>
                        <div class="pi-list-cont"><a href="https://themetorium.net/" target="_blank"
                                rel="noopener">Visit site<span class="pi-list-icon"><i
                                        class="fas fa-arrow-right"></i></span></a></div>
                    </li>
                </ul>
            </div>
            <!-- End project info list -->

        </div> <!-- /.page-header-inner -->

        <!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset) 
						============================== -->
        <a href="#page-content" class="scroll-down-circle" data-offset="30">
            <div class="sdc-inner ph-appear">
                <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                <svg viewBox="0 0 500 500">
                    <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                            id="textcircle"></path>
                    </defs>
                    <text dy="30">
                        <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                    </text>
                </svg>
            </div> <!-- /.sdc-inner -->
        </a>
        <!-- End scroll down circle -->

        <!-- Begin made with love 
						========================== -->
        <div class="made-with-love ph-appear">
            <div class="mwl-inner">
                <div class="mwl-text">Made with</div>
                <div class="mwl-icon"><i class="far fa-heart"></i></div>
            </div>
        </div>
        <!-- End made with love -->

        <!-- Begin page header share (share buttons are for design purposes only!) 
						============================= -->
        <div class="ph-share">
            <div class="ph-share-trigger ph-appear">
                <div class="ph-share-text">Share</div>
                <div class="ph-share-icon magnetic-item"><i class="fas fa-share-alt"></i></div>
            </div> <!-- /.ph-share-trigger -->

            <div class="ph-share-content">
                <div class="ph-share-close cursor-close">
                    <div class="bg-noise"></div>
                </div>
                <div class="ph-share-inner">
                    <h1 class="ph-share-title ph-share-appear">Spread the Word!</h1>
                    <div class="ph-share-subtitle ph-share-appear">Share this project with your friends</div>

                    <div class="social-buttons ph-share-appear">
                        <ul>
                            <li><a href="#0" class="magnetic-item" title="Share on Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0" class="magnetic-item" title="Share on Twitter"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="#0" class="magnetic-item" title="Share on Pinterest"><i
                                        class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div> <!-- /.social-buttons -->

                </div> <!-- /.ph-share-inner -->

                <div class="ph-share-ghost ph-share-appear">Share</div>
            </div> <!-- /.ph-share-content -->
        </div>
        <!-- End page header share -->

    </div>
    <!-- End page header -->

    <div id="page-content">

        <div class="tt-section padding-top-xlg-180 padding-left-sm-3-p padding-right-sm-3-p">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-4 padding-right-md-5-p">

                        <div class="tt-heading tt-heading-xsm margin-bottom-60 anim-fadeinup">
                            <h2 class="tt-heading-title">About</h2>
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                        <!-- End tt-Heading -->

                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-8">

                        <div class="anim-fadeinup text-gray">
                            <p>Answer misery adieus add wooded how nay men before though. Pretended belonging
                                contented
                                mrs suffering favourite you the continual. Mrs civil nay least means tried drift.
                                Natural end law whether but and towards certain. Furnished unfeeling his sometimes
                                see
                                day promotion. Quitting informed concerns can men now informed.</p>

                            <!-- <div class="tt-btn tt-btn-link no-margin">
												<a href="dummy-page.html" data-hover="Explore More">Explore More</a>
											</div> -->
                        </div>

                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

            </div> <!-- /.tt-section-inner -->
        </div>

        <div class="tt-section">
            <div class="tt-section-inner">

                <div class="tt-image tti-fixed-height">
                    <figure>
                        <img class="anim-image-parallax tt-lazy" src="assets/img/low-qlt-thumb.jpg"
                            data-src="assets/img/portfolio/single-project/project-1/project-1-1.jpg" alt="image">
                        <figcaption>
                            Image Caption
                        </figcaption>
                    </figure>
                </div>
                <!-- End tt-image -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <div class="tt-section padding-left-sm-3-p padding-right-sm-3-p">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-8">

                        <div class="tt-heading tt-heading-xsm anim-fadeinup">
                            <h2 class="tt-heading-title">The Vision</h2>
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                        <!-- End tt-Heading -->

                        <div class="anim-fadeinup text-gray">
                            <p>Was justice improve age article between. No projection as up preference reasonably
                                delightful celebrated. Preserved and abilities assurance tolerably breakfast use
                                saw.
                                And painted letters forming far village elderly compact. Her rest west each spot his
                                and
                                you knew. Estate gay wooded depart six far her.</p>
                        </div>

                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-4">
                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <div class="tt-section no-padding-bottom">
            <div class="tt-section-inner tt-wrap">


                <div class="tt-gallery">

                    <div class="tt-grid ttgr-not-cropped ttgr-shifted ttgr-gap-5">

                        <!-- Begin tt-Grid items wrap 
										============================== -->
                        <div class="tt-grid-items-wrap isotope-items-wrap lightgallery">

                            <!-- Begin tt-Grid item
											======================== -->
                            <div class="tt-grid-item isotope-item">
                                <div class="ttgr-item-inner">

                                    <!-- Begin tt-Gallery item 
													=========================== -->
                                    <a href="assets/img/portfolio/single-project/project-1/project-1-2.jpg"
                                        class="tt-gallery-item lg-trigger" data-cursor="View">
                                        <div class="tt-gallery-item-inner">
                                            <div class="tt-gallery-image-wrap">
                                                <figure class="tt-gallery-image ttgr-height">
                                                    <img class="anim-image-parallax"
                                                        src="assets/img/portfolio/single-project/project-1/project-1-2.jpg"
                                                        alt="image">
                                                </figure> <!-- /.tt-gallery-image -->
                                            </div> <!-- /.tt-gallery-image-wrap -->
                                        </div> <!-- /.tt-gallery-item-inner -->
                                    </a>
                                    <!-- End tt-Gallery item -->

                                </div> <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                            <!-- Begin tt-Grid item
											======================== -->
                            <div class="tt-grid-item isotope-item">
                                <div class="ttgr-item-inner">

                                    <!-- Begin tt-Gallery item
													=========================== -->
                                    <a href="assets/img/portfolio/single-project/project-1/project-1-3.jpg"
                                        class="tt-gallery-item lg-trigger" data-cursor="View">
                                        <div class="tt-gallery-item-inner">
                                            <div class="tt-gallery-image-wrap">
                                                <figure class="tt-gallery-image ttgr-height">
                                                    <img class="anim-image-parallax"
                                                        src="assets/img/portfolio/single-project/project-1/project-1-3.jpg"
                                                        alt="image">
                                                </figure> <!-- /.tt-gallery-image -->
                                            </div> <!-- /.tt-gallery-image-wrap -->
                                        </div> <!-- /.tt-gallery-item-inner -->
                                    </a>
                                    <!-- End tt-Gallery item -->

                                </div> <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                            <!-- Begin tt-Grid item
											======================== -->
                            <div class="tt-grid-item isotope-item">
                                <div class="ttgr-item-inner">

                                    <!-- Begin tt-Gallery item 
													=========================== -->
                                    <a href="assets/img/portfolio/single-project/project-1/project-1-4.jpg"
                                        class="tt-gallery-item lg-trigger" data-cursor="View"
                                        data-sub-html="Yes, you can use image captions. :)">
                                        <div class="tt-gallery-item-inner">
                                            <div class="tt-gallery-image-wrap">
                                                <figure class="tt-gallery-image ttgr-height">
                                                    <img class="anim-image-parallax"
                                                        src="assets/img/portfolio/single-project/project-1/project-1-4.jpg"
                                                        alt="image">
                                                </figure> <!-- /.tt-gallery-image -->
                                            </div> <!-- /.tt-gallery-image-wrap -->
                                        </div> <!-- /.tt-gallery-item-inner -->
                                    </a>
                                    <!-- End tt-Gallery item -->

                                </div> <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                        </div>
                        <!-- End tt-Grid items wrap  -->

                    </div>
                    <!-- End tt-Grid -->

                </div>
                <!-- End tt-Gallery -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">


                <div class="tt-page-nav tt-pn-scroll">
                    <a href="single-project-2.html" class="tt-pn-link anim-fadeinup">
                        <div class="tt-pn-title">Next Project</div>
                        <div class="tt-pn-hover-title">Smithy</div>
                    </a> <!-- /.tt-pn-link -->

                    <div class="tt-pn-subtitle anim-fadeinup">Explore More</div>

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-pn-image">
                        <img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
                    </div>
                </div>
                <!-- End page nav -->

            </div> <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


    </div>
    <!-- End page content -->

</div>



@endsection