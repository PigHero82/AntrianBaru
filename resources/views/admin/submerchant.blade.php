@extends('admin.layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="content">
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
		<div class="container-fluid">
			<div class="col-md-8 col-12 mr-auto ml-auto">
				<!--      Wizard container        -->
				<div class="wizard-container">
					<div class="card card-wizard" data-color="rose" id="wizardProfile">
						<form action="{{ route('administrator.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
							<div class="card-header text-center">
								<h3 class="card-title">
									Build Your Profile
								</h3>
								<h5 class="card-description">This information will let us know more about you.</h5>
							</div>
							<div class="wizard-navigation">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a class="nav-link active" href="#about" data-toggle="tab" role="tab">
											User
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#account" data-toggle="tab" role="tab">
											Merchant
										</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane active" id="about">
										<h5 class="info-text"> Let's start with the basic information (with validation)</h5>
										<div class="row justify-content-center">
											<div class="col-lg-10 mt-3">
												<div class="input-group form-control-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="material-icons">face</i>
														</span>
													</div>
													<div class="form-group">
														<label for="username" class="bmd-label-floating">Username (wajib diisi)</label>
														<input type="text" class="form-control" id="username" name="username" required>
													</div>
												</div>
												<div class="input-group form-control-lg">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<i class="material-icons">email</i>
															</span>
														</div>
														<div class="form-group">
															<label for="email" class="bmd-label-floating">Email (wajib diisi)</label>
															<input type="email" class="form-control" id="email" name="email" required>
														</div>
													</div>
													<div class="input-group form-control-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="material-icons">lock</i>
														</span>
													</div>
													<div class="form-group">
														<label for="password" class="bmd-label-floating">Password</label>
														<input type="password" class="form-control" id="password" name="password" required>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="account">
										<h5 class="info-text"> What are you doing? (checkboxes) </h5>
										<div class="row justify-content-center">
											<div class="col-lg-10 mt-3">
												<div class="input-group form-control-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="material-icons">business</i>
														</span>
													</div>
													<div class="form-group">
														<label for="nama" class="bmd-label-floating">Nama Merchant (wajib diisi)</label>
														<input type="text" class="form-control" id="nama" name="nama" required>

													</div>
												</div>
												<div class="input-group form-control-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="material-icons">place</i>
														</span>
													</div>
													<div class="form-group">
														<label for="alamat" class="bmd-label-floating">Alamat (wajib diisi)</label>
														<textarea class="form-control" name="alamat" rows="3" required></textarea>
													</div>
												</div>
												<div class="input-group form-control-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="material-icons">email</i>
														</span>
													</div>
													<div class="form-group">
														<label for="deskripsi" class="bmd-label-floating">Deskripsi (diisi 1 paragraf)</label>
														<textarea class="form-control" name="deskripsi" rows="10" required></textarea>
													</div>
												</div>
												<div class="input-group form-control-lg">
													<div class="fileinput fileinput-new text-center" data-provides="fileinput">
														<div class="fileinput-new thumbnail">
															<img src="{{ asset('admin/img/image_placeholder.jpg') }}" alt="...">
														</div>
														<div class="fileinput-preview fileinput-exists thumbnail"></div>
														<div>
															<span class="btn btn-rose btn-round btn-file">
																<span class="fileinput-new">Select image</span>
																<span class="fileinput-exists">Change</span>
																<input type="file" id="file-input" name="gambar" />
															</span>
															<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="mr-auto">
									<input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
								</div>
								<div class="ml-auto">
									<input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
									<input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div>
				<!-- wizard container -->
			</div>
		</div>
	</div>
@endsection