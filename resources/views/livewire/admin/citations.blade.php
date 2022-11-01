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
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Active?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Risa D. Pearson</td>
                                    <td>336-508-2157</td>
                                    <td>July 24, 1950</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch01" checked data-switch="success" />
                                            <label for="switch01" data-on-label="Yes" data-off-label="No"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ann C. Thompson</td>
                                    <td>646-473-2057</td>
                                    <td>January 25, 1959</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch02" checked data-switch="success" />
                                            <label for="switch02" data-on-label="Yes" data-off-label="No"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch03" data-switch="success" />
                                            <label for="switch03" data-on-label="Yes" data-off-label="No"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Linda G. Smith</td>
                                    <td>606-253-1207</td>
                                    <td>May 3, 1962</td>
                                    <td>
                                        <!-- Switch-->
                                        <div>
                                            <input type="checkbox" id="switch04" data-switch="success" />
                                            <label for="switch04" data-on-label="Yes" data-off-label="No"
                                                class="mb-0 d-block"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
