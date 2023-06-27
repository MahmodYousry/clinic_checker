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
            <a class="btn btn-primary mb-4" href="{{ route('doctors.create') }}"><i class="fa fa-plus-square mr-2"></i> Register New Doctor</a>
            <div class="row">
                {{-- start doctors cards --}}
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Doctor Ehab</h5>
                          <p class="font-size-sm text-muted">Dogs and Cats Speciality</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="{{ route('doctors.edit', 1) }}" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Card title</h5>
                          <p class="font-size-sm text-muted">Some quick example text to build</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://upload.wikimedia.org/wikipedia/en/4/48/Suzumiya_Haruhi.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Card title</h5>
                          <p class="font-size-sm text-muted">Some quick example text to build</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://upload.wikimedia.org/wikipedia/en/4/48/Suzumiya_Haruhi.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Card title</h5>
                          <p class="font-size-sm text-muted">Some quick example text to build</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://upload.wikimedia.org/wikipedia/en/4/48/Suzumiya_Haruhi.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Card title</h5>
                          <p class="font-size-sm text-muted">Some quick example text to build</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card mb-4 border-0" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                        <img class="card-img-top" style="max-height: 345px;" src="https://upload.wikimedia.org/wikipedia/en/4/48/Suzumiya_Haruhi.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="h5 mb-1">Card title</h5>
                          <p class="font-size-sm text-muted">Some quick example text to build</p>
                          <a href="#" class="btn btn-info"><i class="fa fa-eye p-1"></i></a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-edit p-1"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash p-1"></i></a>
                        </div>
                    </div>
                </div>
                {{-- End doctors cards --}}
            </div>
        </div>

    </main>
@endsection
