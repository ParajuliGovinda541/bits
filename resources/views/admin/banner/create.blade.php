@extends ('layouts.app')


@section('heading')
Create Banner
@endsection

@section('content')

<div>
    <h1 class="text-center text-5xl font-bold font-mono">Add Banner</h1>
</div>
<section class="px-10">
    <form action="{{route('admin.banner.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div>
        <label for="">Banner Title</label>
        <input type="text" placeholder="Banner Title" class="w-full rounded-lg my-2" name="banner_title">
    </div>
    <div class="flex items-center">
        <div>
            <label for="">Banner Image</label>
            <input type="file" placeholder="Banner Title" class="w-full  my-2" name="banner_image">
        </div>
        <div> 
            <label for="">Status</label>
            <select name="banner_show" id="" class="w-full ">
                <option value="1">Show</option>
                <option value="0">Hide</option>


            </select>
        </div>
    </div>

    <div>
        <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
        <a href="{{route('admin.banner.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>
    </div>
    </form>
</section>

@endsection