@extends('layouts.admin_master')

@section('css_adds')
<style>

    .update_btn {
        padding: .5rem 2rem;
        background-color: #66ACFF;
        color: #1f1f1f;
        border-radius: 200px;
    }

    .url_area {
        padding: 0.75rem 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5rem;
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
                            <div class="d-flex justify-content-center align-items-center gap-5 my-5">
                                <p class="font-weight-bold text-capitalize m-0">Update Api Url</p>
                                <input class="form-control w-50 mx-4" type="text">
                                <button class="btn btn-primary btn-md update_btn" type="submit">Update</button>
                            </div>
                            <div class="my-5 url_area">
                                <span>Active Url</span>
                                <p>https://saldklakdsls.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
