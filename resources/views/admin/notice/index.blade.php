@extends ('layouts.app')


@section('heading')
    Notice
@endsection
@section('content')
    <div class="flex justify-end">
        <a href="{{ route('admin.notice.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Notice</a>
    </div>

    <div>

        <table id="myTable">
            <thead>
                <th>S.N</th>
                <th>Order</th>
                <th>Notice Date</th>
                <th>Notice </th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($notices as $notice)
                    <tr>
                        <td>{{ $notice->id }}</td>

                        <td>{{ $notice->priority }}</td>
                        <td>{{ $notice->notice_date }}</td>
                        <td>{{ $notice->notice_text }}</td>
                        <td>{{ $notice->show ? 'show' : 'Hidden' }}</td>
                        <td>
                            <a href="{{route('admin.notice.edit',$notice->id)}}" class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                            <a href="{{route('admin.notice.destroy',$notice->id)}}" onclick="return confirm('Are you sure want to delete ?')" class="bg-red-600 text-xl text-white px-1 py-1 rounded-lg">Delete</a>
                        </td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>

@endsection

<div class="flex h-full items-center inset-0 bg-blue-500 fixed backdrop-blur-3xl bg-opacity-50 hidden" id="confirmCard">
<div class="shadow-2xl shadow-black    h-fit  w-4/12 mx-auto  p-10 relative ">
    <h1 class="text-2xl text-center uppercase font-bold">Are You sure want to delete ?</h1>


    <div class="text-center my-10">
        <input class="text-xl bg-red-600 px-4 py-1 rounded-xl uppercase mr-2 text-center" type="button" value="yes">
        <input class="text-xl bg-green-600 px-4 py-1 rounded-xl uppercase mr-2 text-center" type="button" value="no">
    </div>

</div>
<i class="ri-close-circle-fill cursor-pointer  text-red-600 text-3xl absolute right-[500px]  top-56" id="closeBtn"></i>

</div>

<script>
    var 
</script>
