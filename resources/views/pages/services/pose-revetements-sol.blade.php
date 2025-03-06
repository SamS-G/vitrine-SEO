@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-revetements']['title'] }}"
            description="{!! $siteData['services']['pose-revetements']['description'] !!}"
            :advantages="$siteData['services']['pose-revetements']['advantages']"
            :gallery="$siteData['services']['pose-revetements']['gallery']"
            :faq="$siteData['services']['pose-revetements']['faq']"
        />
    </section>
@endsection
