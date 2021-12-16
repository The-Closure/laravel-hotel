@extends('layouts.app', ['activePage' => 'room-service-requests', 'titlePage' => __('All Requests')])

@section('content')
    <div class="content">
        <div class="container-fluid">
                <div class="row">
                     <div class="col-md-12">
                         <form action="{{ route('admin.room-service-requests.index') }}" >
                           <div class="form-check">
                                 <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="done_requests"> Done Requests
                                   <span class="form-check-sign" >
                                    <span class="check"></span>
                                        </span>
                                      </label>
                                    <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox" name="undone_requests" > Undone Requests
                                      <span class="form-check-sign" >
                                           <span class="check"></span>
                                           </span>
                                     </label>
                                <button type="submit" class="btn btn-primary" >submit</button>
                                            </div>
                                        </form>
                     </div>
                                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('All Requests') }}</h4>
                            <p class="card-category">{{ __('List') }}</p>
                        </div>
                        <div class="card-body ">
                            @if (session('success'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('success') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif


                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                               Room Service Name
                                            </th>
                                            <th>
                                                Employee Name
                                            </th>
                                            <th>
                                                Customer Name
                                            </th>
                                            <th>
                                                Room Number
                                            </th>
                                            <th>
                                                Notes
                                            </th>
                                            <th>
                                                Created_at
                                            </th>
                                            <th>
                                                Done_at
                                            </th>

                                            <th class="text-center">
                                                Action
                                             </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roomServicesRequests as $key => $roomServiceRequest )
                                        <tr>
                                                <td>
                                                    {{ $roomServiceRequest['Roomservicename'] }}
                                                </td>
                                                <td>
                                                    {{ $roomServiceRequest['Employeename'] }}
                                                </td>
                                                <td>
                                                    {{ $roomServiceRequest['Customername'] }}
                                                </td>
                                                <td>
                                                    {{ $roomServiceRequest['Roomnumber'] }}
                                                </td>
                                                <td >
                                                    {{ $roomServiceRequest['Notes'] }}
                                                </td>
                                                <td>
                                                    {{ $roomServiceRequest['created_at'] }}
                                                </td>
                                                 <td>
                                                    {{ $roomServiceRequest['done_at']}}
                                                </td>

                                                <td class="td-actions text-right">
                                                    <form action="{{ route('admin.room-service-requests.destroy', $roomSeviceRequests[$key] )}}" method="post" >
                                                        @method('delete')
                                                        @csrf
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('admin.room-service-requests.edit', $roomSeviceRequests[$key]) }}"
                                                            data-original-title="" title="" >
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <button type="submit" class="btn-danger btn btn-link">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                                {{-- {{ $roomSeviceRequest->links() }} --}}
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection