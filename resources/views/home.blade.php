@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            {{ __(!empty($title)?$title : 'Dashboard') }}
                        </div>
                        <div>
                            @yield('right_header')
                        </div>
                    </div>

                    <div class="card-body">
                        @yield('challenge')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
