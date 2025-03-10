@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-portails']['title'] }}"
            description="{!! $siteData['service']['pose-portails']['description'] !!}"
            :advantages="$siteData['service']['pose-portails']['advantages']"
            :gallery="$siteData['service']['pose-portails']['gallery']"
            :faq="$siteData['service']['pose-portails']['faq']"
        />
    </section>
@endsection
