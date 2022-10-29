<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Option</a></li>
                        <li class="breadcrumb-item active">All Option</li>
                    </ol>
                </div>
                <h4 class="page-title">All Option</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <a href="{{route('addoption')}}" class="btn btn-success">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Designation Option</th>
                                    <th>Detail sur Option</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($options as $option)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$option->designation}}</td>
                                    <td>{{$option->detail}}</td>
                                    <td class="table-action">
                                        <a href="{{ route('editoption', ['ids'=>$option->id]) }}" class="action-icon">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a href="" class="action-icon" wire:click="delete({{ $option->id }})"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    <center> . . . Liste vide . . .</center>
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
