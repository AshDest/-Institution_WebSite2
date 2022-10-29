<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Posts</a></li>
                        <li class="breadcrumb-item active">All Posts</li>
                    </ol>
                </div>
                <h4 class="page-title">All Posts</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <a href="{{route('addpost')}}" class="btn btn-success">Ajouter</a>
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
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($posts as $post)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td class="table-user">
                                        <img src="assets/images/post/{{$post->image}}" alt="table-user"
                                            class="me-2 rounded-circle" />
                                    </td>
                                    <td>{{$post->titre}}</td>
                                    <td>{{$post->content}}</td>
                                    <td class="table-action">
                                        <a href="{{ route('editpost', ['ids'=>$post->id]) }}" class="action-icon">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a href="" class="action-icon" wire:click="delete({{ $post->id }})"> <i
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
