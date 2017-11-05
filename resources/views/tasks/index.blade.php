@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">T A S K</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->body}}</td>
                                <td>
                                    Edit
                                    |
                                    Delete
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
