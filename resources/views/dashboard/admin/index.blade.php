@extends('layouts.admin_master')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Manage Doctors
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Manage Doctors</a>
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
            <a class="btn btn-primary mb-4" href="{{ route('doctors.create') }}"><i class="fa fa-plus-square mr-2"></i> Register New Doctor</a>
            <div class="row">
                {{-- start doctors cards --}}
                @php $imagesPath = '..\..\storage\app\doctors_photos\\';  @endphp
                @foreach ($doctors as $doctor)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                            <img class="card-img-top" style="max-height: 345px;" src="{{ $doctor->photo ? $imagesPath.$doctor->photo : asset('img/defualt.avif') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="h5 mb-1">{{ $doctor->first_name }}</h5>
                                <p class="font-size-sm text-muted">{{ $doctor->speciality }}</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End doctors cards --}}
            </div>
        </div>

    </main>
@endsection
