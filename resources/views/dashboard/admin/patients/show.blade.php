@extends('layouts.admin_master')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Manage patients
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Manage patients</a>
                            </li>
                            <li class="breadcrumb-item">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            {{-- errors And Alerts --}}
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
                <div class="alert alert-success d-flex align-items-center animated fadeInDown" role="alert">
                    <div class="flex-00-auto">
                        <i class="fa fa-fw fa-check"></i>
                    </div>
                    <div class="flex-fill ml-3">
                        <p class="mb-0 text-capitalize">{{ session('success') }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger d-flex align-items-center animated fadeInDown" role="alert">
                    <div class="flex-00-auto">
                        <i class="far fa-sad-tear fa-fw"></i>
                    </div>
                    <div class="flex-fill ml-3">
                        <p class="mb-0 text-capitalize">{{ session('error') }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            {{-- end errors And Alerts --}}
            <a class="btn btn-primary mb-4" href="{{ route('patient.create') }}"><i class="fa fa-plus-square mr-2"></i> Register New patient</a>
            <a class="btn btn-primary mb-4" href="{{ url()->previous() }}"><i class="fa fa-arrow-left mr-2"></i> Back</a>
            <div class="block block-rounded">
                <div class="block block-header">
                    <h3 class="block-title">patient Full Info</h3>
                </div>
                <div class="block block-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-3">

                            <h5 class="h5 mb-4">Name: {{ $patient->first_name }}</h5>

                            <img class="border border-dark rounded img-fluid" style="max-height: 345px;" src="{{ $patient->photo ? asset('storage/patients_photos/'.$patient->photo) : asset('img/defualt.avif') }}" alt="Card image cap">

                            <p class="font-size-sm text-muted">email : {{ $patient->email }}</p>
                            <p class="font-size-sm text-muted">gender :{{ $patient->gender }}</p>
                            <p class="font-size-sm text-muted">last_name :{{ $patient->last_name }}</p>
                            <p class="font-size-sm text-muted">address : {{ $patient->address }}</p>

                            <div class="control mb-3">
                                <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit p-1"></i></a>
                                <form action="{{ route('patient.destroy', $patient->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash p-1"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
