@extends('include/master')
@extends('include/header')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>

<style>
.card{
    margin-top:8%;
}



</style>

</head>
<body>

@section('content')


<div class=" card">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
            <img src="https://www.thehindu.com/news/national/6pi2of/article34446079.ece/ALTERNATES/LANDSCAPE_1200/RT-PCR-" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">PCR TEST</h5>
            <p class="card-text">If you have any of (COVID-19) symptoms, use this service to get a polymerase chain reaction (PCR) test as soon as possible:.</p>
            <a href="{{route('pcr')}}" class="btn btn-success">Click</a>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
            <img src="http://www.dailynews.lk/sites/default/files/news/2021/02/25/vaccine_photo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">VACCINE</h5>
            <p class="card-text">Equitable access to safe and effective vaccines is critical to ending the COVID-19 pandemic, so it is hugely encouraging to see so many vaccines proving and going into development.  </p>
            <a href="{{route('vaccine')}}" class="btn btn-success">Click</a>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
            <img src="https://economynext.com/wp-content/uploads/2020/04/coronavirus-curfew-roablock-sri-lanka-lg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">PASS</h5>
            <p class="card-text">Following an island-wide travel restriction, the Government of Sri Lanka have announced new health guidelines which will be in place until 5 July 2021.  .</p>
            <a href="{{route('pass')}}" class="btn btn-success">Click</a>
            </div>
            </div>
        </div>


    </div>
</div>

@endsection
</body>
</html>