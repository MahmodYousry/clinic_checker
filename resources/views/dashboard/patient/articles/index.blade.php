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
                @foreach ($posts as $post)
                    <!-- Story -->
                    <div class="col-lg-4 invisible" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('patient_articles.show', $post->id) }}">
                            <img class="img-fluid w-100" style="height: 280px;" src="{{ $post->cover_image ? asset('storage/posts_thumbnail/'.$post->cover_image) : asset('dashboard/assets/media/photos/photo21@2x.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">{{ $post->title }}</h4>
                                <p class="font-size-sm">
                                    <span class="text-primary">Created At</span> on {{ $post->created_at->format('M d Y') }} · <em class="text-muted">{{ $post->created_at->diffForHumans() }}</em>
                                </p>
                                <p class="font-size-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida...
                                </p>
                            </div>
                        </a>
                    </div>
                    <!-- END Story -->
                @endforeach
            </div>
        </div>
        <!-- END Page Content -->
    </main>
<!-- END Main Container -->
@endsection
