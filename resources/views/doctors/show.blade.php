@extends('layout.layout')
@section('code')
<title>Doctor</title>
<style>
    .timing {
        text-decoration: none;
    }
    
    .clearfix>li {
        margin: 15px;
    }
    .but 
    {
        background-color:transparent;
        border: none;
    }
    .nm 
    {
        margin: 30px;
        margin-left:60px;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- start title -->
                <div class="title mb-4 pb-2">
                    <div class="row align-items-end">
                        <div class="col-sm">
                            <h1>{{$doctor->username}}</h1>
                          
                        </div>
                        <div class="col-md-auto mt-3 mt-md-0">
                            <a href="doctor-nurse-list.html" class="btn btn-outline-primary px-4 py-1 me-3 mb-3 mb-sm-0">Back to doctor / nurse table</a>
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
                        <h2 class="fs-5 mt-3 mb-1">{{$doctor->username}}</h2>
                 
                    </div>

                    <div class="mt-4 border-bottom pb-3 mb-4">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="fs-7 text-secondary fw-normal">Total Appointment</h5>
                                <h3 class="fs-5 fw-bold text-primary">Done 299</h3>
                                <h6 class="fs-7 text-danger">Waiting 19</h6>
                            </div>
                            <div class="col-auto">
                                <a href="doctor-nurse-profile.html#!" class="avatar avatar-lg bg-primary  bg-opacity-10 text-primary">
                                    <i class="bi bi-file-earmark-plus fs-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- start nav -->
                    {{-- <ul class="nav horizontal-pills-tab d-block nav-pills rounded-6 px-3 py-3" role="tablist">
                        <li class="nav-item mb-2">
                            <a class="nav-link px-4 fs-6 border active" id="nav-appointments-tab" href="doctor-nurse-profile.html#nav-appointments" data-bs-toggle="pill" data-bs-target="#nav-appointments" role="tab" aria-controls="nav-appointments" aria-selected="false">Appointments (6)</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link px-4 fs-6 border" id="nav-personal-tab" href="doctor-nurse-profile.html#nav-personal" data-bs-toggle="pill" data-bs-target="#nav-personal" role="tab" aria-controls="nav-personal" aria-selected="false">Personal Info</a>
                        </li>
                    </ul> --}}
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
                               
                                <div class="row">
                                    <div class="col-12">
                                        <!-- start title -->
                                        <div class="title mb-4 pb-2">
                                            <div class="row align-items-end">
                                                <div class="col-sm">
                                                    <h1 class="mb-1">{{ $doctor->username }}</h1>
                                                    <h6 class="mb-md-0">Doktor Id <span class="bg-info bg-opacity-10 text-primary px-2 py-1 rounded-4">#{{ $doctor->id}}639</span></h6>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- end title -->
                                    </div>
                        
                                    <div class="col-lg-8 col-xl-9">
                                        <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
                                            
                        
                                            <!-- start tab content -->
                                            <div class="tab-content mt-4">
                                                <!-- personal information -->
                                                <div class="tab-pane fade show active" id="nav-personal-information" role="tabpanel" aria-labelledby="nav-personal-information-tab">
                                                    <div class="border-bottom pb-2 mb-3">
                                                        <div class="row">
                                                           
                                                        </div>
                                                    </div>
                        
                                                    <div class="row px-sm-3 py-2 py-sm-4 border rounded mx-0">
                                                        <div class="col-xl-6 pe-xl-4">
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Ism</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->username }}</label>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Age</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">28 Years</label>
                                                                </div>
                                                            </div> --}}
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Tu'gilgan sana</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->date }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Y'onalish</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->designation }}</label>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Jinsi</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->gender }}</label>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <div class="col-xl-6 ps-xl-4 mt-3 mt-xl-0">
                                                            
                                                           
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Doktor ID</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->id }}639</label>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Universitet</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->university }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Mutaxasis</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->specialist }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-3">
                                                                <div class="col-sm-6">
                                                                    <span>Specialist</span>
                                                                </div>
                                                                <div class="col-sm-6 text-sm-end">
                                                                    <label class="fw-bold">{{ $doctor->nationalid }}</label>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                        
                                                
                        
                                                </div>
                        
                                                <!-- prescription -->
                                              
                                            </div>
                                            <!-- end tab content -->
                                        </div>
                                    </div>
                        
                                   
                                </div>
                              
                            </div>
                        </section>
                    </div>
                    
                    <!-- activity -->
                    <div class="tab-pane fade" id="nav-activity" role="tabpanel" aria-labelledby="nav-activity-tab">
                        <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
                            <div class="row align-items-center mb-4">
                                <div class="col-sm">
                                    <div class="sub-title">
                                        <h2 class="mb-sm-0 fs-5">Account Activity</h2>
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>
                    </div>
                    
                    <!-- personal info -->
                   
                </div>
                <!-- end tab content -->
            </div>
        </div>
    </div>
 
   


   @if(auth()->user()->type == 'patient')
  
    
   <div class="schedule-cont">
    <div class="row">
        <div class="col-md-12">
           
            <div class="time-slot">
                <ul class="clearfix">
                    
                        <li> 
                            <h6 class="nm">Dushanba</h6>
                            @foreach ($doctor->times as $time)
                            <a class="timing">
                                <form action="{{ route('monday') }}" method="POST">
                                    @csrf
                                    <input name="time_id" type="hidden" value="{{ $time->id }}">
                                    {{-- <input name="patient_id" type="" value="{{ $patient->id }}"> <!-- Добавлено скрытое поле с идентификатором пациента --> --}}
                                    
                                    <span>
                                        <button class="but{{ $time->booked ? ' booked' : '' }}" type="submit" style="">{{ $time->slot }} {!! $time->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                    </span>
                                </form> 
                            </a>
                        @endforeach
                        </li> 
                    
                        <li>
                            <h6 class="nm">Seshanba</h6>
                            @foreach ($doctor->tuesdays as $tuesday)
                                <a class="timing">
                                    <form action="{{ route('book') }}" method="POST">
                                        @csrf
                                        <input name="tuesday_id" type="hidden" value="{{ $tuesday->id }}">
                                        {{-- <input name="patient_id" type="hidden" value="{{ $tuesday->id }}"> --}}
                                        <span>
                                            <button class="but{{ $tuesday->booked ? ' booked' : '' }}" type="submit">{{ $tuesday->slot }} {!! $tuesday->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                        </span>
                                    </form>
                                    </a>
                            @endforeach     
                        </li> 
                        <li>
                            <h6 class="nm">Chorshanba</h6>
                            @foreach ($doctor->wensdays as $wensday)
                                <a class="timing">
                                    <form action="{{ route('wensday') }}" method="POST">
                                        @csrf
                                        <input name="wensday_id" type="hidden" value="{{ $tuesday->id }}">
                                        {{-- <input name="patient_id" type="hidden" value="{{ $tuesday->id }}"> --}}
                                        <span>
                                            <button class="but{{ $wensday->booked ? ' booked' : '' }}" type="submit">{{ $wensday->slot }} {!! $wensday->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                        </span>
                                    </form>
                                    </a>
                            @endforeach     
                        </li>
                        <li>
                            <h6 class="nm">Payshanba</h6>
                            @foreach ($doctor->thursdays as $thursday)
                                <a class="timing">
                                    <form action="{{ route('thursday') }}" method="POST">
                                        @csrf
                                        <input name="thursday_id" type="hidden" value="{{ $thursday->id }}">
                                        {{-- <input name="patient_id" type="hidden" value="{{ $tuesday->id }}"> --}}
                                        <span>
                                            <button class="but{{ $thursday->booked ? ' booked' : '' }}" type="submit">{{ $thursday->slot }} {!! $thursday->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                        </span>
                                    </form>
                                    </a>
                            @endforeach     
                        </li>
                        <li>
                            <h6 class="nm">Juma</h6>
                            @foreach ($doctor->fridays as $friday)
                                <a class="timing">
                                    <form action="{{ route('friday') }}" method="POST">
                                        @csrf
                                        <input name="friday_id" type="hidden" value="{{ $friday->id }}">
                                        {{-- <input name="patient_id" type="hidden" value="{{ $patient->id }}"> --}}
                                        <span>
                                            <button class="but{{ $friday->booked ? ' booked' : '' }}" type="submit">{{ $friday->slot }} {!! $friday->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                        </span>
                                    </form> 
                                </a>
                            @endforeach     
                        </li> 
                        <li>
                            <h6 class="nm">Shanba</h6>

                            @foreach ($doctor->saturdays as $saturday)
                                <a class="timing">
                                    <form action="{{ route('saturday') }}" method="POST">
                                        @csrf
                                        <input name="saturday_id" type="hidden" value="{{ $saturday->id }}">
                                        {{-- <input name="patient_id" type="hidden" value="{{ $patient->id }}"> --}}
                                        <span>
                                            <button class="but{{ $saturday->booked ? ' booked' : '' }}" type="submit">{{ $saturday->slot }} {!! $saturday->booked ? '<i class="fas fa-user-alt"></i>' : '' !!}</button>      
                                        </span>
                                    </form> 
                                </a>
                            @endforeach     
                        </li> 
                   
                   
                </ul>
            </div>

        </div>
    </div>
</div>
    @endif
</section>
<script>
    @if(session('error'))
        alert('{{ session('error') }}');
    @endif
</script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection