@extends('layout.layout')
@section('code')
 <section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <!-- start title -->
                <div class="row align-items-end mb-4 pb-1">
                    <div class="col-md mb-3 mb-md-0">
                        <!-- start heading -->
                        <div class="title">
                            <h1 class="mb-1"><span>Edit</span> Patient</h1>
                            <h6 class="mb-0 fs-7">Input  patient information carefully.</h6>
                        </div>
                        <!-- end heading -->
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <a href="patient-list.html" class="btn border py-1 text-primary">Back to patient table <i class="bi bi-table ms-2"></i></a>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <form action="{{ route('patients.update', ['patient' => $patient->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="custom-shadow-md bg-white p-4 rounded-12">
                                <div class="row">
                                    <div class="col-md-7 col-lg-8 col-xl-9">
                                        <!-- start personal info -->
                                        
                                        <div class="custom-shadow-md bg-white p-4 rounded-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">F.I.O</label>
                                                    <input type="text" name="username" value="{{ $patient->username }}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Tu'gilgan Sana</label>
                                                    <input type="text" name="date" value="{{ $patient->date }}" class="form-control " />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Jins</label>
                                                    <input type="text" name="gender" value="{{ $patient->Gender }}" class="form-control" />
                
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Millat</label>
                                                    <input type="text" name="nationality" value="{{ $patient->nationality }}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">rh faktor</label>
                                                    <input type="text" name="factor" value="{{ $patient->factor }}" class="form-control" />
                
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Telefon Raqam</label>
                                                    <input  name="phone" value="{{ $patient->phone }}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">B'oy</label>
                                                    <input type="text" name="height" value="{{ $patient->height }}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">O'girlik</label>
                                                    <input type="text" name="weight" value="{{ $patient->weight }}" class="form-control" />
                                                </div>
                
                                              
                
                                                  
                                            </div>
                        
                                            <!-- start tabs -->
                                            <div class="vertical-tabs-design-one">
                                                <div class="row">
                                                            <!-- general -->
                                                    <div class="col-sm-6 col-md-4 mb-3">
                                                        <label class="fw-bold" for="">Qon guruhi</label>
                                                        <input type="text" name="blood" value="{{ $patient->blood }}" class="form-control" />
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                                    <!-- end tabs -->
                                                <div class="col-sm-12 col-md-12">
                                                    <label class="fw-bold" for="">Adres</label>
                                                    <textarea class="form-control" name="address" placeholder="Adres">{{ $patient->address }}</textarea>
                                                </div>
                                                <center>
                                                    <button type="submit" class="btn btn-primary" style="margin:  20px 0; width:817px;">O'zgartirish</button>
                                                </center>
                                            </div>
                                        </div>
                                     
                                
       
                                       
                
                                  
                
                                    
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection