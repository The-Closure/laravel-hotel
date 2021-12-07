@extends('layouts.app', ['activePage' => 'roomTypes', 'titlePage' => __('RoomType')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.roomTypes.store') }}" autocomplete="off"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Room Type information') }}</h4>
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
                                        <a href="{{ route('admin.roomTypes.edit', $roomType) }}"
                                            class="btn btn-sm btn-primary">Edit
                                            room type</a>
                                    </div>
                                </div>
                                <div class="row">
                                    Arbic name : {{ $roomType->getTranslation('name', 'ar') }} <br>
                                    English name : {{ $roomType->getTranslation('name', 'en') }} <br>
                                    Price : {{ $roomType->price }}$ <br>
                                    Arabic description : <br> {{ $roomType->getTranslation('description', 'ar') }} <br>
                                    English description : <br> {{ $roomType->getTranslation('description', 'ar') }} <br>
                                    Created at : {{ $roomType->created_at }}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
