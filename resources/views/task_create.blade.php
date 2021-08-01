@extends('home')

@section('challenge')
    <form action="{{route('store_task')}}" method="POST">
        @csrf
        <input type="hidden" value="{{Auth::user()->id}}" name="author_id">
        <div class="form-group">
            <label for="name">{{__('challenge.tasks.name')}}</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                   aria-describedby="nameHelp"
                   placeholder="{{__('challenge.tasks.name')}}">
            <small id="nameHelp" class="form-text text-muted">{{__('challenge.tasks.name_help')}}</small>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">{{__('challenge.tasks.description')}}</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                      name="description"
                      placeholder="{{__('challenge.tasks.description')}}"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="max_date">{{__('challenge.tasks.max_date')}}</label>
            <input type="date" class="form-control @error('max_date') is-invalid @enderror" id="max_date" name="max_date"
                   data-max_date-format="dd/mm/yyyy"
                   placeholder="{{__('challenge.tasks.max_date')}}" min="now">
            @error('max_date')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="user_id">{{__('challenge.user')}}</label>
            <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('task_list')}}" class="btn btn-info">{{__('challenge.back')}}</a>
    </form>
@endsection
@push('js')
    <script>
        var today = new max_date();
        var dd = today.getmax_date();
        var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("max_date").setAttribute("min", today);
    </script>
@endpush
