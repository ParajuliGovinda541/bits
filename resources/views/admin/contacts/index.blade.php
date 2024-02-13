@extends ('layouts.app')


@section('heading')
    Contact
@endsection

@section('content')
   @include('layouts.message')



    <div>

        <table id="myTable">
            <thead>
                {{-- <th>S.N</th> --}}
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>

                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td><div class="h-20 overflow-auto">{{ $contact->message }}</div></td>
                        <td>{{ $contact->message_date }}</td>
                        <td>
                            <a onclick="showDelete('{{ $contact->id }}')"
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
        <form action="{{ route('admin.contacts.destroy') }}" method="POST"
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
