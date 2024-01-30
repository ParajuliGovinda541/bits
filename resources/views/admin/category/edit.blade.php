@extends ('layouts.app')


@section('heading')
Edit Category
@endsection

@section('content')


<section class="px-10 ">
    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div>
        <label for="">Category Title</label>
        <input type="text" placeholder="category Title" class="w-full cursor-pointer rounded-lg my-2" name="category_name">
        @error('category_name')
        <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
            
        @enderror
    </div>
    <div>
        <label for="">Category Priority</label>
        <input type="text" placeholder="category Title" class="w-full cursor-pointer rounded-lg my-2" name="category_priotity">
        @error('category_priotity')
        <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
            
        @enderror
    </div>
   
    <div>
        <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
        <a href="{{route('admin.category.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>
    </div>
    </form>
</section>

@endsection