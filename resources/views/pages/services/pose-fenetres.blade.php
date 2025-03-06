@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-fenetres']['title'] }}"
            description="{!! $siteData['services']['pose-fenetres']['description'] !!}"
            :advantages="$siteData['services']['pose-fenetres']['advantages']"
            :gallery="$siteData['services']['pose-fenetres']['gallery']"
            :faq="$siteData['services']['pose-fenetres']['faq']"
        />
    </section>
@endsection
