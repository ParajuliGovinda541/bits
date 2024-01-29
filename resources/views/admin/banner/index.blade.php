@extends('layouts.app')

@section('heading')
Banner
@endsection

@section('content')



<div class="flex justify-end">
    <a href="{{ route('admin.banner.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Banner</a>
</div>


<div>
    <h1 class="text-5xl text-center font-bold">List Of Banners</h1>
    <div>
        <table id="myTable">
            <thead>
                <th>S.N</th>
                <th>Banner Title</th>
                <th>Banner Image</th>
                <th>Banner Show </th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>

                        <td>{{ $banner->banner_title }}</td>
                        <td><img class="w-20" src="{{ asset('images/banner/'.$banner->banner_image) }}" alt=""></td>
                            <td>{{ $banner->banner_show ? 'show' : 'Hidden' }}</td>
                        <td>
                            <a href="{{route('admin.banner.edit',$banner->id)}}" class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                            <a href="{{route('admin.banner.destroy',$banner->id)}}" onclick="return confirm('Are you sure want to delete ?')" class="bg-red-600 text-xl text-white px-1 py-1 rounded-lg">Delete</a>
                        </td>



                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<script>
    let table = new DataTable('#myTable');
</script>
@endsection