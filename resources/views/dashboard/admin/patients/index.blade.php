@extends('layouts.admin_master')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Manage Patients
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Manage Patients</a>
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
            <a class="btn btn-primary mb-4" href="{{ route('patient.create') }}"><i class="fa fa-plus-square mr-2"></i>Register New Patient</a>

            <div class="block block-rounded">
                <div class="block-header">
                    {{-- <h3 class="block-title">Dynamic Table <small>Full</small></h3> --}}
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th>photo</th>
                                <th>first name</th>
                                <th>gender</th>
                                <th>phone</th>
                                <th style="width: 15%;">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td class="text-center font-size-sm">{{ $loop->iteration }}</td>
                                    <td class="font-w600 font-size-sm"><img class="img-fluid w-25 rounded img-thumbnail" src="{{ asset('storage/patients_photos/'.$patient->photo) }}" alt=""></td>
                                    <td class="font-w600 font-size-sm">{{ $patient->first_name }}</td>
                                    <td class="d-none d-sm-table-cell font-size-sm">{{ $patient->gender }}</td>
                                    <td class="d-none d-sm-table-cell font-size-sm">{{ $patient->phone_one }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-alt-primary" href="{{ route('patient.show', $patient->id) }}" data-toggle="tooltip" title="Show">
                                                <i class="fa fa-fw fa-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-alt-primary" href="{{ route('patient.edit', $patient->id) }}" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-fw fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('patient.destroy', $patient->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-alt-primary" type="submit" data-toggle="tooltip" title="delete"><i class="fa fa-fw fa-times"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
