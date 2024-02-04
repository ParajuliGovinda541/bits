@extends('layouts.app')

@section('heading')
    Teams
@endsection

@section('content')
@include('layouts.message')

<div class="flex justify-end">
    <a href="{{ route('admin.team.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Team</a>
</div>

<div>

    <table id="myTable">
        <thead>
            <th>ID</th>
            <th>Member Name</th>
            <th>Member Priority</th>
            <th>Member Position</th>
            <th>Member Image</th>
            <th>Facebook Link</th>
            <th>Instagram Link</th>
            <th>Twitter Link</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{$team->id }}</td>

                    <td class="font-bold uppercase">{{$team->name }}</td>
                    <td class="font-bold uppercase">{{$team->priority }}</td>
                    <td class="font-bold uppercase">{{$team->position }}</td>

                    <td><img src="{{asset('images/team/'.$team->team_image )}}" class="h-20" alt="" srcset=""></td>
                    <td class="font-bold uppercase">{{$team->facebook }}</td>
                    <td class="font-bold uppercase">{{$team->instagram }}</td>
                    <td class="font-bold uppercase">{{$team->twitter }}</td>

                    <td>
                        <a href="{{ route('admin.team.edit', $team->id) }}"
                            class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                        <a onclick="showDelete('{{ $team->id }}')"
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
  <form action="{{ route('admin.team.destroy') }}" method="POST"
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