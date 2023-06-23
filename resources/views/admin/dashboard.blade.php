@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
       
          @if(session('message'))
          <h3 class="font-weight-bold">{{session('message')}},</h3>
          @endif
          <div class="me-md-3 me-xl-5">
            <h2>Dashboard</h2>
          </div>
          <div class="row">
              <div class="col-md-3">
                  <div class="card card-body bg-success text-white mb-3">
                    <label>Total Orders</label>
                    <h4>{{$totalOrder}}</h4>
                    <a href="{{url('admin/orders')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-warning text-white mb-3">
                    <label>Today Orders</label>
                    <h4>{{$todayOrder}}</h4>
                    <a href="{{url('admin/orders')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-danger text-white mb-3">
                    <label>This Month Orders</label>
                    <h4>{{$thisMonthOrder}}</h4>
                    <a href="{{url('admin/orders')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-primary text-white mb-3">
                    <label>This Year</label>
                    <h4>{{$thisYearOrder}}</h4>
                    <a href="{{url('admin/orders')}}" class="text-white">View</a>
                  </div>
              </div>
             
          </div>

          <div class="row">
              <div class="col-md-3">
                  <div class="card card-body bg-success text-white mb-3">
                    <label>Total All Users</label>
                    <h4>{{$totalAllUsers}}</h4>
                    <a href="{{url('admin/users')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Users</label>
                    <h4>{{$totalUser}}</h4>
                    <a href="{{url('admin/users')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-danger text-white mb-3">
                    <label>Total Admin</label>
                    <h4>{{$totalAdmin}}</h4>
                    <a href="{{url('admin/users')}}" class="text-white">View</a>
                  </div>
              </div>
              
          </div>
           
          <div class="row">
              <div class="col-md-3">
                  <div class="card card-body bg-success text-white mb-3">
                    <label>Total Products</label>
                    <h4>{{$totalProducts}}</h4>
                    <a href="{{url('admin/products')}}" class="text-white">View</a>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-body bg-primary text-white mb-3">
                    <label>Total Categories</label>
                    <h4>{{$totalCategories}}</h4>
                    <a href="{{url('admin/category')}}" class="text-white">View</a>
                  </div>
              </div>
             
              
          </div>
    </div>
</div>

@endsection