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
                    City
                  </th>
                  <th>
                    Room
                  </th>
                  <th>
                    Offer
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
                {{-- <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-primary">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-primary">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-primary">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-primary">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-primary">
                      $78,615
                    </td>
                  </tr>
                </tbody> --}}
                <tbody>
                    <tr>
                        @foreach ($reservations as $reservation)
                            <tr>
                            <td>{{$reservation->id}}</td>
                            <td>{{$reservation->user_id}}</td>
                            <td>{{$reservation->user_id}}</td>
                            <td>{{$reservation->room_id}}</td>
                            <td>{{$reservation->offer_id}}</td>
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