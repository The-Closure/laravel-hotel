@extends('layouts.app', ['activePage' => 'Room Service', 'titlePage' => __('ROOM SERVICE')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @can('edit room services',$service)
                <ul class="nav justify-content-end">
                <li class="nav-item">
                     <a href="{{route('admin.roomservice.edit',$service)}}">
                     <button class="btn btn-round btn-primary">Edit</button>
                    </a>
                 </li>
                <li class="nav-item">
                    <form action="{{route('admin.roomservice.destroy',$service)}}" method="POST">
                        @csrf
                        @method('delete')

                        <button class="btn btn-round btn-danger" >Delete</button>

                    </form>
                </li>
                </ul>
                @endcan
            <div class="row">
                <div class="col-md-12">

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Show Room Service') }}</h4>
                                <p class="card-category">{{ __('Room Service') }}</p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name_en') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->getTranslation('name','en')}}</p>
                                    </div>
                                </div>
                                </div>
                                 <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Name_ar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->getTranslation('name','ar')}}</p>
                                    </div>
                                </div>
                                 </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description_en') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->getTranslation('description','en')}}</p>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description_ar') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->getTranslation('description','ar')}}</p>
                                    </div>
                                </div>
                                </div>
                         @can('show room service price',$service)
                            <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->price}}</p>
                                    </div>
                                </div>
                            </div>
                            @endcan
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <p class="form-control">{{$service->status}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
