@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
								<ol class="breadcrumb mb-sm-0 mb-3">
									<!-- breadcrumb -->
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol><!-- End breadcrumb -->

							</div>
							<!-- END PAGE-HEADER -->

							<!-- ROW -->

                            <div class="tab-pane p-0" id="style6tab2">
                                <div class="card overflow-hidden border-0">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Update</a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">Discard</a>
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
                                                        <label class="form-label fw-semibold text-muted-dark">Subdistrict</label>
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
                                                        <label class="form-label fw-semibold text-muted-dark">City</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Province</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Province" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Pos code</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Pos code" >
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
