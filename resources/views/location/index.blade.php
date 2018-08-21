@extends('layouts.app')

@section('title')
    /Locations
@endsection

@section('page_header')
    Locations
@endsection

@section('content')
<div class="col-xs-4">
        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                            <tr>
                                <th>Country</th>
                            </tr>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{{$country->name}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-xs-4">
        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                            <tr>
                                <th>City</th>
                            </tr>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{$city->name}}</td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-xs-4">
        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Area</th>
                        </tr>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$area->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection