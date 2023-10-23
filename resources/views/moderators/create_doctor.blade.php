@extends('layout.layout')
@section('code')
<title>Doktor Yarating</title>
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <!-- start title -->
                <div class="row align-items-end mb-4">
                    <div class="col-md mb-3 mb-md-0">
                        <!-- start heading -->
                        <div class="title">
                            <h1 class="mb-0"><span>Qo'shish</span> Shifokor / Hamshira</h1>
                        </div>
                        <!-- end heading -->
                    </div>
                    <div class="col-auto mb-2 mb-md-0">
                        <!-- screen option button -->
                        <a href="doctor-nurse-list.html" class="btn border py-1 text-primary">Shifokor / hamshira jadvaliga qaytish</a>
                    </div>
                </div>
                <!-- end title -->

                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <form action="{{ route('create_doctors') }}">
                            <div class="custom-shadow-md bg-white p-4 rounded-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">F.I.O</label>
                                        <input type="text" name="username" placeholder="F.I.O" class="form-control" />
                                    </div>

                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Jins</label>
                                        <input type="text" name="gender" placeholder="Gender" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Tug'ilgan sana</label>
                                        <input type="date" name="date" placeholder="DD-MM-YYYY" class="form-control" />
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
                                        <label class="fw-bold" for="">Yo'nalishi</label>
                                        <input type="text" name="designation" placeholder="Designation" class="form-control" />
                                    </div>

                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Mutaxassis</label>
                                        <input type="text" name="specialist" placeholder="Specialist" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Universitet / Institut</label>
                                        <input type="text" name="university" placeholder="University" class="form-control" />
                                    </div>
                                    <div class="col-sm-6 col-md-4 mb-3">
                                        <label class="fw-bold" for="">Millati</label>
                                        <input type="text" name="nationalid" placeholder="National ID" class="form-control" />
                                    </div>




                                    <button class="btn btn-outline-secondary" type="submit" id="btn-status">Yaratish</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection