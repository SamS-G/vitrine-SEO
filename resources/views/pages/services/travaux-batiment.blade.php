@extends('layouts.app')
@section('url')
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['travaux-batiment']['title'] }}"
            description="{!! $siteData['service']['travaux-batiment']['description'] !!}"
            :advantages="$siteData['service']['travaux-batiment']['advantages']"
            :gallery="$siteData['service']['travaux-batiment']['gallery']"
            :faq="$siteData['service']['travaux-batiment']['faq']"
        />
    </section>
@endsection
