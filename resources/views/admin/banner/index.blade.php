@extends('layouts.app')

@section('heading')
Banner
@endsection

@section('content')

<div class="flex justify-end">
    <a href="{{ route('admin.banner.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg mb-3">Add Banner</a>
</div>
@endsection