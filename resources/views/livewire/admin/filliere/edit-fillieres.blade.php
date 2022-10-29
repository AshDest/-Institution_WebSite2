<div class="container-fluid">
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="edit">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Désignation Fillière</label>
            <input type="text" class="form-control @error('designation') is-invalid @enderror"
                id="exampleFormControlInput1" placeholder="titre de la publication" wire:model='designation'>
            @error('designation')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Detail Fillière</label>
            <textarea class="form-control @error('detail') is-invalid @enderror" wire:model='detail'
                id="exampleFormControlTextarea1" rows="6"></textarea>
            @error('detail')
            <div class="invalid-feedback" style="font-size: 10px; "><i class="fa fa-exclamation-triangle"></i>&ensp;{{
                $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            @if ($this->oldlogo!=null)
            <div class="form-group row">
                <div class="col-lg-8">
                    <a target="_blank" href="{{asset('assets/images/filliere/'.$this->oldlogo.'')}}"
                        style="text-align: center">
                        <img src="{{asset('assets/images/filliere/'.$this->oldlogo.'')}}" alt="logo"
                            style="width:50px;">
                    </a>
                </div>
            </div>
            @endif
            @if ($this->oldlogo==null)
            <span class="label label-primary mr6 mb6">photo no defini</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control @error('photo') is-invalid @enderror" wire:model='photo' type="file"
                id="formFile">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Modifier Fillière</button>
        </div>
    </form>
</div>
