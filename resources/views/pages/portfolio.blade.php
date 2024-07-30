@extends('component.master')
@section('content')
    <div id="content-wrap">
        <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
            <div class="page-header-inner tt-wrap">
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="{{ asset($banner->banner_image) }}" alt="Image">
                    </div>
                </div>
                <div class="ph-caption">
                    {{-- <h1 class="ph-caption-title ph-appear">Portfolio</h1> --}}
                    <div class="ph-caption-title-ghost ph-appear">Portfolio</div>
                    <div class="ph-caption-subtitle ph-appear">{{ $banner->sub_cat_name }}</div>
                </div>
            </div>
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
                </div>
            </a>
            <div class="made-with-love ph-appear">
                <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                </div>
            </div>
        </div>
        <div id="page-content">
            <div class="tt-section">
                <div class="tt-section-inner">
                    <div id="portfolio-grid" class="pgi-hover">
                        <div class="tt-grid ttgr-layout-3 ttgr-gap-3">
                            <div class="tt-grid-top">
                                <div class="tt-grid-categories">
                                    <div class="ttgr-cat-trigger-wrap ttgr-cat-fixed">
                                        <a href="#portfolio-grid" class="ttgr-cat-trigger not-hide-cursor"
                                            data-offset="150">
                                            <div class="ttgr-cat-text">
                                                <span data-hover="Open">Filter</span>
                                            </div>
                                            <div class="ttgr-cat-icon">
                                                <span class="magnetic-item"><i class="fas fa-layer-group"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ttgr-cat-nav">
                                        <div class="ttgr-cat-list-holder cursor-close">
                                            <div class="ttgr-cat-list-inner">
                                                <div class="ttgr-cat-list-content">
                                                    <ul class="ttgr-cat-list">
                                                        <li class="ttgr-cat-close">Close <i class="fas fa-times"></i></li>
                                                        <li class="ttgr-cat-item"><a href="#" class="active">Show
                                                                All</a></li>
                                                        <li class="ttgr-cat-item"><a href="#"
                                                                data-filter=".branding">Branding</a></li>
                                                        <li class="ttgr-cat-item"><a href="#"
                                                                data-filter=".people">People</a></li>
                                                        <li class="ttgr-cat-item"><a href="#"
                                                                data-filter=".nature">Nature</a></li>
                                                        <li class="ttgr-cat-item"><a href="#"
                                                                data-filter=".creative">Creative</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tt-grid-items-wrap isotope-items-wrap">
                                @if (!empty($portfolio))
                                    @foreach ($portfolio as $item)
                                        <div class="tt-grid-item isotope-item people">
                                            <div class="ttgr-item-inner">
                                                <div class="portfolio-grid-item">
                                                    @if ($item->cid == 1)
                                                        <a href="{{ url('details') }}" class="pgi-image-wrap"
                                                            data-cursor="View<br>Project">
                                                        @else
                                                            <a href="javascript::void(0)" class="pgi-image-wrap"
                                                                data-cursor="View<br>Project">
                                                    @endif

                                                    <div class="pgi-image-holder">
                                                        <div class="pgi-image-inner anim-zoomin">
                                                            <figure class="pgi-image ttgr-height">
                                                                <img src="{{ asset($item->main_image) }}" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h3 style="text-align: center;">Data Coming soon</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tt-section padding-bottom-xlg-150">
                <div class="tt-section-inner tt-wrap">
                    <div class="tt-page-nav tt-pn-scroll">
                        <a href="contact.html" class="tt-pn-link anim-fadeinup">
                            <div class="tt-pn-title">Let's talk</div>
                            <div class="tt-pn-hover-title">Let's talk</div>
                        </a>
                        <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
                        <div class="tt-pn-image">
                            <img src="assets/img/page-header/ph-3.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
