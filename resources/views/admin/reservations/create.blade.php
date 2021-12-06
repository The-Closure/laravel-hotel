@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('admin.reservations.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Reservation') }}</h4>
                <p class="card-category">{{ __('this is the Reservation that you want to add') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Customer_First_Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('fname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" id="input-fname" type="text" placeholder="{{ __('First_Name') }}" />
                      @if ($errors->has('fname'))
                        <span id="fname-error" class="error text-danger" for="input-name">{{ $errors->first('fname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Customer_Last_Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('lname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" id="input-lname" type="string" placeholder="{{ __('Last_name') }}" required />
                      @if ($errors->has('lname'))
                        <span id="lname-error" class="error text-danger" for="input-lname">{{ $errors->first('lname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('National_ID') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('national_id') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="input-national_id" type="string" placeholder="{{ __('National ID of Customer') }}" required />
                      @if ($errors->has('national_id'))
                        <span id="national_id-error" class="error text-danger" for="input-national_id">{{ $errors->first('national_id') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="string" placeholder="{{ __('Country') }}" required />
                      @if ($errors->has('country'))
                        <span id="country-error" class="error text-danger" for="input-country">{{ $errors->first('country') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="tel" placeholder="{{ __('Customer Phone') }}" required />
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
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
          </form>
        </div>
      </div> --}}
    </div>
  </div>
@endsection