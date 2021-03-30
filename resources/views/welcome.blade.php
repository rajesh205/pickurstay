@extends('layouts.app') 
@section('title', 'Pickurstay | Home') 
@section('content')
<main class="py-4 background-image">
    <div class="container search-box">
        <div class="row">
            <div class="col-md-12">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            <input type="text" name="city" class="form-control col-md-4 search_column"> 
                            <input type="text" name="city" class="form-control col-md-2 search_column">
                            <input type="text" name="city" class="form-control col-md-2 search_column">
                            <input type="text" name="city" class="form-control col-md-3 search_column"> 
                            <input type="submit" value="Search" class="btn btn-warning search_column search_btn col-md-1">
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>
<main class="py-4">
    <div class="container-fluid text-center">    
      <div class="row content">
        <div class="col-md-2 box-first">
            <div class="styledHOC-sc-1ghue5c-0 gNEhaf  child-div covid-heading"><figure class="Imagestyle__Figure-sc-1i6pdxk-0 icYScs"><span class="LoadImagesHocstyle-sc-1u5eo4j-0 dRZtPC"><img alt="Best-in-class measures for your safe stay" class="" src="https://static.fabhotels.com/homepage/disruption/safe-stay-shieldV1.png" style="opacity: 1;"></span></figure><h3 style="color: rgb(18, 19, 25);">Best-in-class measures for your safe stay</h3><span class="link-arrow" style="color: rgb(55, 154, 255);">See how<span></span></span></div>
        </div>
        <div class="col-md-3 box-home box-home-1">
            <div class="covid-wrap">
                <h2 style="color: rgb(16, 17, 23);">100% Disinfected</h2>
                <ul class="precautions">
                    <li >
                        Sanitization every 2 hours
                    </li>
                    <li style="color: rgb(66, 67, 73);">Hospital grade cleaning chemicals</li>
                    <li style="color: rgb(66, 67, 73);">Masks, latex gloves for all staff</li>
                    <li style="color: rgb(66, 67, 73);">Linen/utensils washed in 70°C+ water</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 box-home box-home-2">
            <div class="covid-wrap">
                <h2 style="color: rgb(16, 17, 23);">100% Disinfected</h2>
                <ul class="precautions">
                    <li >
                        Sanitization every 2 hours
                    </li>
                    <li style="color: rgb(66, 67, 73);">Hospital grade cleaning chemicals</li>
                    <li style="color: rgb(66, 67, 73);">Masks, latex gloves for all staff</li>
                    <li style="color: rgb(66, 67, 73);">Linen/utensils washed in 70°C+ water</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 box-home box-home-3">
            <div class="covid-wrap">
                <h2 style="color: rgb(16, 17, 23);">100% Disinfected</h2>
                <ul class="precautions">
                    <li >
                        Sanitization every 2 hours
                    </li>
                    <li style="color: rgb(66, 67, 73);">Hospital grade cleaning chemicals</li>
                    <li style="color: rgb(66, 67, 73);">Masks, latex gloves for all staff</li>
                    <li style="color: rgb(66, 67, 73);">Linen/utensils washed in 70°C+ water</li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection