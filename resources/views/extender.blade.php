@extends('base')
@section("Home", "Contact Us")
@section("header")
@include("parts/header", [
    "navigation" => [
            "Home" => "/",
            "Shop" => "/shop",
            "Contact" => "/contact",
            "About"    => "/about"
        ]
    ])
@endsection

@section("sidebar")
<div class="card">
    <div>
        <img src="" alt="" srcset="">
    </div>
    <div>
        @yield("default", " Default Side bar text ")
    </div>
</div>
@endsection

<x-alert type="success">
    Content
</x-alert>