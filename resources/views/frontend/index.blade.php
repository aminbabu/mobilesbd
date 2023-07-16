@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
<!-- mobile's queries section start -->
<section class="mobile-queries mb-2">
    <div class="row g-2 gy-lg-0">
        <div class="col-12 col-lg-8">
            <div class="find-a-mobile bg-white border p-3 h-100">
                <h2 class="find-a-mobile-head h2 text-uppercase mb-3 text-center fw-bold">
                    lets find a mobile
                </h2>
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- multi range slider start -->
                        <div class="price-range-slider" data-slider-min="0" data-slider-max="500000"
                            data-slider-step="5000" data-slider-value="[5000,120000]"></div>

                        <div class="price-range-input">
                            <div>
                                <input type="number" name="minPrice" step="500" id="minPrice" value="5000"
                                    class="form-control" />
                            </div>
                            <div>
                                <input type="number" name="maxPrice" step="500" value="120000" id="maxPrice"
                                    class="form-control" />
                            </div>
                        </div>
                        <!-- multi range slider end -->
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="find-mobile-select">
                            <select class="nice-select wide small">
                                <option value="0" selected>Select 0</option>
                                <option value="1">Select 1</option>
                                <option value="2">Select 2</option>
                                <option value="3">Select 3</option>
                            </select>
                        </div>
                        <div class="find-mobile-select">
                            <select class="nice-select wide small">
                                <option value="0" selected>Select 0</option>
                                <option value="1">Select 1</option>
                                <option value="2">Select 2</option>
                                <option value="3">Select 3</option>
                            </select>
                        </div>
                        <div class="find-mobile-select">
                            <select class="nice-select wide small">
                                <option value="0" selected>Select 0</option>
                                <option value="1">Select 1</option>
                                <option value="2">Select 2</option>
                                <option value="3">Select 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="find-a-mobile-btn text-white text-uppercase border-0 w-50 text-bold py-2 h6 text-center rounded d-block mx-auto">
                    Find products <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <aside class="brand-wrapper bg-white position-relative border h-100">
                <!-- Top 10 -->
                <div class="sidebar-products-wrapper pb-2">
                    <ul class="products reboot-list">
                        <div class="header bg-white px-3 pt-2 pb-1">
                            <h2 class="fw-bold h6 mb-0">
                                <a href="#" class="text-decoration-none link-dark">Best 5G Phones under 15000</a>
                            </h2>
                        </div>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="products reboot-list">
                        <div class="header bg-white px-3 pt-2 pb-1">
                            <h2 class="fw-bold h6 mb-0">
                                <a href="#" class="text-decoration-none link-dark">Best 5G Phones under
                                    15000</a>
                            </h2>
                        </div>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="products reboot-list">
                        <div class="header bg-white px-3 pt-2 pb-1">
                            <h2 class="fw-bold h6 mb-0">
                                <a href="#" class="text-decoration-none link-dark">Best 5G Phones under
                                    15000</a>
                            </h2>
                        </div>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="my-1 mx-2">
                            <div class="product-box position-relative bg-white card border product-card">
                                <div
                                    class="product-scor bg-worning text-center position-absolute end-0 top-50 translate-middle">
                                    <span class="scor-number">70%</span>
                                    <span class="scor-text">SPEC SCORE</span>
                                </div>
                                <a href="single-product.html" title="Apple iPhone 13 Pro Max"
                                    class="d-flex overflow-hidden" tabindex="0">
                                    <div class="product-thumb bg-white">
                                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}"
                                            alt="iPhone 13 Mini" class="img-fluid product-img" />
                                    </div>
                                    <div class="product-item-meta px-2 py-1">
                                        <h3 class="product-title">
                                            Apple iPhone 13 Pro Max
                                        </h3>
                                        <span class="product-price text-bold">৳ 79,999</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- under 10k end -->

                <!-- arrow start -->
                <div class="arrows">
                    <i class="fa fa-angle-left position-absolute top-50 translate-middle rounded-circle border-secondary slick-arrow slick-disabled"
                        aria-disabled="true"></i>
                    <i class="fa fa-angle-right position-absolute top-50 translate-middle rounded-circle border p-2 border-secondary bg-light text-center slick-arrow"
                        aria-disabled="false"></i>
                </div>
                <!-- arrow end -->
            </aside>
        </div>
    </div>
</section>
<!-- mobile's queries section end -->

