@extends('layouts.app')

@section('title')
    /Create Category
@endsection

@section('page_header')
    Create Category
@endsection --}}

@section('content')
    {{-- Area Form --}}
    {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('category', 'Category Name')}}
            {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    <br><br><br>
    {{-- Fixer Form --}}
    {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('fixer_id', 'Fixer Name')}}
            {{Form::select('fixer_id', $fixers, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        <div class="form-group">
            {{Form::label('cat_id', 'Category Name')}}
            {{Form::select('cat_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection