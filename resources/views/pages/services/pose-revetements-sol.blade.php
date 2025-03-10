@extends('layouts.app')

@section('content')
    <section>
        <x-service
            title="{{ $siteData['service']['pose-revetements-sol']['title'] }}"
            description="{!! $siteData['service']['pose-revetements-sol']['description'] !!}"
            :advantages="$siteData['service']['pose-revetements-sol']['advantages']"
            :gallery="$siteData['service']['pose-revetements-sol']['gallery']"
            :faq="$siteData['service']['pose-revetements-sol']['faq']"
        />
    </section>
@endsection
