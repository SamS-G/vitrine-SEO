@extends('layouts.app')
@section('title', 'Zone Géographique - JD Travaux Services')

@section('content')
    <x-prestations-par-ville
        :ville="$ville"
        :prestations="$services"
    />
@endsection
