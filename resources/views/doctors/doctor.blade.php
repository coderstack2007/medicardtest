@extends('layout.layout')
@section('code')

<title>Doctor</title>
<style>
    .but {
        background-color: transparent;
        border: none;
    }

    .per {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .tdl {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .tdr {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .tdl li,
    .tdr li {
        width: 50%;
        text-align: center;
    }
</style>
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}"> --}}
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- start title -->
                <div class="title mb-4 pb-2">
                    <div class="row align-items-end">
                        <div class="col-sm">
                            <h1>{{$doctor->username }}</h1>

                        </div>
                        <div class="col-md-auto mt-3 mt-md-0">
                            <a href="doctor-nurse-list.html" class="btn btn-outline-primary px-4 py-1 me-3 mb-3 mb-sm-0">Shifokor / hamshira jadvaliga qaytish</a>
                        </div>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="col-lg-3 col-xl-3">
                <div class="bg-white p-4 rounded-12 custom-shadow-md">
                    <div class="text-center mt-3 border-bottom pb-4">
                        <span class="avatar avatar-xxl bg-primary text-white">
                            <img src="../../assets/img/user-03.png" alt="">
                        </span>
                        <h2 class="fs-5 mt-3 mb-1">{{ $doctor->username }}</h2>
                        <span class="text-secondary">{{ $doctor->university }}</span>
                    </div>

                    <div class="mt-4 border-bottom pb-3 mb-4">
                        <div class="row align-items-center">

                        </div>
                    </div>

                    <!-- start nav -->
                    <ul class="nav horizontal-pills-tab d-block nav-pills rounded-6 px-3 py-3" role="tablist">
                        <li class="nav-item mb-2">
                            <a class="nav-link px-4 fs-6 border active" id="nav-appointments-tab" href="doctor-nurse-profile.html#nav-appointments" data-bs-toggle="pill" data-bs-target="#nav-appointments" role="tab" aria-controls="nav-appointments" aria-selected="false">Ko'riklar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 fs-6 border" id="nav-personal-tab" href="doctor-nurse-profile.html#nav-personal" data-bs-toggle="pill" data-bs-target="#nav-personal" role="tab" aria-controls="nav-personal" aria-selected="false">Shaxsiy Ma'lumot</a>
                        </li>
                    </ul>
                    <!-- end nav -->


                </div>
            </div>

            <div class="col-lg-9 col-xl-9 ps-md-4">
                <!-- start tab content -->
                <div class="tab-content">
                    <!-- appointments -->
                    <div class="tab-pane fade show active" id="nav-appointments" role="tabpanel" aria-labelledby="nav-appointments-tab">
                        <section class="mt-1">
                            <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">


                                <div class="overview-box-body">
                                    <!-- start table -->
                                    <div class="default-table-design-one">
                                        <div class="table-responsive">
                                            <table class="table table-striped align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Bemor</th>
                                                        <th>Sana</th>
                                                        <th>Holati</th>
                                                        <th>Harakat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    @foreach ($times as $time)
                                                    @if($time->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                {{-- <a class="timing" href="{{ route('patients.show', ['patient' => $time->patient_id]) }}"> --}}
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>
                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$time->user->username}}</h6>
                                                                    <small class="text-secondary">#23{{ $time->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Dushanba, {{ $time->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Waiting
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">
                                                                <form action="{{ route('mondel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="time_id" type="hidden" value="{{ $time->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                                {{-- <a href="{{ route('mondel')}}" class="ms-1"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></a> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @foreach ($tuesdays as $tuesday)
                                                    @if($tuesday->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>

                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$tuesday->user->username}}</h6>
                                                                    <small class="text-secondary">#23{{ $tuesday->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Seshanba, {{ $tuesday->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Waiting
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">

                                                                <form action="{{ route('tuedel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="tuesday_id" type="hidden" value="{{ $tuesday->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @foreach ($wensdays as $wensday)
                                                    @if($wensday->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>
                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$wensday->user->username}}</h6> <small class="text-secondary">#23{{ $wensday->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Chorshanba, {{ $wensday->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Waiting
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">

                                                                <form action="{{ route('wendel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="wensday_id" type="hidden" value="{{ $wensday->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach


                                                    @foreach ($thursdays as $thursday)
                                                    @if($thursday->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>
                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$thursday->user->username}}</h6> <small class="text-secondary">#23{{ $thursday->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td> Payshanba, {{ $thursday->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Kutish
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">
                                                                <form action="{{ route('thudel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="thursday_id" type="hidden" value="{{ $thursday->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @foreach ($fridays as $friday)
                                                    @if($friday->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>
                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$friday->user->username}}</h6>
                                                                    <small class="text-secondary">#23{{ $friday->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Juma, {{ $friday->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Kutish
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">

                                                                <form action="{{ route('fridel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="friday_id" type="hidden" value="{{ $friday->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @foreach ($saturdays as $saturday)
                                                    @if($saturday->booked != null)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="user-img">
                                                                <span class="no-image bg-danger bg-opacity-10 text-danger fw-bold"></span>
                                                                <span>
                                                                    <h6 class="fs-7 mb-0 mt-1">{{$saturday->user->username}}</h6> <small class="text-secondary">#23{{ $saturday->user->id }}26abc</small>

                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>Shanba, {{ $saturday->slot}}</td>
                                                        <td><small class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">Kutish
                                                                <i title="Waiting at 12 May, h22 10:23 AM" data-bs-toggle="tooltip" class="bi bi-info-circle ms-1"></i></small></td>
                                                        <td>
                                                            <div class="action-btn">

                                                                <form action="{{ route('satdel') }}" method="POST">
                                                                    @csrf
                                                                    <input name="saturday_id" type="hidden" value="{{ $saturday->id }}">
                                                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}

                                                                    <span>
                                                                        <button class="but" type="submit"><i class="bi bi-x bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"></i></button>
                                                                    </span>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end table -->


                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- activity -->


                    <!-- personal info -->
                    <div class="tab-pane fade" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="custom-shadow-md bg-white rounded-12 px-4 pt-2 pb-4 mb-4">
                                    <h5 class="mb mt-3">Shaxsiy Ma'lumotlar</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="per">
                                            <ul class="tdl">
                                                <li>F.I.O</li>
                                                <li>Telefon</li>
                                                <li>Tug'ilgan sanasi</li>
                                                <li>Jinsi</li>
                                                <li>Oliy ta'lim muassasasi</li>
                                                <li>Mutaxassisligi</li>
                                                <li>Millati</li>
                                                <li>Lavozimi</li>

                                            </ul>
                                            <ul class="tdr">
                                                <li>{{ $doctor->username }}</li>
                                                <li>{{ $doctor->phone }}</li>
                                                <li>{{ $doctor->date }}</li>
                                                <li>{{ $doctor->gender }}</li>
                                                <li>{{ $doctor->university }}</li>
                                                <li>{{ $doctor->specialist }}</li>
                                                <li>{{ $doctor->nationalid }}</li>
                                                <li>{{ $doctor->designation }}</li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                <!-- end tab content -->
            </div>
        </div>
    </div>
</section>

@endsection