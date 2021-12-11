@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Reservations')])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">All Reservations</h4>
            <p class="card-category"> This is the Page that Show you all of you Reservations</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Customer
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Room Number
                  </th>
                  <th>
                    Offer
                  </th>
                  <th>
                    Paid
                  </th>
                  <th>
                    Started_at
                  </th>
                  <th>
                    Ended_at
                  </th>
                  <th>
                    Paid_at
                  </th>
                  <th>
                    Cancelled_at
                  </th>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($reservations as $reservation)
                            <tr>
                            <td>{{$reservation->id}}</td>
                            <td>{{$reservation->user->name}}</td>
                            <td>{{$reservation->price}}</td>
                            <td>{{$reservation->room->number}}</td>
                            <td>{{$reservation->offer->name}}</td>
                            <td>{{$reservation->paid}}</td>
                            <td>{{$reservation->started_at}}</td>
                            <td>{{$reservation->ended_at}}</td>
                            <td>{{$reservation->paid_at}}</td>
                            <td>{{$reservation->canceled_at}}</td>
                            </tr>
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
