@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['services']['pose-moustiquaires']['title'] }}"
            description="{!! $siteData['services']['pose-moustiquaires']['description'] !!}"
            :advantages="$siteData['services']['pose-moustiquaires']['advantages']"
            :gallery="$siteData['services']['pose-moustiquaires']['gallery']"
            :faq="$siteData['services']['pose-moustiquaires']['faq']"
        />
    </section>
@endsection
