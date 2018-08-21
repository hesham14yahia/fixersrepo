@extends('layouts.app')

@section('title')
    /Category
@endsection

@section('page_header')
    Category
@endsection

@section('content')
<div class="col-xs-4">
        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                            <tr>
                                <th>Category</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection