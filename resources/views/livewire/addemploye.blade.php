@extends('layouts.app')

@section('styles')

<meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
								<ol class="breadcrumb mb-sm-0 mb-3">
									<!-- breadcrumb -->
									<li class="breadcrumb-item"><a href="javascript:void(0);">Tambah</a></li>
									<li class="breadcrumb-item active" aria-current="page">Employee</li>
								</ol><!-- End breadcrumb -->

							</div>
							<!-- END PAGE-HEADER -->

							<!-- ROW -->

                            <div class="tab-pane p-0" id="style6tab2">
                                <div class="card overflow-hidden border-0">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Tambah</a>

                                            </div>
                                        </div>
                                        <form class="form-horizontal">
                                            <h6 class="text-uppercase fw-semibold mb-3">User Name</h6>
                                            <div class="form-group">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">First Name</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">last Name</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Last Name" >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark text-uppercase fw-semibold">Birth</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input placeholder="14/02/2002" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Gender</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>Laki-laki</option>
                                                            <option>Perempuan</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Marital status</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Designation" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Employe status</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>Fulltime </option>
                                                            <option>Internship</option>
                                                            <option>Permanent</option>
                                                            <option>Part Time</option>
                                                            <option>Contract</option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Department</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>Fulltime </option>
                                                            <option>Internship</option>
                                                            <option>Permanent</option>
                                                            <option>Part Time</option>
                                                            <option>Contract</option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Job tittle</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Designation" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Joined date</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Designation" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Termination date</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Designation">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-uppercase fw-semibold mb-3">Addres</h6>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Provinsi</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="provinsi" required>
                                                            <option selected disabled value="">Pilih Provinsi</option>
                                                            @foreach ($provinces as $provinsi )
                                                            <option value="{{ $provinsi->id }}" >{{ $provinsi->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Kabupaten</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="kabupaten" required>
                                                            <option selected disabled value="">Pilih Kabupaten</option>
                                                        @foreach ($regencies as $kabupaten )
                                                        <option >{{ $kabupaten->name }}</option>
                                                        @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Kecamatan</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="kecamatan" required>
                                                            <option selected disabled value="">Pilih Kecamatan</option>
                                                            @foreach ($districts as $kecamatan )
                                                            <option >{{ $kecamatan->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Desa</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="desa" required>
                                                            <option selected disabled value="">Pilih Desa</option>
                                                            @foreach ($villages as $desa )
                                                            <option >{{ $desa->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <h6 class="text-uppercase fw-semibold mb-3">Contact</h6>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Work email</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Email"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Private email</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Email"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Home phone</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Website" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Mobile phone</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="phone number" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Status</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>Active</option>
                                                            <option>Deactive</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

							<!-- END ROW -->



@endsection

@section('scripts')

        {{-- <script>

            $(function(){
                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                });


                $(function(){

                $('#provinsi').on('change',function(){
                  let id_provinsi = $('#provinsi').val();

                    $.ajax({
                        type : 'POST',
                        url : "{{ route('getkabupaten') }}",
                        data :{id_provinsi:id_provinsi},
                        cache : false,

                        success: function(msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },

                        error : function(data){
                            console.log('error', data);
                        },

                    })


                  })

                 })



            });

        </script> --}}

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')


		<!-- GALLERY JS -->
		<script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

@endsection
