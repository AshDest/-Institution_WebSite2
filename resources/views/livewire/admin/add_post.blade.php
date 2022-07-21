<!-- Modal -->
<div wire:ignore.self class="modal fade" id="add_post" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="titre de la publication" wire:model='titre'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Detail du Post</label>
                        <textarea class="form-control" wire:model='content' id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" wire:model='image' type="file" id="formFile">
                        @error('image') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="update()">Save</button>
            </div>
        </div>
    </div>
</div>
