@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-volets']['title'] }}"
            description="{!! $siteData['services']['pose-volets']['description'] !!}"
            :advantages="$siteData['services']['pose-volets']['advantages']"
            :gallery="$siteData['services']['pose-volets']['gallery']"
            :faq="$siteData['services']['pose-volets']['faq']"
        />
    </section>
@endsection
