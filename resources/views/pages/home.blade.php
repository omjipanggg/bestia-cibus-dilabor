@extends('layouts.core')

@section('title', 'Home')

@section('content')

<div class="mt-3"></div>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">Weather</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<form action="{{ route('home.fetchWeather') }}" method="POST">
									@method('POST')
									@csrf
									<div class="input-group mb-2">
										<span class="input-group-text rounded-0" id="basic-addon1">Latitude</span>
										<input type="text" class="form-control" placeholder="Latitude" id="lat" name="lat" aria-label="Latitude" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-2">
										<span class="input-group-text rounded-0" id="basic-addon2">Longitude</span>
										<input type="text" class="form-control" placeholder="Longitude" id="lon" name="lon" aria-label="Longitude" aria-describedby="basic-addon2">
									</div>
									<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-0 btn btn-primary" id="btnFetchWeather">Fetch<i class="bi bi-send ms-2"></i></button>
								</form>
							</div>
						</div>

						<hr class="my-3">

						<div class="input-group mb-2">
							<span class="input-group-text rounded-0" id="country">Location</span>
							<input type="text" class="form-control" placeholder="Unknown" id="location" name="location" aria-label="Location" aria-describedby="country" readonly="">
						</div>

						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Current</button>
								<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Daily</button>
								<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Hourly</button>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
								<div class="p-3 border-bottom border-end border-start" id="navCurrent">
									Please click the <b>big, blue, FETCH button</b> above in order to fetch the weather information.
								</div>
							</div>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
								<div class="p-3 border-bottom border-end border-start">
									<div class="d-flex flex-wrap gap-3" id="navDaily">
										Please click the <b>big, blue, FETCH button</b> above in order to fetch the weather information.
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
								<div class="p-3 border-bottom border-end border-start">
									<div class="d-flex flex-wrap gap-3" id="navHourly">
										Please click the <b>big, blue, FETCH button</b> above in order to fetch the weather information.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<i class="bi bi-info-circle me-2"></i>
						<b>Notice!</b>
						Please allow the location access.
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection