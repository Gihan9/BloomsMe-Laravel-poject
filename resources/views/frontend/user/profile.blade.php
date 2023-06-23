@extends('layouts.app')

@section('title', 'User Profile')
@section('content')

<div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h4>User Profile</h4>
                </div>
                <div class="col-md-10">
                    @if(session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif

                    <div class="card shadow">
                        <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white">User Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('profile')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Username</label>
                                            <input type="text" name="username" value="{{Auth::user()->name}}" class="form-control"/>
                                        </div>
                                    </div>    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Email Address</label>
                                            <input type="text" readonly value="{{Auth::user()->email}}" class="form-control"/>
                                        </div>
                                    </div>    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" value="{{Auth::user()->userDetail->phone ?? ''}}" class="form-control"/>
                                        </div>
                                    </div>    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Pin Code</label>
                                            <input type="text" name="pin_code" value="{{Auth::user()->userDetail->pin_code ?? ''}}" class="form-control"/>
                                        </div>
                                    </div>  
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{Auth::user()->userDetail->address ?? ''}}" class="form-control"/>
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Save Data</button>
                                    </div>    
                                        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection