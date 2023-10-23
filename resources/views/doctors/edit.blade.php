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
                            <h1 class="mb-1"><span>Tahrirlash</span> Doktor</h1>
                            <h6 class="mb-0 fs-7">Doktor ma'lumotlarini ehtiyotkorlik bilan kiriting.</h6>
                        </div>
                        <!-- end heading -->
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <a href="patient-list.html" class="btn border py-1 text-primary">Back to doctor table <i class="bi bi-table ms-2"></i></a>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <form action="{{ route('doctors.update', ['doctor' => $doctor->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="custom-shadow-md bg-white p-4 rounded-12">
                                <div class="row">
                                    <div class="col-md-7 col-lg-8 col-xl-9">
                                        <!-- start personal info -->
                                        <div class="custom-shadow-md bg-white p-4 rounded-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">To'liq ism</label>
                                                    <input type="text" name="username" value="{{  $doctor->username  }}" class="form-control" />
                                                </div>

                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Tug'ilgan sanasi</label>
                                                    <input type="text" name="date" value="{{  $doctor->date}}" class="form-control " />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Jinsi</label>
                                                    <input type="text" name="gender" value=" {{  $doctor->gender}}" class="form-control" />

                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Telefon</label>
                                                    <input type="number" name="phone" value="{{  $doctor->phone}}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Milliy ID</label>
                                                    <input type="text" name="nationalid" value=" {{  $doctor->nationalid}}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Lavozimi</label>
                                                    <input type="text" name="designation" value="{{  $doctor->designation}} " class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Mutaxassisi</label>
                                                    <input type="text" name="specialist" value="{{  $doctor->specialist}}" class="form-control" />
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3">
                                                    <label class="fw-bold" for="">Oliy ta'lim muassasasi</label>
                                                    <input type="text" name="university" value="{{  $doctor->university}}" class="form-control" />
                                                </div>
                                            </div>

                                            <!-- start tabs -->

                                            <center>
                                                <button type="submit" class="btn btn-primary" style="margin:  20px 0; width:817px;">Bemor qo'shish</button>
                                            </center>
                                        </div>
                                    </div>


                                    <!-- end personal info -->

                                    <!-- start general info & medical condition -->





                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection