@extends ('layouts.app')


@section('heading')
    Create Project
@endsection


@section('content')
@include('layouts.message')
<div>
    <h1 class="text-5xl justify-center flex font-bold">Create Form</h1>
</div>
<div class="p-5">
    <form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="grid grid-cols-2 gap-20 px-20">
            <div>
                <label for="">Project Title</label>
                <input value="{{old('title')}}" name="title" type="text" class= " rounded md w-full my-2" >
                @error('title')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
    
            </div>
            <div>
                <label for="">Project Image</label>
                <input value="{{old('image')}}" name="image" type="file" class= " rounded md w-full my-2">
                @error('image')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-2 gap-20 px-20">
            <div>
                <label for="">Priority</label>
                <input value="{{old('priority')}}" name="priority" type="text" class= " rounded md w-full my-2" placeholder="Enter Priority">
                @error('priority')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="">Description</label>
                <input value="{{old('descripton')}}" name="descripton" type="text" class= " rounded md w-full my-2" placeholder="Enter Description">
                @error('Description')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
        </div>
    
        <div class="my-2 justify-center flex gap-2">

            <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
            <a href="{{route('admin.project.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

        </div>

    </form>

</div>

@endsection