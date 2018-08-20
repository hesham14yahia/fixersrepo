@extends('layouts.app')

@section('filters')
    <div class="col-xs-4">
        {!! Form::open(['url' => 'foo/bar']) !!}
            <select class="form-control">
                <option value selected disabled>Filter By City</option>
                @foreach($cities as $city)
                    <option>
                        {{$city->name}}
                    </option>
                @endforeach
            </select>
        {!! Form::close() !!}
    </div>
    <div class="col-xs-4">
        <select class="form-control">
            <option value selected disabled>Filter By Area</option>
            @foreach($areas as $area)
                <option>
                    {{$area->name}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-xs-4">
        <select class="form-control">
            <option value selected disabled>Filter By Category</option>
            @foreach($categories as $category)
                <option>
                    {{$category->name}}
                </option>
            @endforeach
        </select>
    </div>
@endsection

@section('table')
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Category</th>
                        </tr>
                        
                        @if(count($fixers) > 0)
                            @foreach($fixers as $fixer)
                                <tr>
                                    <td>{{$fixer->id}}</td>
                                    <td><img class="img-responsive" src="/storage/images/{{$fixer->image_bath}}"></td>
                                    <td>{{$fixer->name}}</td>
                                    <td>{{$fixer->birth_date}}</td>
                                    <td>{{$fixer->city->name}}</td>
                                    <td>
                                        @foreach($fixer->areas as $area)
                                            {{$area->name}} 
                                        @endforeach
                                    </td>
                                    <td>{{$fixer->category->name}}</td>
                                </tr>
                            @endforeach
                        @endif
                     </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection