@extends('layouts.app')

@section('filters')
    <div class="col-xs-4">
        <select class="form-control">
            <option value selected disabled>Filter By Country</option>
        </select>
    </div>
    <div class="col-xs-4">
        <select class="form-control">
            <option value selected disabled>Filter By City</option>
        </select>
    </div>
    <div class="col-xs-4">
        <select class="form-control">
            <option value selected disabled>Filter By Area</option>
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
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Photo</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Category</th>
                        </tr>
                        <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td>iamge</td>
                            <td>Bacon ipsum </td>
                            <td>Bacon ipsum </td>
                            <td>Bacon ipsum </td>
                        </tr>
                     </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection