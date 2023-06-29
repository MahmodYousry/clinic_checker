@extends('layouts.admin_master')

@section('css_adds')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/js/plugins/summernote/summernote-bs4.css') }} ">
@endsection

@section('content')
<!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Post <small class="font-size-base font-w400 text-muted">Edit</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{ route('blog.index') }}">Posts</a>
                            </li>
                            <li class="breadcrumb-item">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content content-boxed">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Edit <small>{{ $post->title }}</small></h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                            </div>

                            <div class="form-group">
                                <label>Thumbnail</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                            id="blogImage" name="thumbnail">
                                    <label class="custom-file-label" for="blogImage">Choose Thumbnail Image </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="d-block">Post Thumnail</label>
                                <img class="img-fluid d-block m-auto" src="{{ asset('storage/posts_thumbnail/'.$post->cover_image) }}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="content">Post Content</label>
                                {{-- <textarea id="js-ckeditor5-classic" class="form-control" id="content" name="content" rows="4">{{ $post->title }}</textarea> --}}
                                <textarea class="form-control js-summernote" id="content" name="content" rows="4">{{ $post->article }}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-check p-1"></i> Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
<!-- END Main Container -->
@endsection

@section('scripts')
    <script src="{{ asset('dashboard/assets/js/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/plugins/simplemde/simplemde.min.js') }}"></script>
@endsection

