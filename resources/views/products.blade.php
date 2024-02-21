@extends('layouts.master')

@section('content')
    <section>
        <h1 class="text-3xl text-center my-5 font-bold">Our Products</h1>
    </section>

    <section>
        @foreach ($products as $product)
            <div class="grid grid-cols-4 px-20 gap-20 my-10">
                <div class="shadow p-2 rounded-md">
                    <img class="rounded-t-md w-full h-40 bg-cover object-cover"
                        src="{{ asset('images/products/' . $product->image) }}"" alt="">
                    <div class=" text-xl flex justify-between">
                        <p>{{$product->price}}</p>
                        <p>{{$product->discounted_price}}</p>
                    </div>
                    <div class=" text-md flex justify-between">
                        <p>{{$product->name}}</p>
                        <p>Category</p>
                    </div>
                    <div class="text-center">
                        <Button class="text-center bg-red-500 hover:bg-red-600 px-2 py-1 text-white font-bold ">Add To
                            Cart</Button>
                    </div>
                    <div>
                        Rating
                    </div>
                </div>
            </div>
        @endforeach

    </section>
@endsection
