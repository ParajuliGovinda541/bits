@extends ('layouts.app')

@section('heading')
    Edit Notice
@endsection

@section('content')


    <div>
        <h1 class="text-5xl justify-center flex font-bold">Edit Notice Form</h1>
    </div>
    <div class="p-5">
        <form action="{{route('admin.notice.update',$notice->id)}}" method="POST">
                @csrf
            <div>
                <label for="">Notice Text</label>
                <input name="notice_text" value="{{$notice->notice_text}}" type="text" class= " rounded md w-full my-2" >
                @error('notice_text')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror

            </div>
            <div>
                <label for="">Notice Date</label>
                <input name="notice_date" value="{{$notice->notice_date}}" type="date" class= " rounded md w-full my-2">
                @error('notice_date')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="">Priority</label>
                <input name="priority" value="{{$notice->priority}}" type="text" class= " rounded md w-full my-2" placeholder="Enter Priority">
                @error('priority')
                <p class="text-red-500 -mt-2 text-sm">* {{$message}}</p>
                @enderror
            </div>
            <div>
                <select name="show" id="" class= " rounded md w-full my-2">
                    <option value="1">Show</option>
                    <option value="">Hide</option>

                </select>
            </div>
            <div class="my-2 justify-center flex gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{route('admin.notice.index')}}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
