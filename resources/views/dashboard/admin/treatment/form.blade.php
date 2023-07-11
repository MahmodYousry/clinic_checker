@extends('layouts.admin_master')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Manage Treatment
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="">Manage Treatment</a>
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

            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Set Treatment</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                        {{-- start treatment form  --}}
                        <form action="{{ route('admin.set_treatment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="d-block m-auto w-50">
                                    <div class="form-group">
                                        <label for="disease">Disease</label>
                                        <select class="form-control" id="disease" name="disease">
                                            <option value="0" disabled selected>Please select</option>
                                            @foreach ($allDiseases as $disease)
                                                <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Articles</label>
                                        <!-- Start Articles Table -->
                                        <table id="datatable" class="table table-bordered table-striped table-vcenter js-dataTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 80px;"></th>
                                                    <th class="text-center">Article</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($allArticles as $article)
                                                    <tr>
                                                        <td class="text-center"><input type="checkbox" name="article[]" value="{{ $article->id }}" class="box1"></td>
                                                        <td class="font-w600 font-size-sm"><a href="#">{{$article->title}}</a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <!-- END Articles Table -->
                                    </div>
                                    <div class="form-group">
                                        <label>Advices</label>
                                        <!-- Start Articles Table -->
                                        <table id="datatable" class="table table-bordered table-striped table-vcenter js-dataTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 80px;"></th>
                                                    <th class="text-center">Advice</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($allAdvices as $advice)
                                                    <tr>
                                                        <td class="text-center"><input type="checkbox" name="advice[]" value="{{ $advice->id }}" class="box1"></td>
                                                        <td class="font-w600 font-size-sm"><a href="#">{{$advice->title}}</a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <!-- END Articles Table -->
                                    </div>
                                    <div class="form-group">
                                        <label>Suggested Medicines</label>
                                        <!-- Start Articles Table -->
                                        <table id="datatable" class="table table-bordered table-striped table-vcenter js-dataTable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 80px;"></th>
                                                    <th class="text-center">Medicine</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($allMedicines as $medicine)
                                                    <tr>
                                                        <td class="text-center"><input type="checkbox" name="medicine[]" value="{{ $medicine->id }}" class="box1"></td>
                                                        <td class="font-w600 font-size-sm"><a href="#">{{$medicine->name}}</a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <!-- END Articles Table -->
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary" data-toggle="click-ripple">
                                            <i class="fa fa-check fa-fw mr-2"></i> Save Treatment</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        {{-- end treatment form  --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
