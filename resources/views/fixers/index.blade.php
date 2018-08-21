@extends('layouts.app')

@section('filters')
        <div class="col-xs-3">
            {!! Form::open(['action' => 'FixerController@index', 'method' => 'Get']) !!}
                {{Form::select('city_id', $cities, null, ['class' => 'form-control', 'placeholder' => 'Filter By City'])}}
                {{Form::submit('Filter', ['class' => 'btn btn-info col-xs-12 btn-filter'])}}
            {!! Form::close() !!}
            {{-- {{Form::hidden('_method', 'PUT')}} --}}
        </div>
        <div class="col-xs-3">
            {!! Form::open(['action' => 'FixerController@index', 'method' => 'GET']) !!}
                {{Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Filter By Category'])}}
                {{Form::submit('Filter', ['class' => 'btn btn-info col-xs-12 btn-filter'])}}
            {!! Form::close() !!}
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