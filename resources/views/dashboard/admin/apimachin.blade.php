@extends('layouts.admin_master')

@section('css_adds')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .update_btn {
            padding: .5rem 2rem;
            background-color: #66ACFF;
            color: #1f1f1f;
            border-radius: 200px;
        }

        .url_area {
            padding: 2rem 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            background-color: #a7a7a7;
            border-radius: 200px;
            width: fit-content;
            margin: auto;
        }

        .url_area span {
            color: #1f1f1f;
            position: relative;
            font-weight: bold;
        }

        .url_area span::after {
            content: '';
            position: absolute;
            left: -20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #00ff29;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .url_area p {
            margin: 0;
            color: #1f1f1f;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Api
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">API</a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">API <small>Integration</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center mb-5">API Machine Learning</h2>
                            <form id="api_url_form" action="{{route('update_api_url')}}" method="post">
                                @csrf
                                <div class="d-flex justify-content-center align-items-center gap-5 my-5">
                                    <p class="font-weight-bold text-capitalize m-0">Update Api Url</p>
                                    <input class="form-control w-50 mx-4 link" type="text" name="link">
                                    <button class="btn btn-primary btn-md update_btn" type="submit">Update</button>
                                </div>
                            </form>
                            <div class="my-5 url_area">
                                <span>Active Url</span>
                                <p id="link_replace">https://saldklakdsls.com</p> <!-- active -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection

@section('scripts')
    <script>
        window.onload = function() {
            var $data = { 'link': $('.link').val() }
            $.ajax({
                type: "get",
                url: "{{ route('get_active_url') }}",
                data: $data,
                datatype: "html",
                success: function(data) {
                    // put the link data into the div as html
                    $('#link_replace').html(data);
                }
            });
        }

        // Form Submit Ajax Call
        $('#api_url_form').on('submit', function (e) {
            e.preventDefault();

            var $data = { 'link': $('.link').val() }

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $.ajax({
                type: "post",
                url: "{{ route('update_api_url') }}",
                data: $data,
                datatype: "json",
                success: function(data) {
                    // get the data then turn in into js object to handle
                    var goodData = JSON.parse(data);
                    // put the link data into the div as html
                    $('#link_replace').html(goodData.link);
                }
            });
        });
    </script>
@endsection;
