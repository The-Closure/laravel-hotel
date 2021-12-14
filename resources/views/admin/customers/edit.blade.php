@extends('layouts.app', ['activePage' => 'Edit a customer', 'titlePage' => __('Edit a customer')])
@section('content')
<h1>Create customer</h1>
<div class="container">
<form action="{{route('admin.customers.update' , $customer->id)}}" method ="POST">
    @csrf
    @method('PUT')
First Name <input type="text" name="fname" placeholder="First Name" value="{{$customer->fname}}"> <br>
Last Name <input type="text" name="lname" placeholder="Last Name" value="{{$customer->lname}}"> <br>
National Number <input type="text" name="national_id" placeholder="National Number" value="{{$customer->national_id}}"> <br>
Phone <input type="text" name="phone" placeholder="First Name" value="{{$customer->phone}}"> <br>
Country <input type="text" name="country" placeholder="country" value="{{$customer->country}}"> <br>
<input type="submit" value="submit">
</form>
</div>
@endsection
