@extends('layout.layout')
@section('code')
    
<title>Patient</title>
<link rel="stylesheet" href="{{ URL::asset('css/tom-select.bootstrap5.min.css') }}">

<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- start title -->
                <div class="title mb-4 pb-2">
                    <div class="row align-items-end">
                        <div class="col-sm">
                            <h1 class="mb-1">{{ $patient->username }}</h1>
                            <h6 class="mb-md-0">Patient Id <span class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">#{{ $patient->id}}639</span></h6>
                        </div>
                      
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="col-lg-8 col-xl-9">
                <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
                    <!-- start nav -->
                    <ul class="nav horizontal-pills-tab nav-pills rounded-6 px-3 pt-3 pb-2" role="tablist">
                        <li class="nav-item mb-2">
                            <a class="nav-link px-4 fs-6 active" id="nav-personal-information-tab" href="patient-profile.html#nav-personal-information" data-bs-toggle="pill" data-bs-target="#nav-personal-information" role="tab" aria-controls="nav-personal-information" aria-selected="false">Shaxsiy ma'lumotlar</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link px-4 fs-6" id="nav-diagnosis-tab" href="patient-profile.html#nav-diagnosis" data-bs-toggle="pill" data-bs-target="#nav-diagnosis" role="tab" aria-controls="nav-diagnosis" aria-selected="false">Tashxis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fs-6" id="nav-prescription-tab" href="patient-profile.html#nav-personal" data-bs-toggle="pill" data-bs-target="#nav-prescription" role="tab" aria-controls="nav-prescription" aria-selected="false">Retsept</a>
                        </li>
                    </ul>
                    <!-- end nav -->

                    <!-- start tab content -->
                    <div class="tab-content mt-4">
                        <!-- personal information -->
                        <div class="tab-pane fade show active" id="nav-personal-information" role="tabpanel" aria-labelledby="nav-personal-information-tab">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="fs-6 mb-0">Personal Information</h2>
                                        <small>Patients personal information.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row px-sm-3 py-2 py-sm-4 border rounded mx-0">
                                <div class="col-xl-6 pe-xl-4">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Ism</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->username }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Yoshi</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">28 yosh</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Tug'ilgan sanasi</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->date }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <span>Qon guruhi</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->blood }}</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <span>Rh faktor</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->factor }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 ps-xl-4 mt-3 mt-xl-0">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Jins</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->Gender }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Mobil</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">+998 {{ $patient->phone }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Bemor ID</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">#{{ $patient->id }}639</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-sm-6">
                                            <span>Manzil</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->address}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row px-sm-3 py-2 py-sm-4 border rounded mx-0 mt-3">
                                <div class="col-12 mb-3 border-bottom">
                                    <h3 class="fs-6">Qo'shimcha ma'lumot</h3>
                                </div>
                                <div class="col-xl-6 pe-xl-4">
                                  
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <span>Mamlakat</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">O'zbekiston</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 ps-xl-4 mt-3 mt-xl-0">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <span>Millati</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->nationality }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          
                        </div>

                        <!-- diagnosis -->
                        <div class="tab-pane fade" id="nav-diagnosis" role="tabpanel" aria-labelledby="nav-diagnosis-tab">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="fs-6 mb-0">Diagnostika</h2>
                                        <small>Bu bo'limda bemorning tashxislari haqida ma'lumot mavjud.</small>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="overview-box-body">
                                <!-- start table -->
                                <div class="default-table-design-one">
                                    <div class="table-responsive">
                                        <table class="table table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Hisobot turi</th>
                                                    <th>Sana</th>
                                                    <th>Ta'rif</th>
                                                    <th>Holati</th>
                                                    <th>Amallar</th>
                                                </tr>
                                            </thead>
                        
                                            <tbody>
                                                @foreach ($diagnoses as $diagnos)
                                                    <tr>
                                                        <td>
                                                            {{ $diagnos->type }}
                                                        </td>
                                                        <td>{{ $diagnos->created_at }}</td>
                                                        <td>
                                                            {{ $diagnos->des }}
                                                        </td>
                                                        <td><span class="bg-warning text-warning bg-opacity-10 px-2 py-1 rounded-4">Kutilmoqda</span></td>
                                                        <td>
                                                            <div class="action-btn">
                                                                <a href="patient-profile.html#addDiagnosis" data-bs-toggle="modal" class="ms-1"><i class="bi bi-pencil bg-success text-white"
                                                                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Tahrirlash"></i></a>
                                                                <a href="patient-profile.html#!" class="ms-1"><i class="bi bi-cloud-download bg-primary text-white"
                                                                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Yuklab olish"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end table -->
                            </div>
                        </div>

                        <!-- prescription -->
                        <div class="tab-pane fade" id="nav-prescription" role="tabpanel" aria-labelledby="nav-prescription-tab">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="fs-6 mb-0">Reseptlar bo'yicha ma'lumotlar</h2>
                                        <small>Bemorning retsept bo'yicha ma'lumotlari.</small>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="overview-box-body">
                                <!-- start table -->
                                <div class="default-table-design-one">
                                    <div class="table-responsive">
                                        <table class="table table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Dori</th>
                                                    <th>Dori turi</th>
                                                    <th>Miqdori</th>
                                                    <th>Yo'riqnoma</th>
                                                    <th>Tibbiyot xodimi tomonidan buyurilgan</th>
                                                    <th>Holati</th>
                                                    <th>Amallar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patients as $patient)
                                                    @foreach ($patient->resepts as $resept)
                                                        <tr>
                                                            <td>
                                                                {{ $resept->medicine }}
                                                            </td>
                                                            <td>{{ $resept->category }}</td>
                                                            <td>{{ $resept->dosage }}</td>
                                                            <td>
                                                                {{ $resept->des  }}
                                                            </td>
                                                            <td>Abdurakhimov Bekzod Anvarovich</td>
                                                            <td><span class="bg-success text-success bg-opacity-10 px-2 py-1 rounded-4">Faol</span></td>
                                                            <td>
                                                                <div class="action-btn">
                                                                    <a href="patient-profile.html#prescription" data-bs-toggle="modal" class="ms-1"><i class="bi bi-pencil bg-success text-white"
                                                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tahrirlash"></i></a>
                                                                    <a href="patient-profile.html#!" class="ms-1"><i class="bi bi-trash bg-danger text-white"
                                                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="O'chirish"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end table -->
                            </div>
                        
                            <!-- start prescription modal -->
                            <!-- end prescription modal -->
                        </div>

                        

                   
                    </div>
                    <!-- end tab content -->
                </div>
            </div>

            <div class="col-lg-4 col-xl-3 mt-4 mt-lg-0">
                <div class="bg-white p-4 rounded-12 custom-shadow-md">
                    <div class="text-center mt-3 border-bottom pb-4">
                        <span class="avatar avatar-xxl bg-primary text-white">
                            <span class="avatar-initials fs-2">AB</span>
                        </span>
                        <h2 class="fs-5 mt-3 mb-1">{{ auth()->user()->username }}</h2>
                        <span class="text-secondary">+998 {{ $patient->phone }}</span>
                    </div>

                    <div class="mt-4 border-bottom pb-4">
                        <h6 class="fs-7 fw-normal text-secondary">Condition</h6>
                        <h5 class="fs-7"><span class="border border-success text-success px-3 py-1 rounded-4">Normal</span></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection