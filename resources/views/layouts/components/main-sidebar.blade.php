
				<div class="sticky">
					<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
					<div class="app-sidebar">
						<div class="side-header">
							<a class="header-brand1" href="{{url('index')}}">
								<img src="{{asset('build/assets/images/mu.png')}}" class="header-brand-img main-logo"
									alt="Sparic logo">
								<img  src="{{asset('build/assets/images/mu.png')}}" class="header-brand-img darklogo"
									alt="Sparic logo">
								<img  src="{{asset('build/assets/images/mu.png')}}" class="header-brand-img icon-logo"
									alt="Sparic logo">
								<img  src="{{asset('build/assets/images/mu.png')}}" class="header-brand-img icon-logo2"
									alt="Sparic logo">
							</a>
						</div>
						<!-- logo-->
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
									fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">
								<li class="sub-category">

								</li>

								<li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-home-4-line"></i><span
											class="side-menu__label">Dashboard</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">

											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side1">
														<ul class="sidemenu-list">
															<li class="side-menu-label1"><a href="javascript:void(0)">Dashboards</a></li>
															<li><a class="slide-item" href="{{url('index')}}">Absensi</a></li>

														</ul>
														<div class="resp-tab-content-active">
															<h6 class="fw-semibold mb-4">Active Users</h6>
															<div class="row">
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
																		<div class="chart-circle-value"><div class="">65% </div></div>
																	</div>
																	<span class="fw-semibold">Active</span>
																</div>
																<div class="col text-center">
																	<div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
																		<div class="chart-circle-value"><div class="">35% </div></div>
																	</div>
																	<span class="fw-semibold">Deactive</span>
																</div>
															</div>
															<h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
															<div class="row p-3">
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0">
																		<i class="ti-headphone fs-30 text-secondary"></i>
																		<p class="mb-0">Support</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center">
																		<i class="ti-bell fs-30 text-warning"></i>
																		<p class="mb-0">Notify</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-right-0 border-top-0">
																		<i class="ti-panel fs-30 text-info"></i>
																		<p class="mb-0">Settings</p>
																	</div>
																</div>
																<div class="col-6 p-0">
																	<div class="border text-center border-top-0">
																		<i class="ti-layers fs-30 text-danger"></i>
																		<p class="mb-0">Layouts</p>
																	</div>
																</div>
															</div>
															<button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
															<button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
														</div>
													</div>

												</div>
											</div>
										</li>
									</ul>
								</li>



                                <li class="slide">
									<a class="side-menu__item has-link" data-bs-toggle="slide" href="javascript:void(0)"><i
											class="side-menu__icon ri-menu-unfold-fill"></i><span
											class="side-menu__label">Data</span><i
											class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="panel sidetab-menu">
											<div class="panel-body tabs-menu-body p-0 border-0">
												<div class="tab-content">
													<div class="tab-pane active" id="side1">
														<ul class="sidemenu-list">
															<li><a class="slide-item" href="{{url('user')}}">Data User</a></li>
															<li><a class="slide-item" href="{{url('index2')}}">Data Employee</a></li>
															<li><a class="slide-item" href="{{url('index4')}}">Data Department</a></li>
															<li><a class="slide-item" href="{{url('timer')}}">Data Company</a></li>
														</ul>
													</div>

												</div>
											</div>
										</li>
									</ul>
								</li>
						</div>
					</div>
				</div>
