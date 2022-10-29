<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">News</a></li>
                        <li class="breadcrumb-item active">All News</li>
                    </ol>
                </div>
                <h4 class="page-title">All News</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <a href="{{route('addnew')}}" class="btn btn-success">Ajouter un Communique</a>
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
                                    <th>TITRE DU COMMUNIQUE</th>
                                    <th>DETAIL DU COMMINIQUE</th>
                                    <th>DATE DE PUBLICATION</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($news as $vars)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$vars->titre}}</td>
                                    <td>{{$vars->detail}}</td>
                                    <td>{{$vars->created_at}}</td>
                                    <td class="table-action">
                                        <a href="{{ route('editnew', ['ids'=>$vars->id]) }}" class="action-icon">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a href="" class="action-icon" wire:click="delete({{ $vars->id }})"> <i
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
