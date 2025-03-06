@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['depannage-volets']['title'] }}"
            description="{!! $siteData['services']['depannage-volets']['description'] !!}"
            :advantages="$siteData['services']['depannage-volets']['advantages']"
            :gallery="$siteData['services']['depannage-volets']['gallery']"
            :faq="$siteData['services']['depannage-volets']['faq']"
        />
    </section>
@endsection
