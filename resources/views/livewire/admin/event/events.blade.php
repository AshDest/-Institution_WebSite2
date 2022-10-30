<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Events</a></li>
                        <li class="breadcrumb-item active">All Events</li>
                    </ol>
                </div>
                <h4 class="page-title">LISTE D'EVENEMENTS</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-6">
                        <a href="{{route('addevent')}}" class="btn btn-success">Ajouter un évenement</a>
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
                                    <th>TITRE</th>
                                    <th>DETAIL</th>
                                    <th>LIEU</th>
                                    <th>DATE</th>
                                    <th>HEURE</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                @forelse ($events as $event)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td class="table-user">
                                        <img src="assets/images/events/{{$event->image}}" alt="table-user"
                                            class="me-2 rounded-circle" />
                                    </td>
                                    <td>{{$event->titre}}</td>
                                    <td>{{$event->content}}</td>
                                    <td>{{$event->lieu}}</td>
                                    <td>{{$event->date}}</td>
                                    <td>{{$event->heure}}</td>
                                    <td class="table-action">
                                        <a href="{{ route('editevent', ['ids'=>$event->id]) }}" class="action-icon">
                                            <i class="mdi mdi-pencil"></i></a>
                                        <a href="" class="action-icon" wire:click="delete({{ $event->id }})"> <i
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
