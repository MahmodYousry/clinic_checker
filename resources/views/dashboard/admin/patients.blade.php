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
                                <th class="text-center">ID</th>
                                <th>first name</th>
                                <th>gender</th>
                                <th>phone</th>
                                <th style="width: 15%;">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-size-sm">1</td>
                                <td class="font-w600 font-size-sm">Ehab</td>
                                <td class="d-none d-sm-table-cell font-size-sm">Male</td>
                                <td class="d-none d-sm-table-cell font-size-sm">01211556934</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-alt-primary" href="{{ route('patient.edit', 1) }}" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-alt-primary" href="{{ route('patient.edit', 1) }}" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center font-size-sm">2</td>
                                <td class="font-w600 font-size-sm">Ehab</td>
                                <td class="d-none d-sm-table-cell font-size-sm">Male</td>
                                <td class="d-none d-sm-table-cell font-size-sm">01211556934</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="">

            </div>
        </div>

    </main>
@endsection
