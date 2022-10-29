@extends('layouts.app_dashbord')
@section('content')
@livewire('admin.filliere.edit-fillieres', ['ids' => $ids])
@endsection
