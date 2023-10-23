@extends('layout.layout')
@section('code')

<title>Moderator</title>

<section class="right-side-content px-4 pt-5 pb-5">
    <div class="container-fluid">
        <!-- start title -->
        <div class="title mb-5">
            <div class="row align-items-end">
                <div class="col-sm">
                    <h1>Xush kelibsiz, <span>Moderator<span></h1>
                    <h6>Mana bugun Kasalxonangiz bilan nima sodir bo'lmoqda.</h6>
                </div>
                <div class="col-md-auto">
                    <label>Sana oralig'i:</label>
                    <input type="text" class="form-control py-1" id="predefined-js-daterangepicker">
                </div>
                <div class="col-md-auto mt-3 mt-md-0">
                    <a href="analytics/overview.html" class="btn btn-outline-primary px-4 py-1 me-3 mb-3 mb-sm-0"><i class="bi bi-bar-chart"></i> Hisobotlar</a>
                </div>
            </div>
        </div>
        <!-- end title -->

        <!-- start counter -->
        <div class="counter-card-bg">
            <div class="row">
                <div class="col-lg-6 col-xl-4 mb-3">
                    <div class="counter-card-item px-3 py-3">
                        <div class="row align-items-center">
                            <div class="col-sm-auto text-center text-sm-start">
                                <img src="{{ asset('img/custom-20.svg') }}" alt="" style="width: 120px;">

                            </div>
                            <div class="col-sm px-0 my-2 my-sm-0 text-center text-sm-start">
                                <div>
                                    <div class="text-uppercase">Jami Bemorlar</div>
                                    <div class="mb-0 fs-5 fw-bold" id="myTargetElement">0</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-3">
                    <div class="counter-card-item px-3 py-3">
                        <div class="row align-items-center">
                            <div class="col-sm-auto text-center text-sm-start">
                                <img src="{{ asset('img/custom-18.svg') }}" alt="" style="width: 120px;">
                            </div>
                            <div class="col-sm px-0 my-2 my-sm-0 text-center text-sm-start">
                                <div>
                                    <div class="text-uppercase">Jami Xodimlar</div>
                                    <div class="mb-0 fs-5 fw-bold">0</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-3">
                    <div class="counter-card-item px-3 py-3">
                        <div class="row align-items-center">
                            <div class="col-sm-auto text-center text-sm-start">
                                <img src="{{ asset('img/custom-19.svg') }}" alt="" style="width: 120px;">
                            </div>
                            <div class="col-sm px-0 my-2 my-sm-0 text-center text-sm-start">
                                <div>
                                    <div class="text-uppercase">Jami Temir daftarda</div>
                                    <div class="mb-0 fs-5 fw-bold">0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end counter -->

        <!-- start hospital statistics & revenue -->

        <!-- end hospital statistics & revenue -->

        <!-- start income vs expenses -->

        <!-- end income vs expenses -->

        <!-- start top department & new patients -->

        <!-- end top department & new patients -->

        <!-- start traffic channels -->
        <!-- end traffic channels -->
    </div>


    <!-- end content -->
    <section>
        <div class="row">
            <div class="col-xl-4 mt-4">
                <div class="shopping-cart-bg p-4 h-100">
                    <div class="shopping-cart-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Kasalxona Statistikasi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="shopping-cart-body">
                        <!-- item -->
                        <div class="shopping-cart-item p-3 mt-3">
                            <div class="row align-items-center">
                                <div class="col-7 pe-0">
                                    <h6>Bugungi tashriflar</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 73% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-5 text-end ps-0">

                                    <small><strong>0</strong></small>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="shopping-cart-item p-3 mt-3">
                            <div class="row align-items-center">
                                <div class="col-7 pe-0">
                                    <h6>Bemorlar</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 34%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-5 text-end ps-0">
                                    <small><strong>0</strong></small>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="shopping-cart-item p-3 mt-3">
                            <div class="row align-items-center">
                                <div class="col-7 pe-0">
                                    <h6>Shifokorlar</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 53%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-5 text-end ps-0">
                                    <span class="d-block fs-5">0</span>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="shopping-cart-item p-3 mt-3">
                            <div class="row align-items-center">
                                <div class="col-7 pe-0">
                                    <h6>Hamshiralar</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 43%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-5 text-end ps-0">
                                    <span class="d-block fs-5">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mt-4">
                <div class="col-xl-8 mt-5">
                    <div class="recent-purchases-bg p-4 h-100" style="width: 763px;margin-top: -48px;">
                        <div class="recent-purchases-header mb-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="mb-0">Yangi Bemorlar <a href="./patient/patient-list.html">Hammasini ko'rish</a></h2>
                                </div>
                                <div class="col-auto">
                                    <!-- start search -->
                                    <span data-bs-target="#searchInput" data-bs-toggle="collapse" class="pointer"><i class="bi bi-search" data-bs-toggle="tooltip" data-bs-placement="top" title="Search"></i></span>
                                    <!-- end search -->
                                </div>

                            </div>
                            <!-- start search input-->
                            <div class="col-12 collapse mt-2" id="searchInput">
                                <div class="search-bg p-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type keyword..." aria-label="search" aria-describedby="btn-search">
                                        <button class="btn btn-outline-primary" type="submit" id="btn-search">Qidirish</button>
                                    </div>
                                </div>
                            </div>
                            <!-- start search input-->
                        </div>
                        @foreach ($patients as $patient)
                        <div class="c">
                            <div class="custom-table-design-two">
                                <!-- item -->
                                <div class="table-design-two-item border rounded-3 p-3 mt-3">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm-6 col-lg pe-0 mb-1 mb-lg-0">
                                            <span>Bemor:</span>
                                            <a href="{{ route('patients.show', ['patient' => $patient->id ]) }}">
                                                <h6 class="mb-0">{{ $patient->username }}</h6>
                                            </a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg pe-0 mb-1 mb-lg-0">
                                            <span>Id:</span>
                                            <h6 class="mb-0">#{{ $patient->id }}456224</h6>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg pe-0 mb-1 mb-lg-0">
                                            <span>Telefon</span>
                                            <h6 class="mb-0">{{ $patient->phone }}</h6>
                                        </div>

                                    </div>
                                    <div class="action-btn">
                                        <a href="{{ route('patients.show', ['patient' => $patient->id ]) }}"><i class="bi bi-eye bg-success text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i></a>
                                        <a href="dashboard.html#!" class="ms-1"><i class="bi bi-trash bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></a>
                                    </div>
                                </div>
                                @endforeach




                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>

    </section>
    <!-- end hospital statistics & revenue -->

    <!-- start income vs expenses -->

    <!-- end income vs expenses -->

    <!-- start top department & new patients -->
    <section>
        <div class="row">
            <div class="col-xl-4 mt-5">
                <div class="product-stock-bg p-4 h-100">
                    <div class="product-stock-header mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="mb-0">Top Department</h2>
                            </div>
                            <div class="col-auto">
                                <!-- start search -->
                                <span data-bs-target="#searchInputThree" data-bs-toggle="collapse" class="pointer"><i class="bi bi-search" data-bs-toggle="tooltip" data-bs-placement="top" title="Search"></i></span>
                                <!-- end search -->
                            </div>
                            <div class="col-auto">
                                <!-- start filter -->
                                <div class="dropdown filter">
                                    <a class="dropdown-toggle" href="dashboard.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bi bi-filter" data-bs-toggle="tooltip" data-bs-placement="top" title="Filter"></i>
                                    </a>
                                    <div class="dropdown-menu mt-2 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" checked name="category" id="all">
                                            <label class="form-check-label" for="all">
                                                Top
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="low">
                                            <label class="form-check-label" for="low">
                                                Low
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="All">
                                            <label class="form-check-label" for="All">
                                                All
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- end filter -->
                            </div>
                        </div>
                        <!-- start search input-->
                        <div class="col-12 collapse mt-2" id="searchInputThree">
                            <div class="search-bg p-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type keyword..." aria-label="search" aria-describedby="btn-search">
                                    <button class="btn btn-outline-primary" type="submit" id="btn-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- start search input-->
                    </div>
                    <div class="product-stock-body">
                        <div class="custom-table-design-one">
                            <!-- item -->
                            <div class="table-design-one-item border rounded-3 p-3 px-3 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-8 col-lg mb-1 pe-0 mb-lg-0">
                                        <a href="dashboard.html#!" class="link">
                                            <span>Department</span>
                                            <h6 class="mb-0">Anesthesiology</h6>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-auto text-end">
                                        <span>Appointment:</span>
                                        <h6 class="mb-0">31</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="table-design-one-item border rounded-3 p-3 px-3 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-8 col-lg mb-1 pe-0 mb-lg-0">
                                        <a href="dashboard.html#!" class="link">
                                            <span>Department</span>
                                            <h6 class="mb-0">Cardiology</h6>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-auto text-end">
                                        <span>Appointment:</span>
                                        <h6 class="mb-0">64</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="table-design-one-item border rounded-3 p-3 px-3 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-8 col-lg mb-1 pe-0 mb-lg-0">
                                        <a href="dashboard.html#!" class="link">
                                            <span>Department</span>
                                            <h6 class="mb-0">Dermatology</h6>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-auto text-end">
                                        <span>Appointment:</span>
                                        <h6 class="mb-0">123</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="table-design-one-item border rounded-3 p-3 px-3 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-8 col-lg mb-1 pe-0 mb-lg-0">
                                        <a href="dashboard.html#!" class="link">
                                            <span>Department</span>
                                            <h6 class="mb-0">Gastroenterology</h6>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-auto text-end">
                                        <span>Appointment:</span>
                                        <h6 class="mb-0">43</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- item -->
                            <div class="table-design-one-item border rounded-3 p-3 px-3 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-8 col-lg mb-1 pe-0 mb-lg-0">
                                        <a href="dashboard.html#!" class="link">
                                            <span>Department</span>
                                            <h6 class="mb-0">Gynaecology</h6>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-auto text-end">
                                        <span>Appointment:</span>
                                        <h6 class="mb-0">23</h6>
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
    </section>
    <!-- end top department & new patients -->

    <!-- start traffic channels -->
    <!-- end traffic channels -->
    </div>
</section>
@endsection