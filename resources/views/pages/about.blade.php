@extends('component.master')
@section('content')
<div>
    <div id="content-wrap">

        <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-content-parallax">
            <div class="page-header-inner tt-wrap">


                <div class="ph-image">
                    <div class="ph-image-inner">
                    </div>
                </div>

                <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">About</h1>
                    <div class="ph-caption-title-ghost ph-appear">About</div>
                </div>


            </div>


            <a href="#page-content" class="scroll-down-circle" data-offset="30">
                <div class="sdc-inner ph-appear">
                    <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                    <svg viewBox="0 0 500 500">
                        <defs>
                            <path
                                d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                id="textcircle"></path>
                        </defs>
                        <text dy="30">
                            <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                        </text>
                    </svg>
                </div>
            </a>



            <div class="made-with-love ph-appear">
                <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                </div>
            </div>


        </div>

    </div>

    <section id="about" class="st-about-wrap">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">ABOUT ME</h4>
                <h2 class="st-section-heading-subtitle">ABOUT ME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 fadeInLeft">
                    <div class="st-about-img-wrap">
                        <div class="st-about-img st-dynamic-bg st-bg" data-src="/uploads/about.jpg"></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title">Hello! I'm Abhinav Kapila</h2>
                                <h4 class="st-text-block-subtitle">Graphic Designer</h4>
                                <div class="st-text-block-text">
                                    <p> With over six years of experience as a multimedia designer, I excel in
                                        integrating photography, graphic design, UI/UX design, and video editing to
                                        create captivating visual content. My primary strength lies in UI design, where
                                        I focus on developing intuitive and aesthetically pleasing interfaces that
                                        enhance user experience.
                                    </p>

                                    <p>
                                        I combine creative storytelling with meticulous attention to detail to transform
                                        concepts into engaging multimedia experiences. My expertise in graphic design
                                        and video editing complements my UI skills, allowing me to deliver cohesive and
                                        effective visual solutions.
                                    </p>

                                    <p>
                                        I thrive in collaborative settings, working closely with teams to refine and
                                        elevate projects. At Abhinav Design Hub, I look forward to applying my diverse
                                        skills to your projects, offering innovative design solutions and professional
                                        multimedia services.
                                    </p>
                                </div>
                                <ul class="st-text-block-details st-mp0">
                                    {{-- <li><span>Birthday</span> : <span>May 07, 1990</span></li> --}}
                                    <li><span>Phone</span> : <span>+1 416-731-7960</span></li>
                                    <li><span>Email</span> : <span> abhinavdesignhub@gmail.com</span></li>
                                    <li><span>Address</span> : <span>Brampton, ON Canada</span></li>
                                    <li><span>Language</span> : <span>English</span></li>
                                    <li><span>Freelance</span> : <span>Available</span></li>
                                </ul>
                                <div class="st-text-block-btn">
                                    <a href="/uploads/Abhinav_Kapila_Resume.pdf" class="st-btn st-style1 st-color1"
                                        do>Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">SERVICES</h4>
                <h2 class="st-section-heading-subtitle">SERVICES</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>



        <div class="container">
            <div class="row">

                @if (!empty($subcat))
                    @foreach ($subcat as $item)
                        @if ($item->cid == 1)
                            <div class="col-lg-4 col-md-6">
                                <a href="{{ url('portfolio/' . str_replace('-', ' ', $item->slug)) }}" class="serices-text">
                                    <div class="st-iconbox st-style1">
                                        <div class="st-iconbox-icon">
                                            {!! $item->icon !!}
                                        </div>
                                        <h2 class="st-iconbox-title">{{ $item->sub_cat_name }} </h2>
                                    </div>
                                    <div class="st-height-b30 st-height-lg-b30"></div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-6">
                        <a href="/details" class="serices-text">
                            <div class="st-iconbox st-style1">
                                <div class="st-iconbox-icon">
                                    <svg viewBox="0 0 512 512">
                                        <g>
                                            <path d="m336 144a8 8 0 0 0 -8 8v104a8 8 0 0 0 16 0v-104a8 8 0 0 0 -8-8z" />
                                            <path d="m336 272a8 8 0 0 0 -8 8v8a8 8 0 0 0 16 0v-8a8 8 0 0 0 -8-8z" />
                                            <path
                                                d="m496 24h-480a8 8 0 0 0 -8 8v352a8 8 0 0 0 8 8h288v64a32 32 0 0 0 64 0v-64h48a8.008 8.008 0 0 0 5.66-2.34l80-80a8.008 8.008 0 0 0 2.34-5.66v-272a8 8 0 0 0 -8-8zm-144 432a16 16 0 0 1 -32 0v-16h32zm0-32h-32v-8h32zm0-24h-32v-264h32zm0-280h-32v-6.11l.94-1.89h30.12l.94 1.89zm-23.06-24 7.06-14.11 7.06 14.11zm95.06 268.69v-52.69h52.69zm64-68.69h-72a8 8 0 0 0 -8 8v72h-40v-264a8.081 8.081 0 0 0 -.84-3.58l-24-48a8.009 8.009 0 0 0 -14.32 0l-24 48a8.081 8.081 0 0 0 -.84 3.58v264h-280v-336h464z" />
                                            <path d="m48 72h72a8 8 0 0 0 0-16h-72a8 8 0 0 0 0 16z" />
                                            <path d="m80 88a8 8 0 0 0 -8-8h-24a8 8 0 0 0 0 16h24a8 8 0 0 0 8-8z" />
                                            <path
                                                d="m288 88a104.118 104.118 0 0 0 -104 104 8 8 0 0 0 16 0 88.1 88.1 0 0 1 88-88 8 8 0 0 0 0-16z" />
                                            <path
                                                d="m240 184a8 8 0 0 0 -8 8 80.091 80.091 0 0 1 -80 80 8 8 0 0 0 0 16 96.108 96.108 0 0 0 96-96 8 8 0 0 0 -8-8z" />
                                            <path
                                                d="m456 192a8 8 0 0 0 16 0 80.091 80.091 0 0 0 -80-80 8 8 0 0 0 0 16 64.072 64.072 0 0 1 64 64z" />
                                            <path
                                                d="m168 216a48 48 0 1 0 -48 48 48.053 48.053 0 0 0 48-48zm-48 32a32 32 0 1 1 32-32 32.036 32.036 0 0 1 -32 32z" />
                                            <path
                                                d="m264 288a24 24 0 1 0 24 24 24.028 24.028 0 0 0 -24-24zm0 32a8 8 0 1 1 8-8 8.009 8.009 0 0 1 -8 8z" />
                                            <path
                                                d="m432 112a24 24 0 1 0 -24-24 24.028 24.028 0 0 0 24 24zm0-32a8 8 0 1 1 -8 8 8.009 8.009 0 0 1 8-8z" />
                                        </g>
                                    </svg>
                                </div>
                                <h2 class="st-iconbox-title">Branding and Identity </h2>
                            </div>
                            <div class="st-height-b30 st-height-lg-b30"></div>
                        </a>
                    </div>
                @endif

            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>


    <section id="resume" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">RESUME</h4>
                <h2 class="st-section-heading-subtitle">RESUME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="assets2/img/icon/resume-icon1.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Experience</h2>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Senior UX/UI Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2020 - Present</div>
                                <h4 class="st-resume-timeline-subtitle">Bergnaum, Hills and Howe</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Product Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2016 - December 2019</div>
                                <h4 class="st-resume-timeline-subtitle">Langosh, Sipes and Raynor</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">UI/UX Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2014 - December 2015</div>
                                <h4 class="st-resume-timeline-subtitle">Strosin, Maggio and Homenick</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6">

                    <div class="st-height-b0 st-height-lg-b50"></div>
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="assets2/img/icon/resume-icon2.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Education</h2>
                        </div>
                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Master of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2015 - 2016</div>
                                <h4 class="st-resume-timeline-subtitle">University of XYZ</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Bachelor of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2010 - 2014</div>
                                <h4 class="st-resume-timeline-subtitle">University of ABC</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Diploma in Computer Science</h3>
                                <div class="st-resume-timeline-duration">2006 - 2010</div>
                                <h4 class="st-resume-timeline-subtitle">XYZ Institution</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>

    <section class="container my-5">

        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">Clients</h4>
                <h2 class="st-section-heading-subtitle">Clients</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <div class="owl-carousel-2 owl-theme ">
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
            <div class="item">
                <img src="/uploads/brands/brand.jpg" alt="">
            </div>
        </div>
    </section>
</div>
@endsection