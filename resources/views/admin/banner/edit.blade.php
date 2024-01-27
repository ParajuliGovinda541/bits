@extends ('layouts.app')

@section('heading')
    Edit banner
@endsection

@section('content')


    <div>
        <h1 class="text-5xl justify-center flex font-bold">Edit banner Form</h1>
    </div>
    <div class="p-5">
        <form action="{{route('admin.banner.update',$banner->id)}}" method="POST">
                @csrf
            <div>
                <label for="">Banner title</label>
                <input name="banner_title" value="{{$banner->banner_title}}" type="text" class= " rounded md w-full my-2" >
                @error('banner_title')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror

            </div>
            <div class="flex items-center gap-5">
                {{-- <label for="">banner Image</label> --}}
                <img src="{{ asset('images/banner/' . $banner->banner_image) }}" class= " rounded md w-32 my-2">
                <input name="banner_image" type="file" class="rounded w-full my-2">
                @error('banner_image')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <select name="banner_show" id="" class= " rounded md w-full my-2">
                    <option value="1">Show</option>
                    <option value="">Hide</option>

                </select>
            </div>
            <div class="my-2 justify-center flex gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{route('admin.banner.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
