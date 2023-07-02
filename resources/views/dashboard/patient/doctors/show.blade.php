@extends('layouts.patient_master')

@section('css_adds')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/js/plugins/magnific-popup/magnific-popup.css') }}">
@endsection

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{ asset('dashboard/assets/media/photos/photo8@2x.jpg') }});">
            <div class="bg-black-50">
                <div class="content content-full text-center">
                    <div class="my-3">
                        <img class="img-avatar img-avatar-thumb" src="{{ $doctor->photo ? asset('storage/doctors_photos/'.$doctor->photo) : asset('img/defualt.avif') }}" alt="">
                    </div>
                    <h1 class="h2 text-white mb-0">{{ $doctor->first_name }} {{ $doctor->last_name }}</h1>
                    <span class="text-white-75">{{ $doctor->speciality }}</span>
                </div>
            </div>
        </div>
        <!-- END Hero -->



        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="row">
                <div class="col-md-7 col-xl-8">
                    <!-- Updates -->
                    <ul class="timeline timeline-alt py-0">
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-default">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                <div class="block-header">
                                    <h3 class="block-title">Facebook</h3>
                                    <div class="block-options">
                                        <div class="timeline-event-time block-options-item font-size-sm">
                                            just now
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p>
                                        Facebook link should be here
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-info">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                <div class="block-header">
                                    <h3 class="block-title">Twitter</h3>
                                    <div class="block-options">
                                        <div class="timeline-event-time block-options-item font-size-sm">
                                            12 hrs ago
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p class="font-w600 mb-2">
                                        + 1150 Followers
                                    </p>
                                    <p>
                                        You’re getting more and more followers, keep it up!
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-event">
                            <div class="timeline-event-icon bg-smooth">
                                <i class="fa fa-database"></i>
                            </div>
                            <div class="timeline-event-block block invisible" data-toggle="appear">
                                <div class="block-header">
                                    <h3 class="block-title">Email</h3>
                                    <div class="block-options">
                                        <div class="timeline-event-time block-options-item font-size-sm">
                                            1 day ago
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <p class="font-w600 mb-2">
                                        {{ $doctor->email }}
                                    </p>
                                    <p>
                                        You’re getting more and more people caring about you, keep it up!
                                    </p>
                                </div>
                            </div>
                        </li>

                        {{-- link part 2 --}}
                        <ul class="timeline timeline-alt">
                            <!-- Photos Event -->
                            <li class="timeline-event">
                                <div class="timeline-event-icon bg-success">
                                    <i class="fa fa-images"></i>
                                </div>
                                <div class="timeline-event-block block invisible" data-toggle="appear">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">New Gallery</h3>
                                        <div class="block-options">
                                            <div class="timeline-event-time block-options-item font-size-sm font-w600">
                                                just now
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="row items-push js-gallery img-fluid-100">
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo11@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo11.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo12@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo12.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo13@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo13.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo14@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo14.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo15@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo15.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo16@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo16.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo17@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo17.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('dashboard/assets/media/photos/photo18@2x.jpg') }}">
                                                    <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo18.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- END Photos Event -->

                        </ul>
                        <!-- END Timeline -->

                    </ul>
                    <!-- END Updates -->
                </div>
                <div class="col-md-5 col-xl-4">
                    <!-- Products -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-map-marker-alt text-muted mr-1"></i> Address
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="media d-flex align-items-center push">
                                <div class="mr-3">
                                    <div class="font-size-sm">{{ $doctor->address }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Products -->

                    <!-- Ratings -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <i class="fa fa-phone-alt text-muted mr-1"></i> Phone
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="font-size-sm push">
                                <p class="mb-0">{{ $doctor->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Ratings -->


                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

@section('scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('dashboard/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
@endsection
