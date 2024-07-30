@extends('component.master')
@section('content')
<div class="st-height-b80 st-height-lg-b80"></div>
<section class="st-hero st-style2 st-bg st-dynamic-bg st-ripple-version"
    data-src="{{ asset('assets2/img/hero-bg-1.jpg') }}">
    <div class="container">
        <div class="st-hero-text ab">
            <div class="st-author"><img src="{{ asset('uploads/Home-Page.jpg') }}" alt=""></div>
            <h1>Hi, I am <span>Abhinav Kapila</span></h1>
            <h4>Transforming <span class="text-primary">Visions</span> into <span class='text-warning'>Reality</span>
            </h4>
            <p>As a passionate graphic and UI/UX designer with over 6 years of experience, I specialize in delivering
                designs that not only look great but also enhance user experience. Explore my services and let’s create
                something amazing together!</p>
            <div class="st-hero-social-links">
                <a href="https://www.behance.net/abhinavdesignhub" target="_blank" class="st-social-btn">
                    <i class="fa-brands fa-behance"></i></a>
                <a href="https://www.facebook.com/abhinavdesignhub/" target="_blank" class="st-social-btn">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/abhinavdesignhub/" target="_blank" class="st-social-btn">
                    <i class="fa-brands fa-square-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/abhinavkapila/" target="_blank" class="st-social-btn">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- <section class="st-hero-wrap st-parallax">
    <div class="st-hero st-style1 st-ripple-version">
        <div class="container">
            <div class="st-hero-text">
                <h3>Hello, I’m</h3>
                <h1>Abhinav <br>Kapila
                </h1>
                <h2>Visual Designer</h2>
                <div class="st-hero-btn">
                    <a href="#contact" class="st-btn st-style1 st-color1 st-smooth-move">Hire me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="st-hero-img st-to-right">
        <img class="wow fadeInRight" src="assets2/img/section/hero-img.jpg" alt="Hero">
        <div class="st-social-group wow fadeInLeft">
            <div class="st-social-link">
                <a href="#" class="st-social-btn active">
                    <span class="st-social-icon"><i class="fab fa-dribbble"></i></span>
                    <span class="st-icon-name">Dribbble</span>
                </a>
                <a href="#" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-behance"></i></span>
                    <span class="st-icon-name">Behance</span>
                </a>
                <a href="#" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
                    <span class="st-icon-name">Twitter</span>
                </a>
                <a href="#" class="st-social-btn">
                    <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                    <span class="st-icon-name">LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</section> --}}



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
                    <div class="st-about-img st-dynamic-bg st-bg" data-src="{{ asset('uploads/About-Me.jpg') }}"></div>
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
                                <p> I have been a multimedia designer for over six years, and my strong suit is the
                                    ability to combine my knowledge of photography, user interface and user experience
                                    design, graphic design, and video editing to produce visually appealing material.
                                    With an emphasis on imaginative narrative and painstaking attention to detail, I
                                    convert concepts into captivating multimedia experiences. Working collaboratively
                                    with teams to improve and develop projects is where my strengths lie. I am thrilled
                                    to be a part of your creative projects via Abhinav Design Hub, whether you need
                                    fresh graphic design, user-centric user interface and experience solutions, expert
                                    video editing, or professional photography.
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
                                <a href="#" class="st-btn st-style1 st-color1">Download CV</a>
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
</section>



