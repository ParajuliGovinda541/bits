@extends ('layouts.app')

@section('heading')
    Create Notice
@endsection

@section('content')
@include('layouts.message')


    <div>
        <h1 class="text-5xl justify-center flex font-bold">Team Form</h1>
    </div>
    <div class="p-5">
        <form action="{{route('admin.team.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div>
                <label for="">Name</label>
                <input value="{{old('name')}}" name="name" type="text" class= " rounded md w-full my-2" >
                @error('name')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror

            </div>
            <label for="">Position</label>
            <input value="{{old('position')}}" name="position" type="text" class= " rounded md w-full my-2" >
            @error('position')
            <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
            @enderror

        </div>
            <div>
                <label for="">Choose Image</label>
                <input value="{{old('team_image')}}" name="team_image" type="file" class= " rounded md w-full my-2" placeholder="Enter team_image">
                @error('team_image')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div class="my-2 justify-center flex gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{route('admin.team.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
