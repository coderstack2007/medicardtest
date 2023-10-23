@extends('layout.layout')
@section('code')


<style>
    .but 
    {  
  
    color: white;
    border: none;
    text-align: center;
    border-radius: 4px;
    padding: 2px 7px;
    }
</style>
<title>Patient {{ $patient->username }}</title>
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- start title -->
                <div class="title mb-4 pb-2">
                    <div class="row align-items-end">
                        <div class="col-sm">
                            <h1 class="mb-1">{{ $patient->username  }}</h1>
                            <h6 class="mb-md-0">Patient Id <span class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">#{{ $patient->id }}3639</span></h6>
                        </div>
                        <div class="col-md-auto mt-3 mt-md-0">
                            <a href="patient-list.html" class="btn btn-outline-primary px-4 py-1 mb-3 mb-sm-0">Back to patient table</a>
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
                                        <h2 class="fs-6 mb-0">Shaxsiy ma'lumotlar</h2>
                                        <small>Bemorning shaxsiy ma'lumotlari.</small>
                                    </div>
                                    <div class="col-auto"><a href="patient-profile.html#editPersonalInformation" data-bs-toggle="modal"><i class="bi bi-pencil fs-5" title="Tahrirlash" data-bs-toggle="tooltip"></i></a></div>
                                </div>
                            </div>

                            <div class="row px-sm-3 py-2 py-sm-4 border rounded mx-0">
                                <div class="col-xl-6 pe-xl-4">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Ism</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->username  }}</label>         
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Yoshi</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">28 yil</label>
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
                                            <span>rh faktor</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->factor }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 ps-xl-4 mt-3 mt-xl-0">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Jinsi</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->Gender }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Mobil telefon</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->phone }}</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-sm-6">
                                            <span>Bemor ID</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">#{{ $patient->id }}344</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center ">
                                        <div class="col-sm-6">
                                            <span>Manzil</span>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <label class="fw-bold">{{ $patient->address }}</label>
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
                                        <h2 class="fs-6 mb-0">Tashxis ma'lumotlari</h2>
                                        <small>Bemorning tashxis ma'lumotlari.</small>
                                    </div>
                                    @if(auth()->user()->type == 'doctor')
                                        <div class="col-auto"><a href="patient-profile.html#addDiagnosis" data-bs-toggle="modal"><i class="bi bi-plus-lg bg-primary px-3 py-2 text-white rounded" title="Qo'shish" data-bs-toggle="tooltip"></i></a></div>
                                    @endif
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
                                                    <th>Tavsif</th>
                                                x`
                                                    @if(auth()->user()->type == 'doctor')
                                                        <th>Amallar</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patient->diagnoses as $diagnos)
                                                
                                                
                                                    <tr>
                                                        <td>
                                                            {{ $diagnos->type }}
                                                        </td>
                                                        <td>{{ $diagnos->created_at }}</td>
                                                        <td>
                                                            {{ $diagnos->des }}
                                                        </td>
                                                        <td>
                                                            @if(auth()->user()->type == 'doctor')
                                                                <div class="action-btn" style="display: flex">
                                                                    <a href="patient-profile.html#editdiagnos" data-bs-toggle="modal" class="ms-1"><i class="bi bi-pencil bg-success text-white"
                                                                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tahrirlash"></i></a>
                                                                                                    
                                                                    <form action="{{ route('deletediagnos', $diagnos->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button  type="submit" class="but bg-danger"><i class="bi bi-trash bg-danger text-white"
                                                                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="O'chirish"></i></button>
                                                                        </form>
                                                                </div>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end table -->
                            
                                                         
                            </div>

                            <!-- start personal information modal -->
                            <div class="modal fade" id="editdiagnos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDiagnosisLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 addDiagnosis-modal">
                                    <div class="modal-content vh-100 rounded-0">
                                        <div class="modal-header d-block px-4 px-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="modal-title" id="">Tashxis ma'lumotlari</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body p-4 p-sm-5">
                                            <div class="row">
                                                <form action="{{ route('updatediagnos', ['id' => $patient->id]) }}" method="POST">
                                                    @csrf
                                                    @method('PUT');
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Hisobot turi</label>
                                                        <input name="type" type="text" placeholder="Hisobot turi" class="form-control">
                                                    </div>
                                                   
                                                    <div class="col-sm-12">
                                                        <label class="fw-bold" for="">Tavsif</label>
                                                        <textarea name="des" id="diagnosisDescription" rows="3" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                             
                                                        <input name="user_id" type="hidden" value="{{ $user->id }}" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                          
                                                        <input name="patient_id" type="hidden" value="{{ $patient->id }}" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary w-100" type="submit">Tahrirlash</button>
                                                </form>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="addDiagnosis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addDiagnosisLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 addDiagnosis-modal">
                                    <div class="modal-content vh-100 rounded-0">
                                        <div class="modal-header d-block px-4 px-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="modal-title" id="addDiagnosisLabel">Tashhis ma'lumotlari</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body p-4 p-sm-5">
                                            <div class="row">
                                                <form action="{{ route('diagnos' ) }}" method="POST">
                                                    @csrf
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Hisobot turi</label>
                                                        <input name="type" type="text" placeholder="Hisobot turi" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Hisobot turi</label>
                                                        <input name="status" type="text" placeholder="Hisobot turi" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label class="fw-bold" for="">Tavsif</label>
                                                        <textarea name="des" id="diagnosisDescription" rows="3" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                             
                                                        <input name="user_id" type="hidden" value="{{ $user->id }}" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                          
                                                        <input name="patient_id" type="hidden" value="{{ $patient->id }}" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary w-100" type="submit">Qo'shish</button>
                                                </form>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <!-- end personal information modal -->
                        </div>

                        <!-- prescription -->
                        <div class="tab-pane fade" id="nav-prescription" role="tabpanel" aria-labelledby="nav-prescription-tab">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="fs-6 mb-0">Prescription Information</h2>
                                        <small>Patients prescription information.</small>
                                    </div>
                                    @if(auth()->user()->type == 'doctor')
                                        <div class="col-auto"><a href="patient-profile.html#prescription" data-bs-toggle="modal"><i class="bi bi-plus-lg bg-primary px-3 py-2 text-white rounded" title="Add" data-bs-toggle="tooltip"></i></a></div>
                                    @endif
                                </div>
                            </div>

                            <div class="default-table-design-one">
                                <div class="table-responsive">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th>Dori vositasi</th>
                                                <th>Dori vositasi toifasi</th>
                                                <th>Doza</th>
                                                <th>Ko'rsatma</th>
                                                <th>Tayinlovchi</th>
                                           
                                                @if(auth()->user()->type == 'doctor')  
                                                    <th>Amallar</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($patient->resepts as $resept)
                                            <tr>
                                                <td>
                                                    {{ $resept->medicine }}
                                                </td>
                                                <td>{{ $resept->category }}</td>
                                                <td>{{  $resept->dosage  }} </td>
                                                <td>
                                                    {{ $resept->des }}
                                                </td>
                                           
                                                <td>
                                                    @if(auth()->user()->type == 'doctor')
                                                        <div class="action-btn" style="display: flex;">
                                                            <a href="patient-profile.html#prescriptions" data-bs-toggle="modal" style="margin: 0 5px;" class="ms-1"><i class="bi bi-pencil bg-success text-white"
                                                                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tahrirlash"></i></a>
                                                            <form action="{{ route('deleteresept', $resept->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button  type="submit" class="but bg-danger"><i class="bi bi-trash bg-danger text-white"
                                                                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="O'chirish"></i></button>
                                                                </form>
                            
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        
                                              @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal fade" id="prescriptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="prescriptionLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 prescription-modal">
                                    <div class="modal-content vh-100 rounded-0">
                                        <div class="modal-header d-block px-4 px-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="modal-title" id="prescriptionLabel">Prescriptions Edit</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="prescriptions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="prescriptionLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 prescription-modal">
                                                <div class="modal-content vh-100 rounded-0">
                                                    <div class="modal-header d-block px-4 px-sm-5">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5 class="modal-title" id="prescriptionLabel">Retseptlarni tahrirlash</h5>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body p-4 p-sm-5">
                                                        <div class="row">
                                                          
                                                            <form action="{{ route('updateresepts', ['id' => $patient->id]) }}" method="POST" >
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="fw-bold">Dori vositasi toifasi</label>
                                                                    <input type="text" name="category" class="form-control">
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="fw-bold">Dori vositasi</label>
                                                                    <input type="text"  name="medicine" value=" " class="form-control" />
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="fw-bold" for="">Doza</label>
                                                                    <input type="text" value=" " name="dosage"  class="form-control" />
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="fw-bold">Tayinlovchi</label>
                                                                    <input type="text"  name="prescribed" value="" class="form-control" />  
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="fw-bold" for="">Tavsif</label>
                                                                    <textarea name="des" value=""  id="prescriptionDescription" rows="3" class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                                         
                                                                    <input name="user_id" type="hidden" value="{{ $user->id }}" class="form-control">
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                                      
                                                                    <input name="patient_id" type="hidden" value="{{ $patient->id }}" class="form-control">
                                                                </div>
                                                                <button type="submit"  class="btn btn-primary w-100" type="submit">Tahrirlash</button>
                                                            </form>
                                                         
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- start prescription modal -->
                            <div class="modal fade" id="prescription" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="prescriptionLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 prescription-modal">
                                    <div class="modal-content vh-100 rounded-0">
                                        <div class="modal-header d-block px-4 px-sm-5">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="modal-title" id="prescriptionLabel">Retsept ma'lumotlari</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body p-4 p-sm-5">
                                            <div class="row">
                                                <form action="{{ route('resept') }}" method="POST" >
                                                    @csrf
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Dori vositasi toifasi</label>
                                                        <input type="text" placeholder="Dori vositasi toifasi" name="category" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Dori vositasi</label>
                                                        <input type="text" placeholder="Dori vositasi" name="medicine" class="form-control" />
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold" for="">Doza</label>
                                                        <input type="text" placeholder="0-0-0" name="dosage" class="form-control" />
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold">Tayinlovchi</label>
                                                        <input type="text" placeholder="0-0-0" name="prescribed" class="form-control" />  
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="fw-bold" for="">Tavsif</label>
                                                        <textarea name="des" id="prescriptionDescription" rows="3" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                             
                                                        <input name="user_id" type="hidden" value="{{ $user->id }}" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 mb-3">
                                                                          
                                                        <input name="patient_id" type="hidden" value="{{ $patient->id }}" class="form-control">
                                                    </div>
                                                    <button type="submit"  class="btn btn-primary w-100" type="submit">Qo'shish</button>
                                                </form>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- end prescription modal -->
                        </div>

                        <!-- charges -->
                        <div class="tab-pane fade" id="nav-charges" role="tabpanel" aria-labelledby="nav-charges-tab">
                            <div class="border-bottom pb-2 mb-3">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="fs-6 mb-0">Charges Information</h2>
                                        <small>Patients charges for service.</small>
                                    </div>
                                    <div class="col-auto"><a href="patient-profile.html#charges" data-bs-toggle="modal"><i class="bi bi-plus-lg bg-primary px-3 py-2 text-white rounded" title="Add" data-bs-toggle="tooltip"></i></a></div>
                                </div>
                            </div>

                            <div class="overview-box-body">
                                <!-- start table -->
                                <div class="default-table-design-one">
                                    <div class="table-responsive">
                                        <table class="table table-striped align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Category</th>
                                                    <th>Charges Type</th>
                                                    <th>Standrad Charges ($)</th>
                                                    <th>TPA Charges ($)</th>
                                                    <th>Applied ($)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                @foreach ($patient->diagnoses as $diagnos)
                                                    
                                             
                                                <tr>
                                                    <td>
                                                        {{ $diagnos->type }}
                                                    </td>
                                                    <td>{{ $diagnos->created_at }}</td>
                                                    <td>
                                                        {{ $diagnos->des }}
                                                    </td>
                                                    <td><span class="bg-warning text-warning bg-opacity-10 px-2 py-1 rounded-4">Pending</span></td>
                                                    <td>
                                                        <div class="action-btn">
                                                            <a href="patient-profile.html#editdiagnos" data-bs-toggle="modal" class="ms-1"><i class="bi bi-pencil bg-success text-white"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                                                    {{-- <form action="{{ route('deleteresept', $resept->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button  type="submit" class="but bg-danger"><i class="bi bi-trash bg-danger text-white"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></button>
                                                                    </form> --}}
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
                        <h2 class="fs-5 mt-3 mb-1">{{ $patient->username }}</h2>
                        <span class="text-secondary">{{ $patient->phone }}</span>
                    </div>

                    


                    <div class="mt-4 border-bottom pb-3">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h6 class="fs-7 fw-normal text-secondary">Admit Date</h6>
                                <h5 class="fs-7">17-06-2022, 04:11pm</h5>
                            </div>
                            <div class="col-12">
                                <h6 class="fs-7 fw-normal text-secondary">Discharged Date</h6>
                                <h5 class="fs-7">Alive</h5>
                            </div>
                        </div>
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