<section class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">MY SKILLS</h4>
            <h2 class="st-section-heading-subtitle">MY SKILLS</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="st-skill-wrap">
                    <div class="st-skill-heading">
                        <h2 class="st-skill-title">All the skills that I have in that field of work are mentioned.</h2>
                        <div class="st-skill-subtitle">Hello! I'm Abhinav Kapila, a passionate Interactive Media
                            Designer and Video Editor with 4 years of experience. I excel at transforming ideas into
                            engaging multimedia content through creative visual storytelling. My expertise spans
                            designing interactive user interfaces and editing impactful videos, always with meticulous
                            attention to detail.
                            <br><br>
                            I thrive on collaboration, working closely with teams to refine and enhance projects.
                            Whether you're looking for innovative design or skilled video editing, I'm excited to
                            contribute to your creative projects through Abhinav Design Hub.

                        </div>
                    </div>

                </div>
            </div>



            <div class="col-lg-6">

                <div class="container">
                    <div class="demo"></div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Adobe PhotoShop</span>
                            <span>80%</span>
                        </div>
                        <div id="progress-container-80" class="progress-bar-container "> </div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Adobe Premiere Pro</span>
                            <span>65%</span>
                        </div>
                        <div id="progress-container-65" class="progress-bar-container "> </div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Adobe XD</span>
                            <span>78%</span>
                        </div>
                        <div id="progress-container-78" class="progress-bar-container "> </div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Figma</span>
                            <span>67%</span>
                        </div>
                        <div id="progress-container-67" class="progress-bar-container "> </div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Adobe Illustrator</span>
                            <span>80%</span>
                        </div>
                        <div id="progress-container-81" class="progress-bar-container "> </div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>CSS</span>
                            <span>90%</span>
                        </div>
                        <div id="progress-container-90" class="progress-bar-container "></div>
                    </div>

                    <div class="progress-head">
                        <div class="progress-value">
                            <span>Javascript</span>
                            <span>90%</span>
                        </div>
                        <div id="progress-container-91" class="progress-bar-container "></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="" id="home-portfolio">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">PORTFOLIO</h4>
            <h2 class="st-section-heading-subtitle">PORTFOLIO</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <div class=" py-4" style="background-color : rgb(0 0 12)">


        <div class="container">
            <div class="st-section-heading st-style1">
                <h5 class="st-section-heading-title st-photo">Photography</h5>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>


        <div class="owl-width-p">
            <div class="owl-carousel owl-theme">
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog2.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog3.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog2.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="py-4 mt-5">

        <div class="container">
            <div class="st-section-heading st-style1">
                <h5 class="st-section-heading-title st-photo">Graphic Design</h5>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <div class="owl-width-g">
            <div class="owl-carousel owl-theme">
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog2.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog3.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
                <div class="st-post-single st-style1">
                    <a class='st-post-thumb st-zoom owl-size' href='/about'>
                        <img src="assets2/img/blog/blog2.jpg" class="st-zoom-in" alt="blog1">
                    </a>
                </div>
            </div>
        </div>
    </div>

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

            <div class="col-lg-12 mx-auto">
                <div class="st-resume-wrap">
                    <div class="st-resume-heading">
                        <img src="assets2/img/icon/resume-icon1.png" alt="resume-icon">
                        <h2 class="st-resume-heading-title">Experience</h2>
                    </div>

                    <div class="st-height-b50 st-height-lg-b30"></div>

                    <div class="st-resume-timeline-wrap">
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Pizza Depot, Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">May 2024 - July 2024</div>
                            <h4 class="st-resume-timeline-subtitle">Brampton, ON</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Developed branding strategies, crafting visual identity systems and logos to
                                        ensure a cohesive brand presence.</li>
                                    <li>Created engaging social media visuals and content, while leading Print design
                                        for their brand.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Cloud Matrix, Senior Interactive Media Designer</h3>
                            <div class="st-resume-timeline-duration">April 2023 - March 2024</div>
                            <h4 class="st-resume-timeline-subtitle">Ludhiana, Punjab</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Developed branding strategies, crafting visual identity systems and logos to
                                        ensure a cohesive brand presence.</li>
                                    <li>Created engaging social media visuals and content, while leading UI/UX design
                                        for both app and website to enhance user experience & usability.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">The Mischiffers Studio, Senior Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">March 2021 - March 2023</div>
                            <h4 class="st-resume-timeline-subtitle">Panchkula, Haryana</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Designed user interfaces (UI) for mobile applications and websites, ensuring a
                                        seamless user experience.</li>
                                    <li>Worked closely with the development team to implement design concepts
                                        and maintain brand consistency.</li>
                                    <li>Conducted user research and usability testing to optimize designs for
                                        improved functionality.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Hokis Solutions, Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">March 2021 - March 2023</div>
                            <h4 class="st-resume-timeline-subtitle">Panchkula, Haryana</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Developed visual concepts for clothing lines and marketing campaigns,
                                        aligning with the brand's image.</li>
                                    <li>Produced illustrations, patterns, and graphics for apparel designs, ensuring
                                        consistency and creativity.</li>
                                    <li>Collaborated with fashion designers and marketing teams to translate
                                        concepts into visually appealing materials.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Rhythm Art Studio, Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">October 2019 - May 2020 </div>
                            <h4 class="st-resume-timeline-subtitle">Zirakpur, Punjab</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Implemented design strategies to communicate complex information in a
                                        visually understandable manner.</li>
                                    <li>Collaborated with content creators and educators to create visually compelling
                                        teaching aids.</li>
                                    <li>Collaborated with fashion designers and marketing teams to translate
                                        concepts into visually appealing materials.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Brand Theory, Graphic Designer Intern</h3>
                            <div class="st-resume-timeline-duration">July 2019 - September 2019</div>
                            <h4 class="st-resume-timeline-subtitle">Mohali, Punjab</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Implemented design strategies to communicate complex information in a
                                        visually understandable manner.</li>
                                    <li>Collaborated with content creators and educators to create visually compelling
                                        teaching aids.</li>
                                    <li>Collaborated with fashion designers and marketing teams to translate
                                        concepts into visually appealing materials.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Helpage Orphans, Motion Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">July 2021 - January 2023</div>
                            <h4 class="st-resume-timeline-subtitle">Mohali, Punjab</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Developed visual concepts for clothing lines and marketing campaigns,
                                        aligning with the brand's image.</li>
                                    <li>Produced illustrations, patterns, and graphics for apparel designs, ensuring
                                        consistency and creativity.</li>
                                    <li>Create Motion design and Collaborated with marketing teams to translate
                                        concepts into visually appealing materials.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Free Pads for India, Senior Graphic Designer</h3>
                            <div class="st-resume-timeline-duration">July 2022 - January 2023</div>
                            <h4 class="st-resume-timeline-subtitle">Zirakpur, Punjab</h4>
                            <div class="st-resume-timeline-text">
                                <ul>
                                    <li>Implemented design strategies to communicate complex information in a
                                        visually understandable manner.</li>
                                    <li>Collaborated with content creators and educators to create visually compelling
                                        teaching aids.</li>
                                    <li>Collaborated with fashion designers and marketing teams to translate
                                        concepts into visually appealing materials.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 mx-auto mt-5">

                <div class="st-height-b0 st-height-lg-b50"></div>
                <div class="st-resume-wrap">
                    <div class="st-resume-heading">
                        <img src="assets2/img/icon/resume-icon2.png" alt="resume-icon">
                        <h2 class="st-resume-heading-title">Education</h2>
                    </div>
                    <div class="st-height-b50 st-height-lg-b30"></div>

                    <div class="st-resume-timeline-wrap">
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Graphic Design For Print
                                And Web</h3>
                            <div class="st-resume-timeline-duration">January 2024 - August 2024</div>
                            <h4 class="st-resume-timeline-subtitle">Humber College / Toronto</h4>

                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>
                        <div class="st-resume-timeline">
                            <h3 class="st-resume-timeline-title">Bsc In Animation</h3>
                            <div class="st-resume-timeline-duration">March 2017 - September 2020</div>
                            <h4 class="st-resume-timeline-subtitle">Chitkara University, Punjab</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>




<section class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h4 class="st-section-heading-title">REVIEWS</h4>
            <h2 class="st-section-heading-subtitle">REVIEWS</h2>
        </div>
        <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <div class="owl-width">
        <div class="owl-carousel owl-theme">
            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-testimonial-text">
                    <p>“Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem
                        elit inuning utsed sittem do eiusmod.”</p>
                    <div class="st-quote"><img src="assets2/img/icon/quote.png" alt="quote"></div>
                </div>
                <div class="st-testimonial-info">
                    <div class="st-testimonial-img"><img src="assets2/img/client/client1.png" alt="client1">
                    </div>
                    <div class="st-testimonial-meta">
                        <h4 class="st-testimonial-name">Richard Miles</h4>
                        <div class="st-testimonial-designation">Chairman</div>
                    </div>
                </div>
            </div>

            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-testimonial-text">
                    <p>“Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem
                        elit inuning utsed sittem do eiusmod.”</p>
                    <div class="st-quote"><img src="assets2/img/icon/quote.png" alt="quote"></div>
                </div>
                <div class="st-testimonial-info">
                    <div class="st-testimonial-img"><img src="assets2/img/client/client2.png" alt="client1">
                    </div>
                    <div class="st-testimonial-meta">
                        <h4 class="st-testimonial-name">Racel</h4>
                        <div class="st-testimonial-designation">CEO</div>
                    </div>
                </div>
            </div>

            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-testimonial-text">
                    <p>“Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem
                        elit inuning utsed sittem do eiusmod.”</p>
                    <div class="st-quote"><img src="assets2/img/icon/quote.png" alt="quote"></div>
                </div>
                <div class="st-testimonial-info">
                    <div class="st-testimonial-img"><img src="assets2/img/client/client3.png" alt="client1">
                    </div>
                    <div class="st-testimonial-meta">
                        <h4 class="st-testimonial-name">David Thomas</h4>
                        <div class="st-testimonial-designation">Traning Officer</div>
                    </div>
                </div>
            </div>

            <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-testimonial-text">
                    <p>“Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem
                        elit inuning utsed sittem do eiusmod.”</p>
                    <div class="st-quote"><img src="assets2/img/icon/quote.png" alt="quote"></div>
                </div>
                <div class="st-testimonial-info">
                    <div class="st-testimonial-img"><img src="assets2/img/client/client3.png" alt="client1">
                    </div>
                    <div class="st-testimonial-meta">
                        <h4 class="st-testimonial-name">David Thomas</h4>
                        <div class="st-testimonial-designation">Traning Officer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</section>

@endsection