@extends('layouts.app', ['activePage' => 'customer', 'titlePage' => __('create a customer')])
@section('content')
<h1>Create customer</h1>
<div class="container">
<form action="{{route('admin.customers.store')}}" method ="POST">
    @csrf
First Name <input type="text" name="fname" placeholder="First Name"> <br>
Last Name <input type="text" name="lname" placeholder="Last Name"> <br>
National Number <input type="text" name="national_id" placeholder="National Number"> <br>
Phone <input type="text" name="phone" placeholder="First Name"> <br>
Country <input type="text" name="country" placeholder="country"> <br>
<input type="submit" value="submit">
</form>
</div>
@endsection
