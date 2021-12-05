@extends('layouts.app', ['activePage' => 'Room Service', 'titlePage' => __('Room Service')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <a class="nav-link" href="{{route('admin.roomservice.create')}}">
                <button class="btn btn-primary btn-round">Add Room Service</button>
                </a>

            </div>
        </div>
    </div>
@endsection
