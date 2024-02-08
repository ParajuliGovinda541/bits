@extends ('layouts.app')


@section('heading')
    Create Product
@endsection


@section('content')
    @include('layouts.message')
    <div>
        <h1 class="text-5xl justify-center flex font-bold">Create Form</h1>
    </div>

    <div class="p-5">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-20 px-20">
                <div>
                    <label for="">Product Name</label>
                    <input value="{{ old('name') }}" name="name" type="text" class= " rounded md w-full my-2">
                    @error('name')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="">Product Image</label>
                    <input value="{{ old('image') }}" name="image" type="file" class= " rounded md w-full my-2">
                    @error('image')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-20">
                <div>
                    <label for="">Product Description</label>
                    <input value="{{ old('description') }}" name="description" type="text"
                        class= " rounded md w-full my-2" placeholder="Enter description">
                    @error('description')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Stock</label>
                    <input value="{{ old('stock') }}" name="stock" type="text" class= " rounded md w-full my-2">
                    @error('stock')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-20">
                <div>
                    <label for="">Product Price</label>
                    <input value="{{ old('price') }}" name="price" type="text" class= " rounded md w-full my-2"
                        placeholder="Enter price">
                    @error('price')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Discounted Price</label>
                    <input value="{{ old('discounted_price') }}" name="discounted_price" type="text"
                        class= " rounded md w-full my-2" placeholder="Enter discounted_price">
                    @error('discounted_price')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 items-center my-5 px-20">
                <div class="">
                    <label for="">Select Category</label>
                    <select name="category_id" id="" class="w-full">
                        @foreach ($categories as $category)
                            <option class="text-black" value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="my-2 px-20 gap-2">

                    <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                    <a href="{{ route('admin.product.index') }}" class="bg-red-600 px-5 rounded-md text-white py-2">
                        Cancel</a>

                </div>
            </div>

        </form>

    </div>
@endsection
