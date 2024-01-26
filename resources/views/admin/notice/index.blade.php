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
