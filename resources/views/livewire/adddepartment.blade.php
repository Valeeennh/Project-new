@extends('layouts.app')

@section('styles')

@endsection

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header d-sm-flex d-block">
								<ol class="breadcrumb mb-sm-0 mb-3">
									<!-- breadcrumb -->
									<li class="breadcrumb-item"><a href="javascript:void(0);">Add</a></li>
									<li class="breadcrumb-item active" aria-current="page">Department</li>
								</ol><!-- End breadcrumb -->

							</div>
							<!-- END PAGE-HEADER -->

							<!-- ROW -->


                            <div class="row">
                                <div class="col-20 col-sm-20">
                                 <div class="card mb-9">


                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Tambah</a>

                                            </div>
                                        </div>

                                        <form class="form-horizontal">
                                            <h6 class="text-uppercase fw-semibold mb-3">Add Department</h6>
                                            <div class="form-group">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Nama department</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Name" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Detail</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Detail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Addres</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                            placeholder="Jln telexia">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Type</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>Company</option>
                                                            <option>Head office</option>
                                                            <option>Regional office</option>
                                                            <option>Department</option>
                                                            <option>Unit</option>
                                                            <option>Sub unit</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Parent Structure</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="row row-sm">
                                                    <div class="col-md-3">
                                                        <label class="form-label fw-semibold text-muted-dark">Heads</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-select select2" id="validationCustom04" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option>employe1</option>
                                                            <option>employe2</option>
                                                            <option>employe3</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                        </form>

                                    </div>

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
