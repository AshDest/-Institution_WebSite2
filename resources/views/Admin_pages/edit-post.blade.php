@extends('layouts.app_dashbord')
@section('content')
@livewire('admin.post.edit-post', ['ids' => $ids])
@endsection
