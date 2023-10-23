@extends('layout.layout')
@section('code')
<style>
    .but {
        background-color: transparent;
        border: none;
    }
</style>
<title>Shifokorlar ro'yxati</title>
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row align-items-center mb-4 g-3">
            <div class="col">
                <!-- start heading -->
                <div class="title mb-3 mb-sm-0">
                    <h1><span>Doktor/</span> Hamshira</h1>
                    <h6 class="mb-0">Doktor yoki hamshirani o'rganing / filtrlang</h6>
                </div>
                <!-- end heading -->
            </div>
            <div class="col-auto">
                <a href="doctor-nurse-list.html#search" data-bs-toggle="collapse">
                    <i class="bi bi-search btn btn-outline-secondary py-1 px-3" title="Search" data-bs-toggle="tooltip"></i>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ route('create_doctor') }}" class="btn btn-primary px-4 py-1 rounded-3"><i class="bi bi-plus-circle me-1"></i> Shifokor / Hamshira Qo'shing</a>
            </div>

            <!-- start search input -->
            <div class="col-12 collapse" id="search">
                <div class="input-group my-3 mb-md-0 bg-white p-3 rounded-4">
                    <input type="text" placeholder="Enter keyword..." class="form-control" aria-describedby="search" />
                    <button class="btn btn-outline-secondary" type="button" id="search">Qidirish</button>
                </div>
            </div>
            <!-- end search input -->
        </div>

        <!-- start doctor / nurse list -->
        <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
            <div class="row g-4">
                @foreach ($doctors as $doctor)


                <div class="col-md-6 col-xl-3">
                    <div class="custom-card border p-3 p-sm-4 rounded-10 h-100">
                        <div class="custom-card-header text-center">
                            <!-- start options -->
                            <div class="dropdown custom-dropdown">
                                <a class="dropdown-toggle more-setting" href="doctor-nurse-list.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bi bi-three-dots fs-5"></i>
                                </a>
                                <div class="dropdown-menu  ms-lg-n3 me-n3 p-3" aria-labelledby="dropdownMenuLink">
                                    <a href="doctor-nurse-profile.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-eye me-1"></i> Tafsilotlarni Ko'rish</a>
                                    <a href="../inbox/message.html" class="d-block text-decoration-none text-secondary mb-2 border-bottom pb-2"><i class="bi bi-envelope me-1"></i> Xabar yuborish</a>

                                </div>
                            </div>
                            <!-- end options -->

                            <!-- <span class="img">
                                <img src="../../assets/img/user-01.png" class="rounded-circle" alt="">
                            </span> -->
                            <span class="no-img bg-success text-white rounded-circle">
                                HF
                            </span>

                            <h3 class="fs-5 mt-2 mb-3">{{ $doctor->username }}</h3>

                            <span class="d-inline-block bg-info bg-opacity-10 text-primary px-3 py-1 rounded-pill">{{ $doctor->designation }}</span>
                            <small class="d-block mt-3">{{ $doctor->specialist }}</small>
                        </div>
                        <div class="custom-card-body mt-4 text-center text-sm-start">
                            <div class="row align-items-center">
                                <div class="col-sm-4 mb-sm-3">
                                    <span class="text-secondary">Telefon</span>
                                </div>
                                <div class="col-sm-8 mb-3 text-sm-end">
                                    <label>+998 {{ $doctor->phone }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card-footer mt-4">
                            <a href="{{ route('doctors.show', ['doctor' => $doctor -> id ])  }}" class="btn btn-outline-primary w-100">Profilni Ko'rish</a>
                            @if(auth()->user()->type == "admin")
                            <a href="{{ route('doctors.edit', ['doctor' => $doctor->id ])  }}" class="ms-1"><i class="bi bi-pencil bg-primary text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>O'zgartirish</a>
                            <form action="{{ route('destroying', $doctor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="but">O'chirish</button>
                            </form>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- end doctor / nurse list -->
    </div>
</section>
@endsection