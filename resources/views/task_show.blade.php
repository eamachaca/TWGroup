@extends('home')

@section('right_header')
    <a href="{{route('create_log',$task->id)}}" class="btn btn-primary btn-rounded">{{__('challenge.logs.create')}}</a>
@endsection
@section('challenge')

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">{{__('challenge.id')}}</th>
            <th scope="col">{{__('challenge.logs.name')}}</th>
            <th scope="col">{{__('challenge.logs.created_at')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($task->logs as $log)
            <tr>
                <td>{{$log->id}}</td>
                <td>{{$log->name}}</td>
                <td>{{$log->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
