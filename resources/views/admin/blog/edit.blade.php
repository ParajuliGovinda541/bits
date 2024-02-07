@extends ('layouts.app')


@section('heading')
    Edit Blog
@endsection


@section('content')
    @include('layouts.message')
    <div>
        <h1 class="text-5xl justify-center flex font-bold">Edit Form</h1>
    </div>

    <div class="p-5">
        <form action="{{ route('admin.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-2 gap-20 px-20">
                <div>
                    <label for="">Blog Title</label>
                    <input value="{{ $blog->title }}" name="title" type="text" class= " rounded md w-full my-2">
                    @error('title')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror

                </div>
                <div>
                    <label for="">Blog Image</label>
                    <input value="{{ $blog->image }}" name="image" type="file" class= " rounded md w-full my-2">
                    @error('image')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-20">
                <div>
                    <label for="">Priority</label>
                    <input value="{{ $blog->priority}}" name="priority" type="text" class= " rounded md w-full my-2"
                        placeholder="Enter Priority">
                    @error('priority')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Description</label>
                    <input value="{{ $blog->description}}" name="description" type="text"
                        class= " rounded md w-full my-2" placeholder="Enter Description">
                    @error('Description')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-20 ">
                <div>
                    <label for="">Blog Links</label>
                    <input value="{{ $blog->links}}" name="links" type="text" class= " rounded md w-full my-2"
                        placeholder="Enter links">
                    @error('links')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Blog Dates</label>
                    <input value="{{ $blog->blog_date}}" name="blog_date" type="date" class= " rounded md w-full my-2"
                        placeholder="Enter Date">
                    @error('blog_date')
                        <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="px-20">
                <label for="">Blog Author</label>
                <input value="{{ $blog->author}}" name="author" type="text" class= " rounded md w-full my-2"
                    placeholder="Enter Author">
                @error('author')
                    <p class="text-red-500 -mt-2 text-sm">* {{ $message }}</p>
                @enderror
            </div>
            <div class="my-2 justify-center flex gap-2">

                <input type="submit" class="bg-green-600 px-5 rounded-md text-white py-2">
                <a href="{{ route('admin.blog.index') }}" class="bg-red-600 px-5 rounded-md text-white py-2"> Cancel</a>

            </div>

        </form>

    </div>
@endsection
