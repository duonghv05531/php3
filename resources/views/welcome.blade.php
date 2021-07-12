@extends('layouts.app')
@section('title','PET SHOP')
@section('content')
<!-- about start -->
@include('layouts.about')
<!-- About End -->
<!-- Services Start -->
@include('layouts.service')
<!-- Services End -->


<!-- Products Start -->
@include('layouts.product')
<!-- Products End -->


<!-- Offer Start -->
@include('layouts.offer')
<!-- Offer End -->

<!-- Pricing Plan Start -->
@include('layouts.pricing')
<!-- Pricing Plan End -->


<!-- Team Start -->
@include('layouts.team')
<!-- Team End -->


<!-- Testimonial Start -->
@include('layouts.client')
<!-- Testimonial End -->


<!-- Blog Start -->
@include('layouts.blog')
<!-- Blog End -->
@endsection