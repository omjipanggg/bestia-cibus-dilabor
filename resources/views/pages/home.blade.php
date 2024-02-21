@section('title', 'Home')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-3 space-y-6">
            <div class="p-3 sm:p-8 bg-white shadow sm:rounded-lg">
				<div class="row">
					<div class="col-lg-5 col-md-8">
						<form action="{{ route('weather.store') }}" method="GET" id="weatherForm">
							@method('GET')
							@csrf
							<div class="input-group mb-2">
								<span class="input-group-text " id="basic-addon1">Latitude</span>
								<input type="text" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" placeholder="Latitude" id="lat" name="lat" aria-label="Latitude" aria-describedby="basic-addon1">
							</div>
							<div class="input-group mb-2">
								<span class="input-group-text" id="basic-addon2">Longitude</span>
								<input type="text" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" placeholder="Longitude" id="lon" name="lon" aria-label="Longitude" aria-describedby="basic-addon2">
							</div>
							<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" id="btnFetchWeather">Fetch<i class="bi bi-cloud-download ms-3"></i></button>
						</form>
					</div>
				</div>
            </div>

            <div class="p-3 sm:p-8 bg-white shadow sm:rounded-lg">
				<div class="input-group mb-2">
					<span class="input-group-text" id="country">Location</span>
					<input type="text" class="form-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" placeholder="Unknown" id="location" name="location" aria-label="Location" aria-describedby="country" readonly="">
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
						<div class="p-3 border-bottom border-end border-start rounded-bottom">
							<div class="d-flex flex-wrap gap-3" id="navCurrent">
								<div class="text-normal">Please click <b>FETCH button</b> above in order to fetch the weather information.</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
						<div class="p-3 border-bottom border-end border-start rounded-bottom">
							<div class="d-flex flex-wrap gap-3" id="navDaily">
								<div class="text-normal">Please click <b>FETCH button</b> above in order to fetch the weather information.</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
						<div class="p-3 border-bottom border-end border-start rounded-bottom">
							<div class="d-flex flex-wrap gap-3" id="navHourly">
								<div class="text-normal">Please click <b>FETCH button</b> above in order to fetch the weather information.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</x-app-layout>