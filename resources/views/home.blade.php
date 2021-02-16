@extends('template.main')
@section('contentHero')
    @include('partial.home.HeroSection')
@endsection
@section('content')
@include('partial.home.FeaturedServicesSection')
@include('partial.home.ServicesSection')
@endsection