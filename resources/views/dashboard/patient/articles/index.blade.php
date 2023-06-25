@extends('layouts.patient_master')

@section('content')
<!-- Main Container -->
    <main id="main-container">
        <!-- Hero Content -->
        <div class="bg-image" style="background-image: url('{{ asset('dashboard/assets/media/photos/photo23@2x.jpg') }}');">
            <div class="bg-primary-dark-op">
                <div class="content content-full overflow-hidden">
                    <div class="mt-7 mb-5 text-center">
                        <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">The latest Articles That Has Been Saved</h1>
                        <h2 class="h4 font-w400 text-white-75 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">Feel free to explore and read.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero Content -->
        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <!-- Story -->
                <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="{{ route('patient_blog.show', 1) }}">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo21@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Top 10 Destinations</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Amanda Powell</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->
                 <!-- Story -->
                 <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="be_pages_blog_story.html">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo22@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Follow Your Dreams</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Albert Ray</span> on July 13, 2019 · <em class="text-muted">15 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="be_pages_blog_story.html">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo23@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Travel &amp; Work</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Danielle Jones</span> on July 6, 2019 · <em class="text-muted">12 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="be_pages_blog_story.html">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo24@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Sleep Better</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Carol White</span> on July 21, 2019 · <em class="text-muted">9 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="be_pages_blog_story.html">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo4@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Black &amp; White</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Justin Hunt</span> on July 16, 2019 · <em class="text-muted">5 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

                <!-- Story -->
                <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                    <a class="block block-rounded block-link-pop" href="be_pages_blog_story.html">
                        <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo6@2x.jpg') }}" alt="">
                        <div class="block-content">
                            <h4 class="mb-1">Exploring the Alps</h4>
                            <p class="font-size-sm">
                                <span class="text-primary">Jack Greene</span> on July 1, 2019 · <em class="text-muted">3 min</em>
                            </p>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Story -->

            </div>
        </div>
        <!-- END Page Content -->
    </main>
<!-- END Main Container -->
@endsection
