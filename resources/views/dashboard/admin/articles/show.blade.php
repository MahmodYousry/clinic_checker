@extends('layouts.admin_master')

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
        <div class="bg-white">
            <div class="content content-boxed">
                <div class="text-center font-size-sm push">
                    <h1 class="text-black mt-3 invisible" data-toggle="appear" data-class="animated fadeIn">{{ $post['title'] }}</h1>
                    <span class="d-inline-block py-2 px-4 bg-body-light rounded">
                        <a class="link-effect font-w600" href="be_pages_generic_profile.html">John Doe</a> on July 16, 2019 &bull; <em>5 min</em>
                    </span>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <!-- Story -->
                        <article class="story">

                            <p>{!! $post['body'] !!}</p>


                        </article>
                        <!-- END Story -->


                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
<!-- END Main Container -->
@endsection

@section('scripts')
    <script src="{{ asset('dashboard/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
@endsection
