<!-- Modal -->
<form wire:submit.prevent="save">
    <div class="modal-body">
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
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" wire:model='image' type="file" id="formFile">
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" >Understood</button>
    </div>
</form>
