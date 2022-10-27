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
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
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

{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @livewire('admin.create-post')
        </div>
    </div>
</div> --}}
