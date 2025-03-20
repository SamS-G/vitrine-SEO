@extends('layouts.app')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-portes-garage']['title'] }}"
            description="{!! $siteData['service']['pose-portes-garage']['description'] !!}"
            :advantages="$siteData['service']['pose-portes-garage']['advantages']"
            :gallery="$siteData['service']['pose-portes-garage']['gallery']"
            :faq="$siteData['service']['pose-portes-garage']['faq']"
        />
    </section>
@endsection
