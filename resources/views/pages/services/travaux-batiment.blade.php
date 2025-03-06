@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['travaux-batiment']['title'] }}"
            description="{!! $siteData['services']['travaux-batiment']['description'] !!}"
            :advantages="$siteData['services']['travaux-batiment']['advantages']"
            :gallery="$siteData['services']['travaux-batiment']['gallery']"
            :faq="$siteData['services']['travaux-batiment']['faq']"
        />
    </section>
@endsection
