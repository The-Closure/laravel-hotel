@extends('layouts.app', ['activePage' => 'Room Service', 'titlePage' => __('ROOM SERVICE')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('admin.roomservice.store') }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Room Service') }}</h4>
                                <p class="card-category">{{ __('Room Service') }}</p>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Name_en') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name_en') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}"
                                                name="name_en" id="input-name" type="text" placeholder="{{ __('Name_en') }}"
                                                value="{{ old('name_en', auth()->user()->name) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('name_en'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name_ar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name_ar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name_ar') ? ' is-invalid' : '' }}"
                                                name="name_ar" id="input-name" type="text" placeholder="{{ __('Name_ar') }}"
                                                value="{{ old('name_ar', auth()->user()->name) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('name_ar'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('name_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('description_en') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description_en') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description_en') ? ' is-invalid' : '' }}"
                                                name="description_en" id="input-description" type="text"
                                                placeholder="{{ __('description_en') }}"
                                                value="{{ old('description_en', auth()->user()->description) }}" required />
                                            @if ($errors->has('description_en'))
                                                <span id="description-error" class="error text-danger"
                                                    for="input-description">{{ $errors->first('description_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div><div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('description_ar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description_ar') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description_ar') ? ' is-invalid' : '' }}"
                                                name="description_ar" id="input-description" type="text"
                                                placeholder="{{ __('description_ar') }}"
                                                value="{{ old('description_ar', auth()->user()->description) }}" required />
                                            @if ($errors->has('description_ar'))
                                                <span id="description-error" class="error text-danger"
                                                    for="input-description">{{ $errors->first('description_ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                name="price" id="input-price" type="number"
                                                placeholder="{{ __('price') }}"
                                                value="{{ old('price', auth()->user()->price) }}" required />
                                            @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger"
                                                    for="input-price">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('status') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}"
                                                name="status" id="input-status" type="text"
                                                placeholder="{{ __('status') }}"
                                                value="{{ old('status', auth()->user()->status) }}" required />
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger"
                                                    for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
