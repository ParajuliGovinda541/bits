@extends ('layouts.app')

@section('heading')
    Create Notice
@endsection

@section('content')


    <div>
        <h1 class="text-5xl justify-center flex font-bold">Notice Form</h1>
    </div>
    <div class="p-5">
        <form action="{{route('admin.notice.store')}}" method="POST">
                @csrf
            <div>
                <label for="">Notice Text</label>
                <input value="{{old('notice_text')}}" name="notice_text" type="text" class= " rounded md w-full my-2" >
                @error('notice_text')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror

            </div>
            <div>
                <label for="">Notice Date</label>
                <input value="{{old('notice_date')}}" name="notice_date" type="date" class= " rounded md w-full my-2">
                @error('notice_date')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="">Priority</label>
                <input value="{{old('priority')}}" name="priority" type="text" class= " rounded md w-full my-2" placeholder="Enter Priority">
                @error('priority')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <select name="show" id="" class= " rounded md w-full my-2">
                    <option value="1">Show</option>
                    <option value="0">Hide</option>

                </select>
            </div>
            <div class="my-2 justify-center flex gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{route('admin.notice.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
