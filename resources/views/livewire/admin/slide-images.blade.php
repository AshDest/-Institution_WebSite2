<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- Left sidebar -->
                    <div class="page-aside-left">
                        <form class="form-horizontal" wire:submit.prevent="save">
                            <div class="row mb-3">
                                <input class="form-control @error('images') is-invalid @enderror" wire:model='images'
                                    type="file" id="inputGroupFile04">
                                @error('images')
                                <div class="invalid-feedback" style="font-size: 10px; "><i
                                        class="fa fa-exclamation-triangle"></i>&ensp;{{
                                    $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="justify-content-end row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-info">Ajouter Photo</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Left sidebar -->
                    <div class="page-aside-right">
                        <div class="row">
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($photos as $photo)
                            <div class="col-md-6 col-xxl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="assets/images/slides/{{$photo->images}}"
                                        alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge bg-secondary text-light p-1">@php
                                            echo $i;
                                            $i++
                                        @endphp </div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <div class="dropdown card-widgets">
                                            <a href="" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="" class="dropdown-item"
                                                    wire:click="delete({{ $photo->id }})"><i
                                                        class="mdi mdi-delete me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            @empty
                            <div class="alert alert-danger">
                                <center> . . . Pas d'Images . . .</center>
                            </div>
                            @endforelse
                        </div>
                        <!-- end row-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
