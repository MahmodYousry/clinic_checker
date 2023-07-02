@extends('layouts.patient_master')

@section('css_adds')
    <style>

        .item-img-overlay {
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            background: rgba(255, 255, 255, 0.95);
            opacity: 0;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            z-index: 2;
            -webkit-transform: translateY(10px);
            transform: translateY(10px);
        }

        .v-middle {
            position: absolute;
            width: 100%;
            top: 50%;
            left: 0;
            -webkit-transform: translate(0%, -50%);
            -moz-transform: translate(0%, -50%);
            -ms-transform: translate(0%, -50%);
            -o-transform: translate(0%, -50%);
            transform: translate(0%, -50%);
        }

        .item-img:hover h6, .portfolio .item-img:hover .icons {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .item-img .icon a {
            display: flex;
            justify-content: center;
            align-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #111;
            background: #111;
            color: #eee;
            font-size: .75rem;
        }

        .item-img:hover .item-img-overlay {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
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
                        Our Doctors
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Home</a>
                            </li>
                            <li class="breadcrumb-item">Doctors</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            <div class="row">
                {{-- start doctors cards --}}
                @foreach ($doctors as $doctor)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="item-img card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                            <img class="card-img-top position-relative" style="max-height: 345px;" src="{{ $doctor->photo ? asset('storage/doctors_photos/'.$doctor->photo) : asset('img/defualt.avif') }}" alt="Card image cap">
                            <div class="item-img-overlay">
                                <div class="overlay-info v-middle text-center">
                                    <div class="icons">
                                        <span class="icon d-flex justify-content-center align-items-center">
                                            <a href="{{ route('patient_doctors.show', $doctor->id) }}" class="btn btn-info d-flex justify-content-center align-items-center">
                                                <i class="fa fa-eye p-1"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End doctors cards --}}
            </div>
        </div>

    </main>
@endsection
