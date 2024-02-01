@extends('layouts.app')

@section('heading')
    Clients
@endsection

@section('content')
@include('layouts.message')
   
   <form action="{{route('admin.client.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="my-5 px-10">
        <div>
            <label for="">Priority</label>
            <input type="text" class="w-full rounded-md border-gray-800 " placeholder="Enter Number" name="priority">
            @error('priority')
                <p class="text-red-600">*{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="">Choose Image</label>
            <input type="file" class="w-full rounded-md border-gray-800 " placeholder="Enter Number" name="image">
            @error('image')
                <p class="text-red-600">*{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mt-5 gap-5">
            <div>
                <input type="submit" class=" px-4 py-1 text-white rounded-md bg-green-600 " >
            </div>
            <div>
                <a href="{{route('admin.client.index')}}" class=" px-4 py-2 text-white rounded-md bg-green-600 " >Cancel</a>
            </div>
        </div>
    </div>
   </form>
@endsection
