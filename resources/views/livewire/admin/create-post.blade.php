<div class="container-fluid">
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="save">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titre de la publication"
                wire:model='titre'>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Detail du Post</label>
            <textarea class="form-control" wire:model='content' id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" wire:model='photo' type="file" id="formFile">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>
