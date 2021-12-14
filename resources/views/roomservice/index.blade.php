@extends('layouts.app', ['activePage' => 'Room Service', 'titlePage' => __('Room Service')])

@section('content')
    <div class="content">
        <div class="container-fluid">

                  <div class="row">
                      <form action="{{route('admin.roomservice.search')}}" method="GET">
                        @csrf
                        @method('get')
                     <input type="text"  name='search' class="form-control" placeholder="Search...">
                        <button type="submit"  class="btn btn-white btn-round btn-just-icon">
                         <i class="material-icons">search</i>
                    </button>
                      </form>
                     </div>
                     @can('create room services',$services)
            <ul class="nav justify-content-end">
             <li class="nav-item">
                <a class="nav-link" href="{{route('admin.roomservice.create')}}">
                <button class="btn btn-primary btn-round btn-rt">Add Room Service</button>
                </a>
             </li>
            </ul>
            @endcan
                <div class="row">
                    @foreach ($services as $service)

                    <div class="col-md-6">
                            <a href="{{route('admin.roomservice.show',$service)}}">
                            <div class="card">
                                <div class="card-header card-header-danger">
                                    <h4 class="card-title">{{__($service->name)}}</h4>
                                    <p class="category">Status : {{__($service->status)}}</p>
                                    @can('show room service price',$service)
                                    <p class="category">
                                        Price : {{__($service->price)}}
                                    </p>
                                    @endcan
                                </div>
                                <div class="card-body">
                                   Description: {{__($service->description)}}
                                </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        {{$services->links("pagination::bootstrap-4")}}
                    </div>
               </div>
           </div>
 @endsection
