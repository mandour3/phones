@extends('layouts.main')

@section('content')


        <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        افضل موقع لبيع المنتجات الامريكيه من افخم الشركات 
                    </p>
                </div>
                <div class="row align-items-center">
                  @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="product-img">
                            <a href="{{route('single_product',['id'=>$product->id])}}">  <img src="{{asset('img/'.$product->image)}}" alt="Product Image"></a>
                               
                            </div>
                            <div class="product-content">
                                <h2><a href="{{route('single_product',['id'=>$product->id])}}"> {{$product->name}}</a></h2>
                                <a href="{{route('single_product',['id'=>$product->id])}}">   @if ($product->sale_price != null)
                                    <h3>${{$product->sale_price}}</h3>
                                    <h3 style="text-decoration : line-through;">${{$product->price}}</h3>
                                     @else
                                           <h3>${{$product->price}}</h3>
                                @endif</a>
                             
                               
                                <a class="btn" href="{{route('single_product',['id'=>$product->id])}}">Buy</a>
                                <a class="btn" style="margin: 10px;" href="{{route('single_product',['id'=>$product->id])}}">Show More</a>
                                
                            </div>
                        </div>
                    </div>
             @endforeach
                </div>

            </div>
        </div>
        <!-- Products End -->
        
        

@endsection