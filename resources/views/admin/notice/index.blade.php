@extends ('layouts.app')


@section('heading')
    Notice
@endsection
@section('content')
    @if (session()->has('success'))
        <div id="message" class="fixed right-5 top-2">
            <div class="bg-green-500 text-white py-2 px-5 rounded">
                <p class="text-2xl"><i class="ri-checkbox-circle-fill"></i> {{ session('success') }}</p>
            </div>
        </div>
        <script>
            $('#message').delay(2000).fadeOut();
        </script>
    @endif

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
                            <a href="{{ route('admin.notice.edit', $notice->id) }}"
                                class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                            <a onclick="showDelete('{{ $notice->id }}')"
                                class="bg-red-600 text-xl text-white px-1 py-1 rounded-lg cursor-pointer">Delete</a>
                        </td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{-- delete modal --}}
    <div class="hidden items-center justify-center inset-0 bg-blue-600 fixed backdrop-blur-sm bg-opacity-50 "
        id="deletePopup">
        <form action="{{ route('admin.notice.destroy') }}" method="POST"
            class="shadow-2xl shadow-white w-4/12 mx-auto  p-10 relative rounded-md ">
            @csrf
            @method('DELETE')
            <h1 class="text-2xl text-center uppercase font-bold">Are You sure want to delete ?</h1>

            <div class="text-center my-10">
                <input type="hidden" name="dataid" id="dataid" class="text-center ">

                <input class="text-xl bg-red-600 px-4 py-1 rounded-xl uppercase mr-2 text-center cursor-pointer"
                    type="submit" value="yes">
                <a onclick="hideDelete()"
                    class="text-xl bg-green-600 px-4 py-1 rounded-xl uppercase mr-2 text-center cursor-pointer"
                    type="submit" value="no">No</a>
            </div>

        </form>
        <i class="ri-close-circle-fill cursor-pointer  text-red-600 text-3xl absolute right-[500px]  top-56"
            id="closeBtn"></i>

    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>

    <script>
        function showDelete(id)
        // var closeBtn = document.getElementById('closeBtn');
        {
            document.getElementById('dataid').value = id;
            var deletePopup = document.getElementById('deletePopup');
            deletePopup.classList.remove('hidden');
            deletePopup.classList.add('flex');

        }


        function hideDelete()
        // var closeBtn = document.getElementById('closeBtn');
        {
            var deletePopup = document.getElementById('deletePopup');
            deletePopup.classList.remove('flex');
            deletePopup.classList.add('hidden');

        }
    </script>
@endsection
