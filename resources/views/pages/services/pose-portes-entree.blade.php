@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-portes-entree']['title'] }}"
            description="{!! $siteData['service']['pose-portes-entree']['description'] !!}"
            :advantages="$siteData['service']['pose-portes-entree']['advantages']"
            :gallery="$siteData['service']['pose-portes-entree']['gallery']"
            :faq="$siteData['service']['pose-portes-entree']['faq']"
        />
    </section>
@endsection
