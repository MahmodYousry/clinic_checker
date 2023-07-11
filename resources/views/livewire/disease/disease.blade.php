@extends('layouts.admin_master')

@section('css_adds')
    @livewireStyles
@endsection

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Register New Disease
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Register New Disease</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{ route('manage_diseases') }}">Manage Diseases</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Simple Wizard 2 -->
            <div class="js-wizard-simple block">
                <!-- Form -->
                @livewire('add-disease')
                <!-- End Form -->
            </div>
            <!-- END Simple Wizard 2 -->
        </div>
        <!-- END Page Content -->

    </main>
@endsection

@section('scripts')

    {{-- <script src="{{ asset('dashboard/assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js') }}"></script> --}}
    <script src="{{ asset('dashboard/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/plugins/jquery-validation/additional-methods.js') }}"></script>
    {{-- <script src="{{ asset('dashboard/assets/js/pages/be_forms_wizard.min.js') }}"></script> --}}

    @livewireScripts
@endsection
