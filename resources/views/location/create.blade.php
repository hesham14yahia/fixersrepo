@extends('layouts.app')

@section('title')
    /Create Locations
@endsection

@section('page_header')
    Create Locations
@endsection --}}

@section('content')
    {{-- Country Form --}}
    {!! Form::open(['action' => 'LocationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('country', 'Country Name')}}
            {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <br><br><br>
    {{-- City Form --}}
    {!! Form::open(['action' => 'LocationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('city', 'City Name')}}
            {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('country_id', 'Country Name')}}
            {{Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <br><br><br>
    {{-- Area Form --}}
    {!! Form::open(['action' => 'LocationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('area', 'Area Name')}}
            {{Form::text('area', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('city_id', 'City Name')}}
            {{Form::select('city_id', $cities, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <br><br><br>
    {{-- Area Form --}}
    {!! Form::open(['action' => 'LocationController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('fixer_id', 'Fixer Name')}}
            {{Form::select('fixer_id', $fixers, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        <div class="form-group">
            {{Form::label('area_id', 'Area Name')}}
            {{Form::select('area_id', $areas, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection