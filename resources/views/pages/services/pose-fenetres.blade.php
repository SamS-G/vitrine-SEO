@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-fenetres']['title'] }}"
            description="{!! $siteData['service']['pose-fenetres']['description'] !!}"
            :advantages="$siteData['service']['pose-fenetres']['advantages']"
            :gallery="$siteData['service']['pose-fenetres']['gallery']"
            :faq="$siteData['service']['pose-fenetres']['faq']"
        />
    </section>
@endsection
