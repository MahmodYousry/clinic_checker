@extends('layouts.patient_master')

@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Dear,  <span style="color:#3964ae">Patient Name</span><small class="font-size-base font-w400 text-muted"></small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Developer</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Manage</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content">
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed block-link-shadow">
                    <div class="block-header bg-primary">
                        <h3 class="block-title"><i class="fa fa-address-card mr-1"></i> Basic Info</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="#"><i class="fa fa-edit mr-1"></i> Edit Info</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Info</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-info">
                        <h3 class="block-title"><i class="fa fa-phone mr-1"></i> Phones</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-phone"><i class="fa fa-plus mr-1"></i> Add New Phone</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Phones</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-success">
                        <h3 class="block-title"><i class="fa fa-user mr-1"></i> Experinces</h3>
                    </div>
                    <div class="block-content">
                        {{-- <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-company"><i class="fa fa-plus mr-1"></i> Add Company</a></p> --}}

                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Preview Experinces</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="si si-settings mr-1"></i> Manage Experinces</a></p>
                        {{-- <p><a class="link-fx" href="{{ route('developer.experience.index') }}"><i class="fa fa-eye mr-1"></i> Manage Experiences</a></p> --}}
                        {{-- <p><a class="link-fx" href="{{ route('developer.companies.index') }}"><i class="fa fa-eye mr-1"></i> Manage Companies</a></p> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-city">
                        <h3 class="block-title"><i class="fa fa-user mr-1"></i> Services</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Manage Services</a></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-primary-darker">
                        <h3 class="block-title"><i class="fa fa-file-code mr-1"></i> skills</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-skill"><i class="fa fa-plus mr-1"></i> Add New Skill</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Skills</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-flat">
                        <h3 class="block-title"><i class="fa fa-at mr-1"></i> Social Media</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-social-link"><i class="fa fa-plus mr-1"></i> Add New Social Media Link</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Social Links</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-smooth">
                        <h3 class="block-title"><i class="fa fa-at mr-1"></i> Technology</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-technology"><i class="fa fa-plus mr-1"></i> Add New Technology</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Technologies</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-3">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-amethyst">
                        <h3 class="block-title"><i class="fa fa-at mr-1"></i> Features</h3>
                    </div>
                    <div class="block-content">
                        <p><a class="link-fx" href="javascript:void(0)" data-toggle="modal" data-target="#modal-add-feature"><i class="fa fa-plus mr-1"></i> Add New Feature</a></p>
                        <p><a class="link-fx" href="javascript:void(0)"><i class="fa fa-eye mr-1"></i> Developer Features</a></p>
                    </div>
                </div>
            </div>

            {{-- start models  --}}
            <!-- start add modal Content -->
            <div class="modal fade" id="modal-add-phone" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New Phone</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group">
                                                <label for="example-text-input-alt">Phone</label>
                                                <input type="tel" class="form-control form-control-alt" id="example-text-input-alt"
                                                        name="phone" placeholder="Enter A Valid Phone Number">
                                                <input type="hidden" value="">
                                            </div>
                                        </div>
                                        <div class="block-content text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add modal Content -->
            <!-- start add social media modal -->
            <div class="modal fade" id="modal-add-social-link" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New Social Media Link</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="icon">Icon</label>
                                                <input id="icon" type="text" class="form-control form-control-alt"
                                                    name="icon" placeholder="Social Icon">
                                            </div>
                                            <div class="form-group">
                                                <label for="link">link</label>
                                                <textarea id="link" class="form-control form-control-alt"
                                                    name="link" rows="5" placeholder="Social Media Link.."></textarea>
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add social media modal -->
            <!-- start add skill modal-->
            <div class="modal fade" id="modal-add-skill" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New skill</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="soft_skill">Type / Kind</label>
                                                <select class="custom-select" id="soft_skill" name="soft_skill">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Soft Skill</option>
                                                    <option value="2">Technical Skill</option>
                                                    <option value="3">Javascript</option>
                                                </select>
                                                <input type="hidden" name="user_id" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="skill">Skill</label>
                                                <input id="skill" class="form-control form-control-alt" type="text"
                                                        name="skill" placeholder="Example: Patient, Hard Worker, etc">
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add skill modal-->
            <!-- start add feature modal-->
            <div class="modal fade" id="modal-add-feature" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New Feature</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="feature">Feature</label>
                                                <textarea id="feature" class="form-control form-control-alt"
                                                    name="feature" rows="5" placeholder="feature.."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="soft_skill">Type/stack</label>
                                                <select class="custom-select" id="soft_skill" name="soft_skill">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Backend</option>
                                                    <option value="2">FrontEnd</option>
                                                    <option value="3">Other</option>
                                                </select>
                                                <input type="hidden" name="user_id" value="">
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add feature modal -->
            <!-- start add technology modal-->
            <div class="modal fade" id="modal-add-technology" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add New Technology</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="techno_icon">Icon</label>
                                                <input id="techno_icon" class="form-control form-control-alt"
                                                    name="techno_icon" placeholder="Icon..">
                                            </div>
                                            <div class="form-group">
                                                <label for="techno_content">Technology</label>
                                                <input id="techno_content" class="form-control form-control-alt"
                                                    name="techno_content" placeholder="Technology Context..">
                                            </div>
                                        </div>
                                        <div class="block-content text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add technology modal -->
            <!-- start add company modal-->
            <div class="modal fade" id="modal-add-company" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Add Company</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content font-size-sm">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="company_name">Name</label>
                                                <input id="company_name" class="form-control" placeholder="company name .."
                                                    name="company_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input js-custom-file-input-enabled"
                                                            data-toggle="custom-file-input" id="logo_image" name="logo_image">
                                                    <label class="custom-file-label" for="logo_image">Upload</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input id="address" class="form-control" placeholder="Address .."
                                                    name="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="LinkedIn">LinkedIn</label>
                                                <input id="LinkedIn" type="text" class="form-control" placeholder="LinkedIn .." name="LinkedIn">

                                                <input type="hidden" name="developer_id" value="">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                                                    <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg1" name="example-rd-custom-inline-lg" checked="">
                                                    <label class="custom-control-label" for="example-rd-custom-inline-lg1">One Period</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline custom-control-lg">
                                                    <input type="radio" class="custom-control-input" id="example-rd-custom-inline-lg2" name="example-rd-custom-inline-lg">
                                                    <label class="custom-control-label" for="example-rd-custom-inline-lg2">Multi Period</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content text-right border-top">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-md btn-primary">
                                                    <i class="fa fa-fw fa-check"></i> Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END add company modal -->

        </div>
    </div>

</main>
@endsection

