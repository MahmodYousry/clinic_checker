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

        /* result css  */

        /* start button print  */

        .disease-name {
            font-weight: bold;
            width: 250px;
            text-align: center;
            padding: 1rem 1.5rem;
            border: 1px solid #222;
            border-radius: 200px;
            box-shadow: 0px 2px 1px 0 #222;
        }

        button.print-button {
            width: 100px;
            height: 100px;
        }
        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            border: solid 4px #333;
        }
        span.print-icon::after {
            border-width: 2px;
        }

        button.print-button {
            position: relative;
            padding: 0;
            border: 0;

            border: none;
            background: transparent;
        }

        span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
            box-sizing: border-box;
            background-color: #fff;
        }

        span.print-icon {
            position: relative;
            display: inline-block;
            padding: 0;
            margin-top: 20%;

            width: 60%;
            height: 35%;
            background: #fff;
            border-radius: 20% 20% 0 0;
        }

        span.print-icon::before {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 12%;
            right: 12%;
            height: 110%;

            transition: height .2s .15s;
        }

        span.print-icon::after {
            content: "";
            position: absolute;
            top: 55%;
            left: 12%;
            right: 12%;
            height: 0%;
            background: #fff;
            background-repeat: no-repeat;
            background-size: 70% 90%;
            background-position: center;
            background-image: linear-gradient(
                to top,
                #fff 0, #fff 14%,
                #333 14%, #333 28%,
                #fff 28%, #fff 42%,
                #333 42%, #333 56%,
                #fff 56%, #fff 70%,
                #333 70%, #333 84%,
                #fff 84%, #fff 100%
            );

            transition: height .2s, border-width 0s .2s, width 0s .2s;
        }

        button.print-button:hover {
            cursor: pointer;
        }

        button.print-button:hover .print-icon::before {
            height:0px;
            transition: height .2s;
        }

        button.print-button:hover .print-icon::after {
            height:120%;
            transition: height .2s .15s, border-width 0s .16s;
        }

        .report-box {
            background-color: #f2f2f2;
            border: 5px solid #1C4EFE;
            width: 100%;
            min-height: 500px;
            padding: 2rem 1.5rem;
        }

        .report-box .headStyle {
            width: fit-content;
            padding-bottom: 10px;
            border-bottom: 3px solid #222;
            display: block;
            font-weight: bold;
        }

        .report-box p {
            padding-left: 1rem;
        }

        .report-box p,
        .report-box ul li {
            font-family: inder;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .report-box ul.treatment li {
            font-weight: unset;
        }

        .report-box .treatment_medicine {
            border: 2px solid #222;
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

        .report-box .add-to-cart {
            background-color: #444;
            border: none;
            text-transform: capitalize;
            border-radius: 200px;
            padding: .5rem 0;
        }

        .report-box .add-to-cart:hover {
            background-color: #222;
            border: none;
        }
        /* end result css  */

        /* start loader */

        .layout-loader {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            transition: all 1s ease 0s;
        }

        .layout-hide {
            opacity: 0;
            visibility: hidden;
        }

        .layout-loader::after {
            content: '';
            width: 8rem;
            height: 8rem;
            border: 15px solid #ddd;
            border-top-color: #009758;
            border-radius: 50%;
            transition: opacity 0.75s, visibility 0.75s;
            animation: loading 0.75s ease infinite;
        }

        @keyframes loading {
            from { transform: rotate(0turn);}
            to { transform: rotate(1turn);}
        }


        .checkup-result {
            display: none;
        }


        /* end loader */

    </style>
@endsection

@section('content')
    <main id="main-container">

        <!-- Loader -->
        <div id="my-loader" class="layout-loader layout-hide">
            <i class="fa fa-close"></i>
        </div>
        <!-- end Loader -->

        {{-- examin --}}
        <div class="checkup-examin">
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
        </div>
        {{-- end examin --}}

        {{-- result --}}
        <div class="checkup-result">

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
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <h3 class="text-center mb-4 h4">Patient Report</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="w-100 d-flex justify-content-end align-items-center">
                                    <button class="print-button"><span class="print-icon"></span></button>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-3 mb-5">
                                <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                                    <h2>Sample</h2>
                                    <img class="img-thumbnail" src="{{ asset('dashboard/assets/download_1.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-6 mb-5 offeset-xl-2">
                                <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                                    <h2 class="text-capitalize border-bottom border-secondary mb-5">prediction of artificial intelligence</h2>
                                    <h4 class="text-capitalize mb-5 disease-name">Disease Name</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-capitalize fw-bold">Some information About this disease</h4>
                                <div class="report-box">
                                    <h4 class="text-capitalize headStyle mb-5">Disease Name : <span class="dis_name">Disease_Name</span></h4>

                                    <h4 class="text-capitalize headStyle">What is <span class="dis_name3">Cytice anything</span> ?</h4>

                                    <p class="mb-3">
                                        Cystic acne is a type of inflammatory acne that causes painful, pus-filled pimples to form deep under the skin.
                                        Acne occurs when oil and dead skin cells clog skin pores. With cystic acne,
                                        bacteria also gets into the pores, causing swelling or inflammation.
                                    </p>

                                    <p class="mb-5">
                                        Cystic acne is the most severe type of acne. Acne cysts are often painful and more likely to cause scarring.
                                    </p>

                                    <h4 class="text-capitalize headStyle">What causes <span class="dis_name3">Cytice anything</span> ?</h4>

                                    <p class="mb-3">
                                        Pores in the skin can clog with excess oil and dead skin cells, causing pimples. Bacteria can enter the skin pores and get trapped along with the oil and skin cells. The skin reaction causes swelling deep in the skin’s middle layer (the dermis). This infected, red, swollen lump is an acne cyst.
                                    </p>

                                    <p class="mb-3">
                                        can clog with excess oil and dead skin cells, causing pimples. Bacteria can enter the skin pores and get trapped along with the oil and skin cells. The skin reaction causes swelling deep in the skin’s middle layer (the dermis). This infected, red, swollen lump is an acne cyst.
                                    </p>
                                    <ul class="mb-5">
                                        <li>Age (teenagers are more prone to cystic acne).</li>
                                        <li>Family history of cystic acne.</li>
                                        <li>Hormone changes during the teenage years and sometimes during menopause, and stress.</li>
                                    </ul>

                                    <h4 class="text-capitalize headStyle">Treatment</h4>

                                    <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                                        <h4 class="text-capitalize headStyle">Some Advices</h4>
                                        <ul class="mb-5 treatment">
                                            <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells,  along with the oil
                                            </li>
                                            <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells</li>
                                            <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells,  along with the oil</li>
                                        </ul>
                                    </div>

                                    <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                                        <h4 class="text-capitalize headStyle">Suggested Medicine</h4>
                                    </div>
                                    {{-- Suggested Medicin --}}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <div class="block block-rounded">
                                                    <div class="options-container">
                                                        <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                        <div class="options-overlay bg-black-75">
                                                            <div class="options-overlay-content">
                                                                <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                                    View
                                                                </a>
                                                                <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                                    <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                                </a>
                                                                <div class="text-warning mt-3">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span class="text-white">(480)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="mb-2">
                                                            <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                            <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                        </div>
                                                        <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <div class="block block-rounded">
                                                    <div class="options-container">
                                                        <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                        <div class="options-overlay bg-black-75">
                                                            <div class="options-overlay-content">
                                                                <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                                    View
                                                                </a>
                                                                <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                                    <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                                </a>
                                                                <div class="text-warning mt-3">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span class="text-white">(480)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="mb-2">
                                                            <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                            <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                        </div>
                                                        <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <div class="block block-rounded">
                                                    <div class="options-container">
                                                        <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                        <div class="options-overlay bg-black-75">
                                                            <div class="options-overlay-content">
                                                                <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                                    View
                                                                </a>
                                                                <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                                    <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                                </a>
                                                                <div class="text-warning mt-3">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span class="text-white">(480)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="mb-2">
                                                            <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                            <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                        </div>
                                                        <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Suggested Medicin --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- end result --}}

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
                    var pageLoader      = document.getElementById('my-loader');
                    var examinSection   = document.getElementsByClassName('checkup-examin')[0];
                    var resultSection   = document.getElementsByClassName('checkup-result')[0];

                    // all areas to put data we got
                    var imgThumbnail    = document.getElementsByClassName('img-thumbnail')[0];
                    var diseaseName     = document.getElementsByClassName('disease-name')[0];
                    var diseaseName2    = document.getElementsByClassName('dis_name')[0];
                    var diseaseName3    = document.getElementsByClassName('dis_name3')[0];
                    var diseaseName31    = document.getElementsByClassName('dis_name3')[1];

                    // show the loader
                    pageLoader.classList.remove('layout-hide');

                    window.onload = setTimeout(function () {
                        pageLoader.classList.add('layout-hide');
                        examinSection.style.display = "none";
                        resultSection.style.display = "block";
                    }, 3000);

                    // convert the JSON Data Into Js Object To Handle it
                    var dataConverted = JSON.parse(data);

                    // imgThumbnail.src = dataConverted.sample
                    diseaseName.innerHTML = dataConverted.disease;
                    diseaseName2.innerHTML = dataConverted.disease;
                    diseaseName3.innerHTML = dataConverted.disease;
                    diseaseName31.innerHTML = dataConverted.disease;

                    // bind data to all fields



                }
            });

        });

    </script>
@endsection
