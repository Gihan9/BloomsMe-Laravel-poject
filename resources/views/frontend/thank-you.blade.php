@extends('layouts.app')

@section('title', 'Thank YOU for Shopping')
@section('content')

<div class="py-3 pyt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="p-4 shadow bg-white">
                    <h2></h2>
                <h4>Thak You for Shoping with BloomsMe...</h4>
                <a href="{{url('collections')}}" class="btn btn-primary">Shop Now</a>
                </div>
                
            </div>
        </div>
    </div>
</div>



@endsection