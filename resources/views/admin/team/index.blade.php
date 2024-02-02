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
            <th>Member Position</th>
            <th>Member Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{$team->id }}</td>

                    <td class="font-bold uppercase">{{$team->name }}</td>
                    <td class="font-bold uppercase">{{$team->position }}</td>
                    <td><img src="{{asset('images/team/'.$team->team_image )}}" class="h-20" alt="" srcset=""></td>
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



<script>
    let table = new DataTable('#myTable');
</script>
@endsection