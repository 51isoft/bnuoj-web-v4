@extends('layouts.without_sidebar')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if (Auth::check())
                <div class="btn-group unsolved-btns">
                    <button class="btn btn-info active" unsolved='0'>All</button>
                    <button class="btn btn-info" unsolved='1'>Unsolved</button>
                </div>
            @endif
            <div class="btn-group stat-btns">
                <button class="btn btn-info" stat='0'>Local Stat</button>
                <button class="btn btn-info" stat='1'>Remote Stat</button>
                <button class="btn btn-info" stat='2'>Remote User Stat</button>
            </div>
            <div class="btn-group">
                <select class="form-control" id="selectoj">
                    <option value="">All</option>
                    @foreach (OJInfo::all() as $oj)
                        <option value="{{{ $oj->name }}}">{{{ $oj->name }}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-hover" id="problist">
                <thead>
                    <tr>
                        <th>Flag</th>
                        <th>PID</th>
                        <th class="title" width="25%">Title</th>
                        <th class="source" width="23%">Source</th>
                        <th>AC</th>
                        <th>All</th>
                        <th>AC</th>
                        <th>All</th>
                        <th>AC(U)</th>
                        <th>All(U)</th>
                        <th>OJ</th>
                        <th>VID</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop