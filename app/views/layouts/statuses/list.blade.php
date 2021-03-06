@extends('layouts.without_sidebar')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form id="status-filter">
                <div class="row">
                    <div class="col-sm-3">
                        <input type='text' name='showname' placeholder="Username" class="form-control" value='' />
                    </div>
                    <div class="col-sm-3">
                        <input type='text' name='showpid' placeholder="Problem ID" class="form-control" />
                    </div>
                    <div class="col-sm-3">
                        <select name="showres" class="form-control">
                            <option value=''>All</option>
                            <option value='Accepted'>Accepted</option>
                            <option value='Wrong Answer'>Wrong Answer</option>
                            <option value='Runtime Error'>Runtime Error</option>
                            <option value='Time Limit Exceed'>Time Limit Exceed</option>
                            <option value='Memory Limit Exceed'>Memory Limit Exceed</option>
                            <option value='Output Limit Exceed'>Output Limit Exceed</option>
                            <option value='Presentation Error'>Presentation Error</option>
                            <option value='Restricted Function'>Restricted Function</option>
                            <option value='Compile Error'>Compile Error</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-xs-6">
                                <select name="showlang" class="form-control">
                                    <option value="">All</option>
                                    @foreach (LanguageName::all() as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <button type='submit' class="btn btn-primary pull-right">Show</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-hover" id="statuslist">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>RunID</th>
                        <th>PID</th>
                        <th>Result</th>
                        <th>Language</th>
                        <th>Time</th>
                        <th>Memory</th>
                        <th>Length</th>
                        <th>Submit Time</th>
                        <th>Visible</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@stop