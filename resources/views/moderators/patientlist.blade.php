@extends('layout.layout')
@section('code')

<title>Bemorlar Ro'yxati</title>
<style>
    .action-link {
        display: inline-block;
        width: 30px;
        /* Измените на желаемую ширину */
        height: 30px;
        /* Измените на желаемую высоту */
    }

    .but {
        border: none;
    }
</style>
<!-- start content -->
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row align-items-center mb-4">
            <div class="col">
                <!-- start heading -->
                <div class="title mb-3 mb-sm-0">
                    <h1><span>IPD/OPD-bemorlar</span> ro'yxati</h1>
                    <h6 class="mb-0">O'rganing / filtr / IPD / OPD - bemor</h6>
                </div>
                <!-- end heading -->
            </div>
            <div class="col-auto">
                <a href="{{ route('moder.create') }}" class="btn btn-primary px-4 py-1 rounded-3"><i class="bi bi-plus-circle me-1"></i> Bemorni Qo'shing</a>
            </div>
        </div>

        <!-- start patient list -->
        <div class="overview-box p-4 bg-white rounded-12 custom-shadow-sm">
            <div class="row align-items-center mb-4">
                <div class="col-sm-6 col-md-4 col-xl-3">

                </div>
                <div class="col">

                </div>
                <div class="col-auto mb-2 mb-sm-0">
                    <a href="patient-list.html#search" class="fs-6 py-0" data-bs-toggle="collapse">
                        <i class="bi bi-search" title="Search" data-bs-toggle="tooltip"></i>
                    </a>
                </div>



                <div class="col-12 collapse" id="search">
                    <div class="input-group my-3 mb-md-0 bg-light p-3 rounded-4">
                        <input type="text" placeholder="Enter keyword..." class="form-control" aria-describedby="search" />
                        <button class="btn btn-outline-secondary" type="button" id="search">Qidirish</button>
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
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        </div>
                                    </th>
                                    <th>Bemor</th>
                                    <th>ID</th>
                                    <th>Telefon</th>
                                    <th>Jins</th>
                                    <th>Qon Guruhi</th>
                                    <th>To'lovlar</th>
                                    <th style="min-width: 130px;">Harakat</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($patients as $patient)
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
                                                <a href="{{ route('patients.show', ['patient' => $patient->id ]) }}">
                                                    <h6 class="mb-0">{{ $patient->username }}</h6>
                                                </a>

                                            </span>
                                        </div>
                                    </td>

                                    <td><a href="patient-list.html#!">#{{ $patient->id }}4832</a></td>
                                    <td>{{ $patient->phone }} </td>
                                    <td>{{ $patient->Gender }}</td>

                                
                                    <td>{{ $patient->blood }}</td>
                                    <td>{{ $patient->factor }}</td>
                                    <td>
                                        @if(auth()->user()->type == 'admin')
                                            <div class="action-btn">
                                                <a href="{{ route('patients.show', ['patient' => $patient->id ]) }}"><i class="bi bi-eye bg-success text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i></a>
                                                <a href="{{ route('patients.edit', ['patient' => $patient -> id ])  }}" class="ms-1"><i class="bi bi-pencil bg-primary text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                                <a href="" class="action-link">
                                                    <form action="{{ route('destroy', $patient->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="but"><i class="bi bi-trash bg-danger text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i></button>
                                                    </form>
                                                </a>
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
        </div>
        <!-- end patient list -->
    </div>
</section>

@endsection