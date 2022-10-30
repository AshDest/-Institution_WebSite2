@extends('layouts.app_dashbord')
@section('content')
@livewire('admin.event.edit-event', ['ids' => $ids])
@endsection
