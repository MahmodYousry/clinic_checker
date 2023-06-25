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
                        New Article
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">New Post</a>
                            </li>
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
                    <h3 class="block-title">new Article</h3>
                </div>
                <div class="block-content">
                    <form action="{{ route('blog.store') }}" method="POST">
                        @csrf
                        <div class="col-lg-12 col-xl-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                            id="blogImage" name="blogImage">
                                    <label class="custom-file-label" for="blogImage">Choose Thumbnail Image </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">Article Content</label>
                                <textarea class="form-control js-summernote" id="content" name="content" rows="4" placeholder="Feel Free To Write Anything"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-check mr-2"></i>Save</button>
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