<!-- Latest Mobiles Start -->
<section class="product-slider mb-2 border">
    <div class="product-slider-header bg-white border-bottom px-3 py-2">
        <div class="row">
            <div class="col-7">
                <h2 class="fw-bold mb-0 h6">Latest Mobiles</h2>
            </div>
            <div class="col-5 text-end">
                <a href="price-list.html" class="text-decoration-none text-dark">
                    View More <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="product-slider-gallery-wrapper p-2 py-1 cbg-white position-relative">
        <ul class="product-slider-gallery products reboot-list">
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
        </ul>
        <div class="arrows">
            <i class="fa fa-angle-left position-absolute top-50 translate-middle rounded-circle border-secondary"
                aria-hidden="true"></i>
            <i class="fa fa-angle-right position-absolute top-50 translate-middle rounded-circle border p-2 border-secondary bg-light text-center"
                aria-hidden="true"></i>
        </div>
    </div>
</section>
<!-- Latest Mobiles End -->

<!-- Latest News & Reviews Start -->
<section class="product-slider mb-2 border">
    <div class="product-slider-header bg-white border-bottom px-3 py-2">
        <div class="row">
            <div class="col-7">
                <h2 class="fw-bold h6 mb-0">Latest News & Reviews</h2>
            </div>
            <div class="col-5 text-end">
                <a href="#" class="text-decoration-none text-dark">
                    View More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="reviews-gallery-wrapper p-2 py-1 cbg-white position-relative">
        <ul class="items-reviews-gallery mbd-scollbar p-0 m-0">
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>
                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>
                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single-review.html" class="review-card text-decoration-none d-block border rounded m-2">
                    <div class="review-card-img">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset('frontend/images/news.jpg') }}" alt="News" />
                        </div>
                        <div class="review-meta">
                            <span href="#" class="author text-decoration-none">by Mezbah</span>
                            <span href="#" class="date text-decoration-none">Nov 23, 2021
                            </span>
                        </div>
                    </div>

                    <div class="review-body p-2">
                        <h2 class="h6">Samsung Galaxy S10 Full Review</h2>
                        <p class="line-clamp mb-2">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Cum eveniet ea, quaerat aliquam error incidunt obcaecati
                            tempora. Nesciunt delectus, dolores temporibus officia ea
                            esse provident recusandae atque incidunt quaerat voluptas!
                        </p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- Latest News & Reviews End -->

<!-- Upcoming Mobiles Start -->
<section class="product-slider mb-2 border">
    <div class="product-slider-header bg-white border-bottom px-3 py-2">
        <div class="row">
            <div class="col-7">
                <h2 class="fw-bold h6 mb-0">Upcoming Mobiles</h2>
            </div>
            <div class="col-5 text-end">
                <a href="price-list.html" class="text-decoration-none text-dark">
                    View More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="upcoming-product-gallery-wrapper p-2 py-1 cbg-white position-relative">
        <ul class="upcoming-product-gallery products reboot-list">
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="product-box bg-white card product-card m-2">
                    <div class="product-scor bg-worning">
                        <span class="scor-number">70%</span>
                        <span class="scor-text">SPEC SCORE</span>
                    </div>
                    <a href="single-product.html" title="Realme GT Master Edtions"
                        class="d-inline-block overflow-hidden">
                        <div class="product-thumb bg-white">
                            <img src="{{ asset('frontend/images/realmegt.png') }}" alt="iPhone 13 Mini"
                                class="img-fluid product-img" />
                        </div>
                        <div class="product-item-meta px-2 py-1">
                            <h2 class="product-title mb-1">
                                Realme GT Master Edtions
                            </h2>
                            <span class="product-price text-bold">৳ 32,999</span>
                        </div>
                        <span class="btn border-top d-block p-1 rounded-0">View Details</span>
                    </a>
                </div>
            </li>
        </ul>
        <div class="arrows">
            <i class="fa fa-angle-left position-absolute top-50 translate-middle rounded-circle border-secondary"
                aria-hidden="true"></i>
            <i class="fa fa-angle-right position-absolute top-50 translate-middle rounded-circle border p-2 border-secondary bg-light text-center"
                aria-hidden="true"></i>
        </div>
    </div>
</section>
<!-- Upcoming Mobiles End -->

<!-- Popular Brands Start -->
<section class="hbrands mb-2 border">
    <div class="product-slider-header bg-white border-bottom px-3 py-2">
        <div class="row">
            <div class="col-6">
                <h2 class="fw-bold h6 mb-0">Popular Brands</h2>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="text-decoration-none text-dark">
                    View More
                    <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="p-2 cbg-white">
        <ul class="brand-list mbd-scollbar p-0 m-0 cbg-white">
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
            <li class="brand-list-item text-center border">
                <a href="brands.html" class="list-item-link d-block position-relative">
                    <div class="img-wrapper">
                        <img src="{{ asset('frontend/images/gionee.jpg') }}" alt="Xiaomi logo" />
                    </div>
                    <h3 class="h6 m-0 title">Gionee</h3>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- Popular Brands End -->

<!-- Latest Compare Start -->
<section class="product-slider border">
    <div class="product-slider-header bg-white border-bottom px-3 py-2">
        <div class="row">
            <div class="col-6">
                <h2 class="fw-bold h6 mb-0">Latest Comparision</h2>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="text-decoration-none text-dark">
                    View More <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="reviews-gallery-wrapper cbg-white position-relative px-2 py-1">
        <ul class="items-reviews-gallery reboot-list mbd-scollbar m-0">
            <li class="card product-card review-card bg-white pt-2 m-2">
                <div class="product-img-wrapper d-flex align-items-center justify-content-evenly">
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>

                    <a class="vs btn btn-light border-secondary text-decoration-none d-flex align-items-center justify-content-center rounded-circle"
                        href="#">vs</a>
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>
                </div>
                <div class="card-body p-2">
                    <h5 class="card-title text-center">
                        <a class="text-decoration-none" href="#" target="_blank" title="iPhone 13 Mini"><span>One
                                Plus</span> VS <span>iPhone</span></a>
                    </h5>
                </div>
            </li>
            <li class="card product-card review-card bg-white pt-2 m-2">
                <div class="product-img-wrapper d-flex align-items-center justify-content-evenly">
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>

                    <a class="vs btn btn-light border-secondary text-decoration-none d-flex align-items-center justify-content-center rounded-circle"
                        href="#">vs</a>
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>
                </div>
                <div class="card-body p-2">
                    <h5 class="card-title text-center">
                        <a class="text-decoration-none" href="#" target="_blank" title="iPhone 13 Mini"><span>One
                                Plus</span> VS <span>iPhone</span></a>
                    </h5>
                </div>
            </li>
            <li class="card product-card review-card bg-white pt-2 m-2">
                <div class="product-img-wrapper d-flex align-items-center justify-content-evenly">
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>

                    <a class="vs btn btn-light border-secondary text-decoration-none d-flex align-items-center justify-content-center rounded-circle"
                        href="#">vs</a>
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>
                </div>
                <div class="card-body p-2">
                    <h5 class="card-title text-center">
                        <a class="text-decoration-none" href="#" target="_blank" title="iPhone 13 Mini"><span>One
                                Plus</span> VS <span>iPhone</span></a>
                    </h5>
                </div>
            </li>
            <li class="card product-card review-card bg-white pt-2 m-2">
                <div class="product-img-wrapper d-flex align-items-center justify-content-evenly">
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>

                    <a class="vs btn btn-light border-secondary text-decoration-none d-flex align-items-center justify-content-center rounded-circle"
                        href="#">vs</a>
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>
                </div>
                <div class="card-body p-2">
                    <h5 class="card-title text-center">
                        <a class="text-decoration-none" href="#" target="_blank" title="iPhone 13 Mini"><span>One
                                Plus</span> VS <span>iPhone</span></a>
                    </h5>
                </div>
            </li>
            <li class="card product-card review-card bg-white pt-2 m-2">
                <div class="product-img-wrapper d-flex align-items-center justify-content-evenly">
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>

                    <a class="vs btn btn-light border-secondary text-decoration-none d-flex align-items-center justify-content-center rounded-circle"
                        href="#">vs</a>
                    <a href="#" target="_blank"
                        class="flex-grow-1 d-inline-flex align-items-center justify-content-center overflow-hidden">
                        <img src="{{ asset('frontend/images/Apple-iPhone-13-Mini-image.jpg') }}" alt="iPhone 13 Mini"
                            class="img-fluid product-img" />
                    </a>
                </div>
                <div class="card-body p-2">
                    <h5 class="card-title text-center">
                        <a class="text-decoration-none" href="#" target="_blank" title="iPhone 13 Mini"><span>One
                                Plus</span> VS <span>iPhone</span></a>
                    </h5>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- Latest Compare End -->
@endsection