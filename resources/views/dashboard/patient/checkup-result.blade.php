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

.disease-name {
    font-weight: bold;
    width: 250px;
    text-align: center;
    padding: 1rem 1.5rem;
    border: 1px solid #222;
    border-radius: 200px;
    box-shadow: 0px 2px 1px 0 #222;
}


/* start button print  */

button.print-button {
  width: 100px;
  height: 100px;
}
span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  border: solid 4px #333;
}
span.print-icon::after {
  border-width: 2px;
}

button.print-button {
  position: relative;
  padding: 0;
  border: 0;

  border: none;
  background: transparent;
}

span.print-icon, span.print-icon::before, span.print-icon::after, button.print-button:hover .print-icon::after {
  box-sizing: border-box;
  background-color: #fff;
}

span.print-icon {
  position: relative;
  display: inline-block;
  padding: 0;
  margin-top: 20%;

  width: 60%;
  height: 35%;
  background: #fff;
  border-radius: 20% 20% 0 0;
}

span.print-icon::before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 12%;
  right: 12%;
  height: 110%;

  transition: height .2s .15s;
}

span.print-icon::after {
  content: "";
  position: absolute;
  top: 55%;
  left: 12%;
  right: 12%;
  height: 0%;
  background: #fff;
  background-repeat: no-repeat;
  background-size: 70% 90%;
  background-position: center;
  background-image: linear-gradient(
    to top,
    #fff 0, #fff 14%,
    #333 14%, #333 28%,
    #fff 28%, #fff 42%,
    #333 42%, #333 56%,
    #fff 56%, #fff 70%,
    #333 70%, #333 84%,
    #fff 84%, #fff 100%
  );

  transition: height .2s, border-width 0s .2s, width 0s .2s;
}

button.print-button:hover {
  cursor: pointer;
}

button.print-button:hover .print-icon::before {
  height:0px;
  transition: height .2s;
}

button.print-button:hover .print-icon::after {
  height:120%;
  transition: height .2s .15s, border-width 0s .16s;
}

.report-box {
    background-color: #f2f2f2;
    border: 5px solid #1C4EFE;
    width: 100%;
    min-height: 500px;
    padding: 2rem 1.5rem;
}

.report-box .headStyle {
    width: fit-content;
    padding-bottom: 10px;
    border-bottom: 3px solid #222;
    display: block;
    font-weight: bold;
}

.report-box p {
    padding-left: 1rem;
}

.report-box p,
.report-box ul li {
    font-family: inder;
    font-size: 1.2rem;
    font-weight: bold;
}
.report-box ul.treatment li {
    font-weight: unset;
}

.report-box .treatment_medicine {
    border: 2px solid #222;
}

.report-box .img-overlay {
    transition: all 1s ease 0s;
}

.report-box .img-overlay::after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    height: 220px;
    width: 220px;
    background: rgba(0,0,0,.7);
    z-index: 2;
    transform: translatex(-50%);
    opacity: 0;
    transition: all 1s ease 0s;
}

.report-box .treatment_medicine:hover .img-overlay::after {
    opacity: 1;
}

.report-box .add-to-cart {
    background-color: #444;
    border: none;
    text-transform: capitalize;
    border-radius: 200px;
    padding: .5rem 0;
}

.report-box .add-to-cart:hover {
    background-color: #222;
    border: none;
}

</style>
@endsection

@section('content')
<main id="main-container">
    <!-- Loader -->
    <div id="my-loader" class="layout-loader">
        <i class="fa fa-close"></i>
    </div>
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
                            <img class="img-thumbnail" src="{{ asset('dashboard/assets/download_1.jpeg') }}" alt="">
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
                            <h4 class="text-capitalize headStyle mb-5">Disease Name : <span class="dis_name">Cytice anything</span></h4>

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


@section('scripts')
<script>
    var pageLoader = document.getElementById('my-loader');
    window.onload = setTimeout(function () {

        pageLoader.classList.add('layout-hide');

    }, 3000);

</script>
@endsection
