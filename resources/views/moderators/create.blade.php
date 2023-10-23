@extends('layout.layout')
@section('code')
<title>Bemorni Qo'shing</title>
<!-- start content -->
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <!-- start title -->
                <div class="row align-items-end mb-4 pb-1">
                    <div class="col-md mb-3 mb-md-0">
                        <!-- start heading -->
                        <div class="title">
                            <h1 class="mb-1"><span>Qo'shish</span> Bemor</h1>
                            <h6 class="mb-0 fs-7">Bemorning yangi ma'lumotlarini diqqat bilan kiriting.</h6>
                        </div>
                        <!-- end heading -->
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <a href="patient-list.html" class="btn border py-1 text-primary">Bemor jadvaliga qaytish <i class="bi bi-table ms-2"></i></a>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <!-- start personal info -->
                        <form action="{{ route('moderators.store') }}" method="POST">
                            @csrf
                            <div class="custom-shadow-md bg-white p-4 rounded-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">F.I.O</label>
                                        <input type="text" name="username" placeholder="F.I.O" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Tug'ilgan sana</label>
                                        <input type="date" name="date" placeholder="DD-MM-YYYY" class="form-control " />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Jins</label>
                                        <input type="text" name="gender" placeholder="Gender" class="form-control" />

                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Millati</label>
                                        <input type="text" name="nationality" placeholder="Nationality" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">RH faktori</label>
                                        <input type="text" name="factor" placeholder="Rh factor" class="form-control" />

                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Telefon</label>
                                        <input type="phone" name="phone" placeholder="Phone" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">ID karta raqami</label>
                                        <input type="password" name="password" placeholder="ID karta raqami" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Balandligi</label>
                                        <input type="text" name="height" placeholder="Height" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Og'irligi</label>
                                        <input type="text" name="weight" placeholder="Weight" class="form-control" />
                                    </div>




                                </div>

                                <!-- start tabs -->
                                <div class="vertical-tabs-design-one">
                                    <div class="row">
                                        <!-- general -->
                                        <div class="col-sm-6 col-md-4 mb-3">
                                            <label class="fw-bold" for="">Qon Guruhi</label>
                                            <input type="text" name="blood" placeholder="Blood Group" class="form-control" />
                                        </div>

                                    </div>
                                </div>
                                <!-- end tabs -->
                                <div class="col-sm-12 col-md-12">
                                    <label class="fw-bold" for="">Manzil</label>
                                    <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary" style="margin:  20px 0; width:817px;">Bemorni Qo'shing</button>
                                </center>
                            </div>
                    </div>
                    <div class="col">


                    </div>
                    </form>
                    <!-- end personal info -->

                    <!-- start general info & medical condition -->


                </div>


            </div>
        </div>
    </div>
    </div>
</section>
@endsection