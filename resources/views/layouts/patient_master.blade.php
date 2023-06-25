@include('dashboard.includes.shared_includes.head')
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        @include('dashboard.includes.patient_includes.sidebar-overlay') <!--  patient sidebar  -->
        @include('dashboard.includes.patient_includes.sidebar') <!--  patient sidebar  -->
        @include('dashboard.includes.shared_includes.header')

        @yield('content')

        @include('dashboard.includes.shared_includes.footer')
    </div>
    <!-- END Page Container -->
@include('dashboard.includes.shared_includes.foot')
