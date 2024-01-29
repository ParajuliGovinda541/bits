@extends('layouts.app')




@section('heading')
Category 
@endsection

@section('content')


<section>
    <div class="flex justify-end">
        <a href="{{ route('admin.category.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Category</a>
    </div>
    
    
    <div>
        <h1 class="text-5xl text-center font-bold">List Of Category</h1>
        <div>
            <table id="myTable">
                <thead>
                    <th>S.N</th>
                    <th>Category Title</th>
                    <th>Category Priority</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
    
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_priotity }}</td>

                          
                                <a href="{{route('admin.category.edit',$category->id)}}" class="bg-blue-600 text-xl text-white px-3 py-1 rounded-lg">Edit</a>
                                <a href="{{route('admin.category.destroy',$category->id)}}" onclick="return confirm('Are you sure want to delete ?')" class="bg-red-600 text-xl text-white px-1 py-1 rounded-lg">Delete</a>
                            </td>
    
    
    
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
    
</section>


<script>
    let table = new DataTable('#myTable');
</script>   
@endsection