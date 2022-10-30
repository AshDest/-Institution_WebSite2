<div class="container-fluid">
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="save">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre de L'Evenement</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1"
                placeholder="titre de la publication" wire:model='titre'>
            @error('titre')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Detail sur L'Evenement</label>
            <textarea class="form-control @error('content') is-invalid @enderror" wire:model='content'
                id="exampleFormControlTextarea1" rows="6"></textarea>
            @error('content')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lieu de L'Evenement</label>
            <input type="text" class="form-control @error('lieu') is-invalid @enderror" id="exampleFormControlInput1"
                placeholder="Lieu de la tenue" wire:model='lieu'>
            @error('lieu')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="example-date" class="form-label">Date Evenement</label>
            <input class="form-control @error('date') is-invalid @enderror" wire:model='date' id="example-date"
                type="date" name="date">
            @error('date')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="example-time" class="form-label">Heure de L'Evenement</label>
            <input class="form-control @error('heure') is-invalid @enderror" wire:model='heure' id="example-time"
                type="time" name="time">
            @error('heure')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control @error('image') is-invalid @enderror" wire:model='image' type="file"
                id="formFile">
            @error('image')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Ajouter un Evenement</button>
        </div>
    </form>
</div>
