@include('livewire.admin.add_post')
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
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter</button>
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
                                    <th>Titre</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                <tr>
                                    {{-- <td class="table-user">
                                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                                        Risa D. Pearson
                                    </td> --}}
                                    <td>{{$post->titre}}</td>
                                    <td>{{$post->content}}</td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    <center> . . . Liste vide . . .</center>
                                </div>
                                @endforelse
                                {{-- <tr>
                                    <td class="table-user">
                                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                                        Risa D. Pearson
                                    </td>
                                    <td>AC336 508 2157</td>
                                    <td>July 24, 1950</td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" />
                                        Ann C. Thompson
                                    </td>
                                    <td>SB646 473 2057</td>
                                    <td>January 25, 1959</td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" />
                                        Paul J. Friend
                                    </td>
                                    <td>DL281 308 0793</td>
                                    <td>September 1, 1939</td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-user">
                                        <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" />
                                        Sean C. Nguyen
                                    </td>
                                    <td>CA269 714 6825</td>
                                    <td>February 5, 1994</td>
                                    <td class="table-action">
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
