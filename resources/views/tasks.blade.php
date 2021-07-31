@extends('home')

@section('challenge')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">{{__('challenge.id')}}</th>
            <th scope="col">{{__('challenge.tasks.name')}}</th>
            <th scope="col">{{__('challenge.tasks.user')}}</th>
            <th scope="col">{{__('challenge.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->name}}</td>
                <td>{{$users->firstWhere('id', $task->user_id)->name}}</td>
                <td>
                    @if($task->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                        <a href="#" class="btn btn-primary btn-rounded">Primary</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection