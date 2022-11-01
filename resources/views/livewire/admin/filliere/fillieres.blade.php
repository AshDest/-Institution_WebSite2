<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Filliieres</a></li>
                        <li class="breadcrumb-item active">All Fillieres</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des Fillières</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <a href="{{route('addfilliere')}}" class="btn btn-success">Ajouter Fillière</a>
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
                                    <th>IMAGE</th>
                                    <th>DESIGNATION</th>
                                    <th>DETAIL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($fillieres as $filliere)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td class="table-user">
                                        <img src="assets/images/fillieres/{{$filliere->photo}}" alt="table-user"
                                            class="me-2 rounded-circle" />
                                    </td>
                                    <td class="text-success">{{$filliere->designation}}</td>
                                    <td>{{$filliere->detail}}</td>
                                    <td class="table-action">
                                        <a href="{{ route('editfilliere', ['ids'=>$filliere->id]) }}"
                                            class="action-icon text-primary">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a href="" class="action-icon text-danger"
                                            wire:click="delete({{ $filliere->id }})"> <i class="mdi mdi-delete"></i></a>
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
