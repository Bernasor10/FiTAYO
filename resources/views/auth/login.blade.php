@extends('base')
@section('title', 'Login')

@section('content')
    
    <form action="{{route('login.POST')}}" method="post">
        @csrf
        <div class="row"><h3 class="text-center">Login</h3><br></div>
        <br>
        <div class="row">   
            <div class="col-3">
                <label for="email" class="form-label text-center my-auto">Email: </label>
            </div>
            <div class="col-9">
                <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">   
            <div class="col-3">
                <label for="password" class="form-label text-center my-auto">Password: </label>
            </div>
            <div class="col-9">
                <input type="password" name="password" id="password" class="form-control">
            </div>
        </div>
        <br>
        <div class="row"><button type="submit" class="btn btn-primary">Submit</button></div>
        
    </form>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session()->has('success'))
    <br>
    <div class="row">
        <div class="alert alert-warning alert-dismissible">
            {{session('success')}}
          </div>
    </div><br>
    @endif
@endsection
