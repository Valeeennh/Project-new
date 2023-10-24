@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE HEADER -->
                            <div class="page-header d-sm-flex d-block">
                                <ol class="breadcrumb mb-sm-0 mb-3">
                                    <!-- breadcrumb -->
                                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Absensi</li>
                                </ol><!-- End breadcrumb -->
                                <div class="ms-auto">
                                    <div>
                                        <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="Rating">
                                            <span>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </a>
                                        <a href="{{url('lockscreen')}}" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                            data-bs-original-title="lock">
                                            <span>
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </a>
                                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                                            title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                                            <span>
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE HEADER -->




                            <!-- ROW -->
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card">
                                        <div class="m-4">


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title"> Absensi harian perusahaan PT ..</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Nama pegawai</label>
                                                                        <input type="text" class="form-control" name="example-text-input"
                                                                            placeholder="UDIN " disabled>
                                                                    </div>



                                                                        {{-- FORM --}}
                                                                        <form class="was-validated">



                                                                            <label for="">Absensi dapat dilakukan pada jam 08:00 - 08:30</label>
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input" id="validationFormCheck2"
                                                                                    name="radio-stacked" value="Hadir" required>
                                                                                <label class="form-check-label" for="validationFormCheck2">Hadir
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input" id="validationFormCheck2"
                                                                                    name="radio-stacked" value="Sakit" required>
                                                                                <label class="form-check-label" for="validationFormCheck2">Sakit
                                                                                    </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input" id="validationFormCheck2"
                                                                                    name="radio-stacked" value="Izin" required>
                                                                                <label class="form-check-label" for="validationFormCheck2">Izin
                                                                                    </label>
                                                                            </div>


                                                                            {{-- <div class="mb-3">
                                                                                <select class="form-select" required aria-label="select example">
                                                                                    <option value="">Open this select menu</option>
                                                                                    <option value="1">One</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                                <div class="invalid-feedback">Example invalid select feedback</div>
                                                                            </div> --}}



                                                                            <div class="mt-3">
                                                                                <button class="btn btn-primary" type="submit" >Submit
                                                                                    form</button>
                                                                            </div>
                                                                        </form>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- COL END -->
                            </div>
                            <!-- END ROW -->


@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>

        <!-- APEXCHART JS -->
        <script src="{{asset('build/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>

        <!-- DATA TABLES JS -->
        <script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INDEX JS -->
        @vite('resources/assets/js/index1.js')


@endsection
