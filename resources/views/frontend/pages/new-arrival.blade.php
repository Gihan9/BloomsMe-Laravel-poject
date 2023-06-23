@extends('layouts.app')

@section('title', 'new Arrivals')
@section('content')

<div class="py-5 bg-white">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h4>New Arrivals</h4>
            </div>
               

                
                
                    
                    @forelse($newArrivalProducts as $productItem)
                    <div class="col-md-3">

                            <div class="product-card">
                                <div class="product-card-img">

                               
                                    
                                    <label class="stock bg-success">New</label>
                                

                                @if($productItem->productImages->count()> 0)
                                <a href="{{url('/collections/'.$productItem->category->slug.'/'.$productItem->slug)}}">
                                    <img src="{{asset($productItem->productImages[0]->image)}}" alt="{{$productItem->name }}">
                                </a>
                                @endif
                                </div>
                                <div class="product-card-body">
                                    
                                    <h5 class="product-name">
                                    <a href="{{url('/collections/'.$productItem->category->slug.'/'.$productItem->slug)}}">
                                            {{$productItem->name }}
                                    </a>
                                    </h5>
                                    <div>
                                        <span class="selling-price">Rs.{{$productItem->selling_price }}</span>
                                        <span class="original-price">Rs.{{$productItem->original_price }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                    </div> 
                        @empty
                        <div class="col-md-12 p-2">
                        <h4>no products available</h4>
                                                    </div>
                        @endforelse
                         
               
                
               
            </div>
        </div>
    </div>

@endsection