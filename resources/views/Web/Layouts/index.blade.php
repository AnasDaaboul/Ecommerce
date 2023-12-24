
@extends('Web.Layouts.main')
@section('title' , 'Home')
@section('styles')


@endsection
@include('Web.Layouts.nav' , ['user' => $user])
@include('Web.Components.header')
<div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
@section('content')
   @include('Web.Components.pre_loader')

    @include('Web.Components.content-card')
    @include('Web.Components.Featured-items')
    @include('Web.Components.Recent-items')
    @include('Web.Components.features')
    @include('Web.Components.Footer')
</div>
