@extends('layouts.patient_master')


@section('css_adds')
    <style>
        body {
            font-family: sans-serif;
            background-color: #eeeeee;
        }

        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #30c78d;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #2c775a;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }


        .report-box .img-overlay {
            transition: all 1s ease 0s;
        }

        .report-box .img-overlay::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            height: 220px;
            width: 220px;
            background: rgba(0,0,0,.7);
            z-index: 2;
            transform: translatex(-50%);
            opacity: 0;
            transition: all 1s ease 0s;
        }

        .report-box .treatment_medicine:hover .img-overlay::after {
            opacity: 1;
        }

    </style>
@endsection

@section('content')
    <main id="main-container">

        <!-- Loader -->
        <div id="my-loader" class="layout-loader">
            <i class="fa fa-close"></i>
        </div>
        <!-- end Loader -->

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Patient <small class="font-size-base font-w400 text-muted">Checkup Examination</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Patients</a>
                            </li>
                            <li class="breadcrumb-item">Checkup</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">

            <div class="row">
                <div class="col-md-6">
                    <div class="block block-rounded bg-city-dark text-light pt-4">
                        <div class="block-header">
                            <h3 class="text-light border-bottom h4">Before You Begin Please Follow These Instructions</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-md-3 mb-4">
                                    <img class="d-block m-auto img-thumbnail"
                                        src="{{ asset('dashboard/assets/download_1.jpeg') }}" width="150px" height="auto"
                                        alt="">
                                </div>
                                <div class="col-md-9">
                                    <ol class="pl-3">
                                        <li class="block-title text-light">Your Photo Should be taken using a good camera
                                        </li>
                                        <li class="block-title text-light">Your Photo Must be Clear</li>
                                        <li class="block-title text-light">using phone is recomened to make our AI work
                                            effiecntly</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block block-rounded">
                        <div class="block-header bg-info">
                            <h2 class="block-title text-center bord-er"></h2>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="content_toggle"></button>
                            </div>
                        </div>
                        @if (\Session::has('error'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="block-content">

                            <h3 class="text-center m-0 text-capitalize border-bottom pb-2 m-auto mb-4">Kindly Uplaod Your Photo</h3>

                            <form id="submitForm" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="file-upload">
                                    <button class="file-upload-btn d-none" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                    <div class="image-upload-wrap">
                                        <input id="patientImage" class="file-upload-input" name="image" type='file'
                                            onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                    </div>

                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" name="patient_image" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">
                                                Remove <span class="image-title"><i class="si si-close"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group pt-4">
                                    <button type="submit" class="btn btn-primary mr-1 text-capitalize d-block m-auto p-3 px-5" style="font-size: 1.5rem;">
                                        <i class="si si-settings"></i> analysis It
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>
@endsection


@section('scripts')

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    // $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }

        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });

        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });

        // Form Submit Ajax Call
        $('#submitForm').on('submit', function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('examine') }}",
                data: new FormData(this),
                datatype: "JSON",
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    // get the data then turn in into js object to handle
                    // put the link data into the div as html
                    console.log(data);
                }
            });

        });

        var pageLoader = document.getElementById('my-loader');
        window.onload = setTimeout(function () {
            pageLoader.classList.add('layout-hide');
        }, 3000);

    </script>
@endsection
