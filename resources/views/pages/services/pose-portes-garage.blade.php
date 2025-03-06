@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-portes-garage']['title'] }}"
            description="{!! $siteData['services']['pose-portes-garage']['description'] !!}"
            :advantages="$siteData['services']['pose-portes-garage']['advantages']"
            :gallery="$siteData['services']['pose-portes-garage']['gallery']"
            :faq="$siteData['services']['pose-portes-garage']['faq']"
        />
    </section>
@endsection
