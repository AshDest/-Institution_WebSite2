@extends('layouts.app_dashbord')
@section('content')
@livewire('admin.news.edit-news', ['ids' => $ids])
@endsection
