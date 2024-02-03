@extends ('layouts.app')

@section('heading')
    Edit Testomonial
@endsection

@section('content')
    @include('layouts.message')



    <div class="p-5 justify-center flex ">
        <form action="{{ route('admin.testomonial.update',$testomonial->id) }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center gap-10">
                <div>
                    <label for="">Name</label>
                    <input  name="client_name" value="{{$testomonial->client_name}}" type="text" class= " rounded md w-full my-2">
                    @error('client_name')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="">Company</label>
                    <input  value="{{$testomonial->client_company}}"" name="client_company" type="text" class= " rounded md w-full my-2">
                    @error('client_company')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Priority</label>
                    <input  value="{{$testomonial->client_priority}}"" name="client_priority" type="text" class= " rounded md w-full my-2">
                    @error('client_priority')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
             
            </div>
            <div>
                <label for="">Word</label>
                <textarea name="client_word" value="" type="text" class= " rounded md w-full my-2">{{$testomonial->client_word}}</textarea>
                @error('client_word')
                    <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="">Choose Image</label>
                <input  name="client_image" value="{{$testomonial->client_image}}"" type="file" class= " rounded md w-full my-2"
                    placeholder="Enter client_image">
                @error('client_image')
                    <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                @enderror
            </div>

    
            <div class="my-2  gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{ route('admin.testomonial.index') }}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
