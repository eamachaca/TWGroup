@extends('home')

@section('challenge')
    <form action="{{route('store_log')}}" method="POST">
        @csrf
        <input type="hidden" value="{{$task->id}}" name="task_id">
        <div class="form-group">
            <label for="name">{{__('challenge.logs.name')}}</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                   aria-describedby="nameHelp"
                   placeholder="{{__('challenge.logs.name')}}">
            <small id="nameHelp" class="form-text text-muted">{{__('challenge.logs.name_help')}}</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="comments">{{__('challenge.logs.comments')}}</label>
            <textarea class="form-control @error('comments') is-invalid @enderror" id="comments"
                      name="comments"
                      placeholder="{{__('challenge.logs.comments')}}"></textarea>
            @error('comments')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('log_list',$task->id)}}" class="btn btn-info">{{__('challenge.back')}}</a>
    </form>
@endsection
