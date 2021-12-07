@extends('layouts.app', ['activePage' => 'rooms', 'titlePage' => __('Room')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.rooms.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Room information') }}</h4>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('admin.rooms.edit', $room) }}"
                                            class="btn btn-sm btn-primary">Edit
                                            room</a>
                                    </div>
                                </div>
                                <div class="row">
                                    Number : {{ $room->number }} <br>
                                    Beds : {{ $room->beds }} <br>
                                    Price : {{ $room->price }}$ <br>
                                    Story : {{ $room->story }} <br>
                                    Arabic Room Type : {{ $room->roomType->getTranslation('name', 'ar') }} <br>
                                    English Room Type : {{ $room->roomType->name }} <br>
                                    Arabic Status : {{ $room->getTranslation('status', 'ar') }} <br>
                                    English Status : {{ $room->status }} <br>
                                    Arabic description : <br> {{ $room->getTranslation('description', 'ar') }} <br>
                                    English description : <br> {{ $room->description }} <br>
                                    Created at : {{ $room->created_at }}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
