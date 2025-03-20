@extends('layouts.app')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-volets-roulants']['title'] }}"
            description="{!! $siteData['service']['pose-volets-roulants']['description'] !!}"
            :advantages="$siteData['service']['pose-volets-roulants']['advantages']"
            :gallery="$siteData['service']['pose-volets-roulants']['gallery']"
            :faq="$siteData['service']['pose-volets-roulants']['faq']"
        />
    </section>
@endsection
