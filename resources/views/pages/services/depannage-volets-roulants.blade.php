@extends('layouts.app')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['depannage-volets-roulants']['title'] }}"
            description="{!! $siteData['service']['depannage-volets-roulants']['description'] !!}"
            :advantages="$siteData['service']['depannage-volets-roulants']['advantages']"
            :gallery="$siteData['service']['depannage-volets-roulants']['gallery']"
            :faq="$siteData['service']['depannage-volets-roulants']['faq']"
        />
    </section>
@endsection
