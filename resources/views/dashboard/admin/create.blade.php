@extends('layouts.admin_master')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Create New Doctor
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Create New Doctor</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{ route('doctors.index') }}">Manage Doctors</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Doctor Registration Information</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="be_forms_elements.html" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Select Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="0" disabled>Please select</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <textarea class="form-control" id="speciality" name="speciality" rows="5" placeholder="Speciality.."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="5" placeholder="Address.."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <label>Personal Photo</label>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="photo" name="photo">
                                        <label class="custom-file-label" for="photo">Choose Photo</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="facebook_profile">Facebook Profile</label>
                                    <input type="text" class="form-control" id="facebook_profile" name="facebook_profile" placeholder="facebook profile link">
                                </div>

                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary"><i class="fa fa-check mr-2"></i>Save</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
