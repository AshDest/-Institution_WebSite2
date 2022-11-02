<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Left sidebar -->
                    <div class="page-aside-left">
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="save">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nom de l'Auteur</label>
                                <input type="text" class="form-control @error('noms') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="noms de l'auteur" wire:model='noms'>
                                @error('titre')
                                <div class="invalid-feedback" style="font-size: 10px; "><i
                                        class="fa fa-exclamation-triangle"></i>&ensp;{{
                                    $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Citation
                                    L'Evenement</label>
                                <textarea class="form-control @error('citation') is-invalid @enderror"
                                    wire:model='citation' id="exampleFormControlTextarea1" rows="3"></textarea>
                                @error('citation')
                                <div class="invalid-feedback" style="font-size: 10px; "><i
                                        class="fa fa-exclamation-triangle"></i>&ensp;{{
                                    $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fonction ou Grade</label>
                                <input type="text" class="form-control @error('grade') is-invalid @enderror"
                                    id="exampleFormControlInput1" placeholder="grade de l'Auteur" wire:model='grade'>
                                @error('grade')
                                <div class="invalid-feedback" style="font-size: 10px; "><i
                                        class="fa fa-exclamation-triangle"></i>&ensp;{{
                                    $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo de l'Auteur</label>
                                <input class="form-control @error('avatar') is-invalid @enderror" wire:model='avatar'
                                    type="file" id="formFile">
                                @error('avatar')
                                <div class="invalid-feedback" style="font-size: 10px; "><i
                                        class="fa fa-exclamation-triangle"></i>&ensp;{{
                                    $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Ajouter une Citation</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Left sidebar -->
                    <div class="page-aside-right">
                        <table class="table table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Noms</th>
                                    <th>Citations</th>
                                    <th>Active?</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($citations as $citation)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td class="table-user">
                                        <img src="assets/images/users/avatar-2.jpg" alt="table-user"
                                            class="me-2 rounded-circle" />
                                        {{$citation->noms}}
                                    </td>
                                    <td>{{$citation->citation}}</td>
                                    @if ($citation->active == 1)
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch01" checked data-switch="success" />
                                            <label for="switch01" data-on-label="Yes" data-off-label="No"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch01" checked data-switch="success" />
                                            <label for="switch01" data-on-label="Yes" data-off-label="Yes"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                    @endif
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
