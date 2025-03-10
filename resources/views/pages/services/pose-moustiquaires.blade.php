@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-moustiquaires']['title'] }}"
            description="{!! $siteData['service']['pose-moustiquaires']['description'] !!}"
            :advantages="$siteData['service']['pose-moustiquaires']['advantages']"
            :gallery="$siteData['service']['pose-moustiquaires']['gallery']"
            :faq="$siteData['service']['pose-moustiquaires']['faq']"
        />
    </section>
@endsection
