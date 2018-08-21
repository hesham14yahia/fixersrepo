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

@section('content')
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
                                    <td style="width:10%">
                                        <img class="img-responsive text-center fixer-img" src="/storage/image_bath/{{$fixer->image_bath}}">
                                    </td>
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
                                {{--<!-- Start POPUP -->
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-4 col-xs-offset-1">
                                                            <img class="img-responsive text-center img-thumbnail" src="/storage/image_bath/{{$fixer->image_bath}}">
                                                    </div>
                                                    <div class="col-xs-6 popup-h">
                                                        <h3>{{$fixer->name}}</h3>
                                                        <p><strong>ID: {{$fixer->id}}</strong></p>
                                                        <p>Birthday: {{$fixer->birth_date}}</p>
                                                        <p>City: {{$fixer->city->name}}</p>
                                                        <p>Area: 
                                                            @foreach($fixer->areas as $area)
                                                                {{$area->name}} 
                                                            @endforeach
                                                        </p>
                                                        <p>Category: {{$fixer->category->name}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End POPUP --> --}}
                            @endforeach
                        @endif
                     </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection