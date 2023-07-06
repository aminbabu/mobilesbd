@extends('frontend.layouts.app')

@section('title', 'Single Service Center')

@section('content')

    <!-- breadcrumb start -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 py-2 px-3 bg-white border" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="index.html" class="text-decoration-none" itemprop="item">Home</a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="showrooms.html" class="text-decoration-none" itemprop="item">Service Centers</a>
                <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="item">Ayaan Motors</span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </nav>
    <!-- breadcrumb end -->

    <!-- query sercice center start -->
    <section class="query-service-centers cbg-white mb-2">
        <div class="header bg-white border border-bottom px-3 py-2">
            <h2 class="fw-bold h6 mb-0">Search for Service Centers</h2>
        </div>
        <div class="service-center border px-3 py-2">
            <div class="select-boxes">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Location</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Gazipu">Gazipur</option>
                </select>

                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>
    </section>
    <!-- query sercice center end -->

    <!-- Related service centers start -->
    <div class="showroom-details-wrapper mt-2">
        <!-- particular showroom start -->
        <section class="service-center border mb-2">
            <div class="header bg-white border-bottom px-3 py-2">
                <h2 class="fw-bold h6 mb-0">Ayaan Motors</h2>
            </div>

            <div class="showroom-body px-3 py-2 cbg-white">
                <div class="showroom-feature-img">
                    <img src="https://images.pexels.com/photos/6278771/pexels-photo-6278771.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Phone" />
                </div>
                <div class="showroom-details-text">
                    <h2 class="m-0">Ayaan Motors</h2>
                    <span>Bagerhat</span>

                    <p class="my-3">
                        Ayaan Motors is a trusted organization for Sales, Services,
                        Spare Parts of Yamaha motorcycle brands in Khanka Sharif Mor,
                        Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharid
                        below. So you can call or get services from them within that
                        time.
                    </p>
                    <p class="my-3">
                        Ayaan Motors is a trusted organization for Sales, Services,
                        Spare Parts of Yamaha motorcycle brands in Khanka Sharif Mor,
                        Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can motorcycle brands in Khanka Sharif
                        Mor, Main Road, Bagerhat, Bangladesh. Their service hours are
                        listed below. So you can call or get services from them within
                        that time.
                    </p>

                    <div class="row service-addr mt-5">
                        <div class="col-12 col-md-6">
                            <div class="contact-details">
                                <ul class="contact-details-body m-0 px-3 py-2">
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Address:</span>
                                            <span class="text">Khanka Sharif Mor, Main Road Bagerhat</span>
                                        </div>
                                    </li>
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="fas fa-mobile"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Phone:</span>
                                            <span class="text">+880 1730 629176</span>
                                        </div>
                                    </li>
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Brands:</span>
                                            <span class="text">
                                                <img src="images/amazon.jpg" alt="Amazon" class="img-fluid" />
                                            </span>
                                        </div>
                                    </li>
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="far fa-share-square"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Socials:</span>
                                            <a href="#" class="text text-decoration-none">
                                                Facebook
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="contact-details">
                                <ul class="contact-details-body m-0 px-3 py-2">
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="fab fa-servicestack"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Service:</span>
                                            <span class="text">Sales, Services, Spare Parts</span>
                                        </div>
                                    </li>
                                    <li class="info d-flex mb-3">
                                        <div class="icon">
                                            <i class="fas fa-door-open"></i>
                                        </div>
                                        <div class="text ms-3">
                                            <span class="mb-1 d-block h5 fw-bold">Open Hours:</span>
                                            <span class="text d-block">
                                                <strong>Saturday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Sunday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Monday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Tuesday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Wednesday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Thursday:</strong> 10:00am to 08:00pm
                                            </span>
                                            <span class="text d-block">
                                                <strong>Friday:</strong> Closed
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="total-search text-center mt-3">
                        <strong>Total Search: </strong>
                        2629
                    </div>
                </div>
            </div>
        </section>
        <!-- particular showroom end -->

        <!-- filtered service centeres start -->
        <section class="filtered-service-centere mb-2">
            <div class="header bg-white border border-bottom px-3 py-2 d-flex align-items-center justify-content-between">
                <h2 class="fw-bold h6 mb-0">Service Centers</h2>
                <div class="choose-type">
                    <select class="form-select border-0 py-0">
                        <option selected>Select Type</option>
                        <option value="Dhaka">Mobile</option>
                        <option value="Pabna">Camera</option>
                        <option value="Rajshahi">Tablet</option>
                        <option value="Gazipu">Computer</option>
                    </select>
                </div>
            </div>

            <div class="service-center-tbls border product-specs-tbl cbg-white px-3 py-2">
                <div class="specs-group mb-3">
                    <table class="table m-0">
                        <thead class="text-center">
                            <tr>
                                <th>Service Center Name</th>
                                <th>Location</th>
                                <th>Full Information</th>
                            </tr>
                        </thead>
                        <tbody class="border-0">
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Authorized Mi Store (Showroom)</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Authorized Mi Store (Showroom)</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Authorized Mi Store (Showroom)</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mi Service Center</td>
                                <td>Dhaka</td>
                                <td>
                                    <a href="single-service-center.html" class="text-decoration-none">Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Brand Pagination">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- filtered service centeres end -->
    </div>
    <!-- Related service centers end -->
@endsection
