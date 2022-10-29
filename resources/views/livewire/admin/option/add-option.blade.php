<div class="container-fluid">
    <form class="form-horizontal" wire:submit.prevent="save">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Designation</label>
            <input type="text" class="form-control @error('designation') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="titre de la publication" wire:model='designation'>
            @error('designation')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Detail De l'Option</label>
            <textarea class="form-control @error('detail') is-invalid @enderror" wire:model='detail'
                id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('detail')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>
