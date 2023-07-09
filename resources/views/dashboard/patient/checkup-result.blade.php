@extends('layouts.patient_master')


@section('css_adds')
 <style>
    body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #30c78d;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #2c775a;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}

/* start loader */

.layout-loader {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #333;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10000;
  transition: all 1s ease 0s;
}

.layout-hide {
  opacity: 0;
  visibility: hidden;
}

.layout-loader::after {
  content: '';
  width: 8rem;
  height: 8rem;
  border: 15px solid #ddd;
  border-top-color: #009758;
  border-radius: 50%;
  transition: opacity 0.75s, visibility 0.75s;
  animation: loading 0.75s ease infinite;
}

@keyframes loading {
  from { transform: rotate(0turn);}
  to { transform: rotate(1turn);}
}




</style>
@endsection

@section('content')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Patient <small class="font-size-base font-w400 text-muted">Checkup Examination</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Patients</a>
                        </li>
                        <li class="breadcrumb-item">Checkup</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content">
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <h3 class="text-center mb-4 h4">Patient Report</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="w-100 d-flex justify-content-end align-items-center">
                            <button class="print-button"><span class="print-icon"></span></button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3 mb-5">
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                            <h2>Sample</h2>
                            <img class="img-thumbnail" src="" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-9 mb-5">
                        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                            <h2 class="text-capitalize border-bottom border-secondary mb-5">prediction of artificial intelligence</h2>
                            <h4 class="text-capitalize mb-5 disease-name">Disease Name</h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="text-capitalize fw-bold">Some information About this disease</h4>
                        <div class="report-box">
                            <h4 class="text-capitalize headStyle mb-5">Disease Name : <span class="dis_name">{{$disease}}</span></h4>

                            <h4 class="text-capitalize headStyle">What is <span class="dis_name">Cytice anything</span> ?</h4>

                            <p class="mb-3">
                                Cystic acne is a type of inflammatory acne that causes painful, pus-filled pimples to form deep under the skin.
                                Acne occurs when oil and dead skin cells clog skin pores. With cystic acne,
                                bacteria also gets into the pores, causing swelling or inflammation.
                            </p>

                            <p class="mb-5">
                                Cystic acne is the most severe type of acne. Acne cysts are often painful and more likely to cause scarring.
                            </p>

                            <h4 class="text-capitalize headStyle">What causes <span class="dis_name">Cytice anything</span> ?</h4>

                            <p class="mb-3">
                                Pores in the skin can clog with excess oil and dead skin cells, causing pimples. Bacteria can enter the skin pores and get trapped along with the oil and skin cells. The skin reaction causes swelling deep in the skin’s middle layer (the dermis). This infected, red, swollen lump is an acne cyst.
                            </p>

                            <p class="mb-3">
                                can clog with excess oil and dead skin cells, causing pimples. Bacteria can enter the skin pores and get trapped along with the oil and skin cells. The skin reaction causes swelling deep in the skin’s middle layer (the dermis). This infected, red, swollen lump is an acne cyst.
                            </p>
                            <ul class="mb-5">
                                <li>Age (teenagers are more prone to cystic acne).</li>
                                <li>Family history of cystic acne.</li>
                                <li>Hormone changes during the teenage years and sometimes during menopause, and stress.</li>
                            </ul>

                            <h4 class="text-capitalize headStyle">Treatment</h4>

                            <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                                <h4 class="text-capitalize headStyle">Some Advices</h4>
                                <ul class="mb-5 treatment">
                                    <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells,  along with the oil
                                    </li>
                                    <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells</li>
                                    <li><strong>Please</strong> skin pores and get trapped along with the oil and skin cells,  along with the oil</li>
                                </ul>
                            </div>

                            <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                                <h4 class="text-capitalize headStyle">Suggested Medicine</h4>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="block block-rounded">
                                            <div class="options-container">
                                                <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                <div class="options-overlay bg-black-75">
                                                    <div class="options-overlay-content">
                                                        <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                            View
                                                        </a>
                                                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                            <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                        </a>
                                                        <div class="text-warning mt-3">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="text-white">(480)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="mb-2">
                                                    <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                    <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                </div>
                                                <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="block block-rounded">
                                            <div class="options-container">
                                                <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                <div class="options-overlay bg-black-75">
                                                    <div class="options-overlay-content">
                                                        <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                            View
                                                        </a>
                                                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                            <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                        </a>
                                                        <div class="text-warning mt-3">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="text-white">(480)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="mb-2">
                                                    <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                    <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                </div>
                                                <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="block block-rounded">
                                            <div class="options-container">
                                                <img class="img-fluid options-item" src="{{ asset('dashboard/assets/media/various/ecom_product6.png')}}" alt="">
                                                <div class="options-overlay bg-black-75">
                                                    <div class="options-overlay-content">
                                                        <a class="btn btn-sm btn-light" href="be_pages_ecom_store_product.html">
                                                            View
                                                        </a>
                                                        <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                            <i class="fa fa-plus text-success mr-1"></i> Add to cart
                                                        </a>
                                                        <div class="text-warning mt-3">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span class="text-white">(480)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content">
                                                <div class="mb-2">
                                                    <div class="h4 font-w600 text-success float-right ml-1">$58</div>
                                                    <a class="h4" href="be_pages_ecom_store_product.html">Super Badges Pack</a>
                                                </div>
                                                <p class="font-size-sm text-muted">1000s of high quality badges</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

