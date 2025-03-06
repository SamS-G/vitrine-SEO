@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-portes']['title'] }}"
            description="{!! $siteData['services']['pose-portes']['description'] !!}"
            :advantages="$siteData['services']['pose-portes']['advantages']"
            :gallery="$siteData['services']['pose-portes']['gallery']"
            :faq="$siteData['services']['pose-portes']['faq']"
        />
    </section>
@endsection
