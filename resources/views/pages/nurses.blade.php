@extends('layout.layout')
@section('code')
<title>Nurse</title>
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row align-items-center mb-4 g-3">
            <div class="col">
                <!-- start heading -->
                <div class="title mb-3 mb-sm-0">
                    <h1><span>Doctor/</span> Nurse</h1>
                    <h6 class="mb-0">Explore / filter / doctor or nurse</h6>
                </div>
                <!-- end heading -->
            </div>
            <div class="col-auto">
                <a href="doctor-nurse-list.html#search" data-bs-toggle="collapse">
                    <i class="bi bi-search btn btn-outline-secondary py-1 px-3" title="Search" data-bs-toggle="tooltip"></i>
                </a>
            </div>
            <div class="col-auto">
                <a href="doctor-nurse-add.html" class="btn btn-primary px-4 py-1 rounded-3"><i class="bi bi-plus-circle me-1"></i> Add Doctor / Nurse</a>
            </div>
            
            <!-- start search input -->
            <div class="col-12 collapse" id="search">
                <div class="input-group my-3 mb-md-0 bg-white p-3 rounded-4">
                    <input type="text" placeholder="Enter keyword..." class="form-control" aria-describedby="search"/>
                    <button class="btn btn-outline-secondary" type="button" id="search">Search</button>
                </div>
            </div>
            <!-- end search input -->
        </div>

        <!-- start doctor / nurse list -->
        <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span>
                            <!-- <span class="no-img bg-primary text-white rounded-circle">
                                AB
                            </span> -->
                            <h3 class="fs-5 mt-2 mb-3">Abu Bilal</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Doctor</span>
                            <small class="d-block mt-3">MBBS, Surgon</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Department</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Gastroenterology</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>iazad@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <span class="img">
                                <img src="../../assets/img/user-02.png" class="rounded-circle" alt="">
                            </span>
                            <!-- <span class="no-img bg-primary text-white rounded-circle">
                                AB
                            </span> -->
                            <h3 class="fs-5 mt-2 mb-3">Bilal Azad</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Doctor</span>
                            <small class="d-block mt-3">MBBS</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Department</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Orthopaedics</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>bilal@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <span class="img">
                                <img src="../../assets/img/user-03.png" class="rounded-circle" alt="">
                            </span>
                            <!-- <span class="no-img bg-primary text-white rounded-circle">
                                AB
                            </span> -->
                            <h3 class="fs-5 mt-2 mb-3">Mohammad</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Doctor</span>
                            <small class="d-block mt-3">MBBS</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Department</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Medicine</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>moh@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <span class="img">
                                <img src="../../assets/img/user-04.png" class="rounded-circle" alt="">
                            </span>
                            <!-- <span class="no-img bg-primary text-white rounded-circle">
                                AB
                            </span> -->
                            <h3 class="fs-5 mt-2 mb-3">Yusuf</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Doctor</span>
                            <small class="d-block mt-3">MBBS, Surgon</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Department</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Gastroenterology</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>xsd@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <!-- <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span> -->
                            <span class="no-img bg-info text-white rounded-circle">
                                HP
                            </span>
                            <h3 class="fs-5 mt-2 mb-3">Hena Parveen</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Nurse</span>
                            <small class="d-block mt-3">Assistant Nurse</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Shift</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Evening</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>hp@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <!-- <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span> -->
                            <span class="no-img bg-primary text-white rounded-circle">
                                AS
                            </span>
                            <h3 class="fs-5 mt-2 mb-3">Afsheen Shams</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Nurse</span>
                            <small class="d-block mt-3">Head Nurse</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Shift</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Morning</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>shams@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <!-- <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span> -->
                            <span class="no-img bg-success text-white rounded-circle">
                                HF
                            </span>
                            <h3 class="fs-5 mt-2 mb-3">Hafsha</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Nurse</span>
                            <small class="d-block mt-3">Head Nurse</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Shift</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Morning</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>hf@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> View Details</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Send Email</a>
                                    <a href="doctor-nurse-list.html#!" class="d-block text-decoration-none text-danger"><i class="bi bi-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            <!-- end options -->

                            <!-- <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span> -->
                            <span class="no-img bg-warning text-white rounded-circle">
                                HF
                            </span>
                            <h3 class="fs-5 mt-2 mb-3">Sara</h3>
                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">Nurse</span>
                            <small class="d-block mt-3">Nurse</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Shift</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>Morning</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Join Date</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>07-02-2021</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Mobile</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+91 000-000-0000</label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3 mb-sm-0">
                                    <span class="text-secondary">Email</span>
                                </div>
                                <div class="col-sm-8 text-sm-end mb-0 mb-sm-3">
                                    <label>sara@outlook.com</label>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card-footer mt-4">
                            <a href="doctor-nurse-profile.html" class="btn btn-outline-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end doctor / nurse list -->
    </div>
</section>
@endsection