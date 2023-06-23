@extends('layouts.app')

@section('title', 'home page')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">

        @foreach ($sliders as $key => $sliderItem)
            <div class="carousel-item {{ $key == 0 ? 'active':''}}">
                @if($sliderItem->image)
                <img src="{{asset($sliderItem->image)}}" class="d-block w-100" alt="...">
                @endif
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>{{$sliderItem->title}}</h1>
                        <p>{{$sliderItem->description}}</p>
                        <div>
                            <a href="#" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 test-center">
                    <h4>Welcome to BloomsMe</h4>
                   
                    <p>Welcome to fashion world..! try new fashions with bloomsme.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
            </div>
                @if($trendingProducts)

                
                <div class="col-md-12"><div class="owl-carousel owl-theme four-carousal">
                       @foreach($trendingProducts as $productItem)
                           <div class="item">

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
                            @endforeach
                        </div>   
                </div>
                @else
                <div class="col-md-12">
                            <div class="p-2">
                                <h4>no products available</h4>
                            </div>
                        </div>
                        @endif
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h4>New Arrivals</h4>
            </div>
                @if($newArrivalProducts)

                
                <div class="col-md-12"><div class="owl-carousel owl-theme four-carousal">
                       @foreach($newArrivalProducts as $productItem)
                           <div class="item">

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
                            @endforeach
                        </div>   
                </div>
                @else
                <div class="col-md-12">
                            <div class="p-2">
                                <h4>no New Arrivals Available</h4>
                            </div>
                        </div>
                        @endif
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
    $('.four-carousal').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>

@endsection