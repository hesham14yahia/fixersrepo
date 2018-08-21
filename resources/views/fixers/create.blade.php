@extends('layouts.app')

@section('title')
    /Create Fixer
@endsection

@section('page_header')
    Create Fixer
@endsection

@section('content')
    {!! Form::open(['action' => 'FixerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('birth_date', 'Birthday')}}
            {{Form::date('birth_date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('city_id', 'City')}}
            {{Form::select('city_id', $cities, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        <div class="form-group">
            {{Form::label('category_id', 'Category')}}
            {{Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Filter By Category'])}}
        </div>
        <div class="form-group">
            {{Form::file('image_bath')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
