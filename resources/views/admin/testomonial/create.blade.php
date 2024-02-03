@extends ('layouts.app')

@section('heading')
    Create Testomonial
@endsection

@section('content')
    @include('layouts.message')



    <div class="p-5 justify-center flex ">
        <form action="{{ route('admin.testomonial.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center gap-10">
                <div>
                    <label for="">Name</label>
                    <input value="{{ old('client_name') }}" name="client_name" type="text" class= " rounded md w-full my-2">
                    @error('client_name')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="">Company</label>
                    <input value="{{ old('client_company') }}" name="client_company" type="text" class= " rounded md w-full my-2">
                    @error('client_company')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Priority</label>
                    <input value="{{ old('client_priority') }}" name="client_priority" type="text" class= " rounded md w-full my-2">
                    @error('client_priority')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
             
            </div>
            <div>
                <label for="">Word</label>
                <textarea value="{{ old('client_word') }}" name="client_word" type="text" class= " rounded md w-full my-2"></textarea>
                @error('client_word')
                    <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="">Choose Image</label>
                <input value="{{ old('client_image') }}" name="client_image" type="file" class= " rounded md w-full my-2"
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
