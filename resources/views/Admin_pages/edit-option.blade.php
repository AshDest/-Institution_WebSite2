@extends('layouts.app_dashbord')
@section('content')
@livewire('admin.option.edit-option', ['ids' => $ids])
@endsection
