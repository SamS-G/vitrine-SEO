@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-portails']['title'] }}"
            description="{!! $siteData['services']['pose-portails']['description'] !!}"
            :advantages="$siteData['services']['pose-portails']['advantages']"
            :gallery="$siteData['services']['pose-portails']['gallery']"
            :faq="$siteData['services']['pose-portails']['faq']"
        />
    </section>
@endsection
