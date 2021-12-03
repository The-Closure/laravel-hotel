<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    @include('partials.navigation')
</head>
@section('title' , 'create a customer')

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
