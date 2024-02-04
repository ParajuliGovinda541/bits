@extends('layouts.app')

@section('heading')
    testomonials
@endsection

@section('content')
@include('layouts.message')

<div class="flex justify-end">
    <a href="{{ route('admin.testomonial.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Testomonial</a>
</div>

<div>

    <table id="myTable">
        <thead>
            <th>ID</th>
            <th>Client Name</th>
            <th>Client Image</th>
            <th>Client Company</th>
            <th>Client Word</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($testomonials as $testomonial)
                <tr>
                    <td>{{$testomonial->id }}</td>

                    <td class="font-bold uppercase">{{$testomonial->client_name }}</td>
                    <td><img src="{{asset('images/testomonial/'.$testomonial->client_image )}}" class="h-20" alt="" srcset=""></td>

                    <td class="font-bold uppercase">{{$testomonial->client_company }}</td>
                    <td class="font-bold uppercase text-sm line-clamp-3">{{$testomonial->client_word }}</td>

                    <td>
                        <a href="{{ route('admin.testomonial.edit', $testomonial->id) }}"
                            class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                        <a onclick="showDelete('{{ $testomonial->id }}')"
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
  <form action="{{ route('admin.testomonial.destroy') }}" method="POST"
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