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
        <div class="content content-boxed">
            <div class="row">
                <div class="col-xl-8">

                    {{-- errors, alerts, messages --}}
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p class="mb-0">{{ $error }}</p>
                            </div>
                        @endforeach
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success d-flex align-items-center animated fadeInUp" role="alert">
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-smile-beam"></i>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0">{{ session('success') }}</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger d-flex align-items-center animated fadeInUp" role="alert">
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-tired"></i>
                            </div>
                            <div class="flex-fill ml-3">
                                <p class="mb-0">{{ session('error') }}</p>
                            </div>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    {{-- end errors, alerts, messages --}}

                    <a class="btn btn-primary mb-3" href="{{ route('blog.create') }}"><i class="fa fa-pen-alt px-1"></i> New Post</a>
                    @foreach ($posts as $post)
                        <!-- Story -->
                        <div class="block block-rounded">
                            <div class="block-content">
                                <div class="row items-push">
                                    <div class="col-md-4 col-lg-5">
                                        <a href="">
                                            <img class="img-fluid" src="{{ asset('dashboard/assets/media/photos/photo21.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-lg-7">
                                        <h4 class="mb-1">
                                            <a class="text-primary-dark" href="">{{ $post['title'] }}</a>
                                        </h4>
                                        <div class="font-size-sm mb-3">
                                            <a href="be_pages_generic_profile.html">Susan Day</a> on July 16, 2019 · <em class="text-muted">10 min</em>
                                        </div>
                                        <p class="font-size-sm">
                                            {{-- {{Str::words($post->content, 30)}} --}}
                                            description Soon
                                        </p>
                                        <div class="action">
                                            <a class="btn btn-sm btn-light animated fadeInLeft" href="{{ route('blog.show', 1) }}">
                                                <i class="fa fa-eye mx-1"></i> continue reading
                                            </a>
                                            <a class="btn btn-sm btn-primary animated fadeInDown" href="#"><i class="fa fa-edit mx-1"></i> Edit</a>
                                            <form method="POST" action="#" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger d-inline animated fadeInRight"><i class="fa fa-trash mx-1"></i> delete</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Story -->
                    @endforeach



                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination push">
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Pagination -->
                </div>
                <div class="col-xl-4">
                    <!-- Search -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Search</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="be_pages_blog_classic.html" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt" placeholder="Type and hit enter..">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Search -->

                    <!-- About -->
                    <a class="block block-rounded block-link-shadow" href="be_pages_generic_profile.html">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">About</h3>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <div class="mb-3">
                                <img class="img-avatar img-avatar96" src="{{ asset('dashboard/assets/media/avatars/avatar1.jpg') }}" alt="">
                            </div>
                            <div class="font-size-h5 mb-1">Lori Grant</div>
                            <div class="font-size-sm text-muted">Publisher</div>
                        </div>
                        <div class="block-content border-top">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <i class="si si-pencil fa-2x"></i>
                                    </div>
                                    <p class="font-w300 text-muted">350 Stories</p>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <i class="si si-users fa-2x"></i>
                                    </div>
                                    <p class="font-w300 text-muted">1.5k Followers</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- END About -->

                    <!-- Recent Comments -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Recent Comments</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content font-size-sm">
                            <div class="push">
                                <a class="font-w600" href="be_pages_generic_profile.html">Thomas Riley</a> on <a href="be_pages_blog_story.html">Exploring the Alps</a>
                                <p class="mt-1">
                                    Awesome trip! Looking forward going there, I'm sure it will be a great experience!
                                </p>
                            </div>
                            <div class="push">
                                <a class="font-w600" href="be_pages_generic_profile.html">Jose Mills</a> on <a href="be_pages_blog_story.html">Travel &amp; Work</a>
                                <p class="mt-1">
                                    Thank you for sharing your story with us! I really appreciate the info, it will come in handy for sure!
                                </p>
                            </div>
                            <div class="push">
                                <a class="font-w600" href="be_pages_generic_profile.html">Jack Greene</a> on <a href="be_pages_blog_story.html">Black &amp; White</a>
                                <p class="mt-1">
                                    Really touching story.. I'm so happy everything went well at the end!
                                </p>
                            </div>
                            <div class="push">
                                <a class="font-w600" href="be_pages_generic_profile.html">Wayne Garcia</a> on <a href="be_pages_blog_story.html">Sleep Better</a>
                                <p class="mt-1">
                                    Great advice! Thanks for sharing, I'm sure it will help many people sleep better and improve their lifes.
                                </p>
                            </div>
                            <div class="text-center push">
                                <small>
                                    <a class="font-w600" href="javascript:void(0)">Read More..</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- END Recent Comments -->

                    <!-- Social -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Social</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-light" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Twitter">
                                <i class="fab fa-fw fa-twitter"></i>
                            </a>
                            <a class="btn btn-light" href="javascript:void(0)" data-toggle="tooltip" title="Like our Facebook page">
                                <i class="fab fa-fw fa-facebook"></i>
                            </a>
                            <a class="btn btn-light" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Google Plus">
                                <i class="fab fa-fw fa-google-plus"></i>
                            </a>
                            <a class="btn btn-light" href="javascript:void(0)" data-toggle="tooltip" title="Follow us on Dribbble">
                                <i class="fab fa-fw fa-dribbble"></i>
                            </a>
                            <a class="btn btn-light" href="javascript:void(0)" data-toggle="tooltip" title="Subscribe on Youtube">
                                <i class="fab fa-fw fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <!-- END Social -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
<!-- END Main Container -->
@endsection
