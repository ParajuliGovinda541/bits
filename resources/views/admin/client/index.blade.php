@extends('layouts.app')

@section('heading')
    Clients
@endsection

@section('content')
@include('layouts.message')

    <div class="flex justify-end">
        <a href="{{ route('admin.client.create') }}" class="py-2 px-4 bg-green-600 rounded-xl text-white font-bold">Add
            Clients</a>
    </div>

    <div>

        <table id="myTable">
            <thead>

                <th>Clients ID</th>
                <th>Images </th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td> <img class="h-20" src="{{ asset('images/clients/'.$client->image) }}" alt=""></td>
                        <td>
                            <a href="{{ route('admin.client.edit', $client->id) }}"
                                class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                            <a onclick="showDelete('{{ $client->id }}')"
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
        <form action="{{ route('admin.client.destroy') }}" method="POST"
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
        function showDelete(id) {
            document.getElementById('dataid').value=id;
            var deletePopup = document.getElementById('deletePopup');
            deletePopup.classList.remove('hidden');
            deletePopup.classList.add('flex');
        }

        function hideDelete() {
            var deletePopup = document.getElementById('deletePopup');
            deletePopup.classList.remove('flex');
            deletePopup.classList.add('hidden');
        }

        // var closeBtn = document.getElementById('closeBtn');
        // {
        //     deletePopup.style.display('none');
        // }
    </script>
@endsection
