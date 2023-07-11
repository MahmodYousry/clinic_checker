<div>
    <div class="d-block p-2 bg-white">
        @if (!empty($successMessage))
            <div class="alert alert-success d-flex align-items-center animated fadeInDown" role="alert">
                <div class="flex-00-auto">
                    <i class="fa fa-fw fa-check"></i>
                </div>
                <div class="flex-fill ml-3">
                    <p class="mb-0 text-capitalize">{{ $successMessage }}</p>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if($catchError)
            <div class="alert alert-danger d-flex align-items-center animated fadeInDown" role="alert">
                <div class="flex-00-auto">
                    <i class="far fa-sad-tear fa-fw"></i>
                </div>
                <div class="flex-fill ml-3">
                    <p class="mb-0 text-capitalize">{{ $catchError }}</p>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
    </div>
    <div class="block block-rounded">

        <div class="block-header">
            <h3 class="block-title d-block">Register New Medicine <small>All Fields Are Required</small></h3>
        </div>


        <div class="block-content block-content-full">
        @if ($updateMode)
            <form wire:submit.prevent="update" enctype="multipart/form-data">
        @else
            <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        @endif

                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <input type="hidden" wire:model="medicine_id">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" wire:model="name" id="name">
                            <small id="helpId" class="text-muted text-capitalize">write the medicine full name</small>
                            @error('name')
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="image" class="d-block">Image</label>
                            <input class="mb-1" type="file" wire:model="image" id="image" wire:loading.attr="disabled" wire:target="image">
                            <small id="helpId" class="text-muted text-capitalize d-block">upload medicine image</small>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="expected_price" class="form-label">Expected Price</label>
                            <input class="form-control" type="text" wire:model="expected_price" id="expected_price">
                            <small id="helpId" class="text-muted text-capitalize">Expected Price For this medicine</small>
                            @error('expected_price')
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                @if ($updateMode)
                    <button type="button" class="btn btn-primary" wire:click='update'>
                        <i class="fa fa-check mr-1"></i> Update
                    </button>
                @else
                    <button type="button" class="btn btn-primary" wire:click='create'>
                        <i class="fa fa-check mr-1"></i> Submit
                    </button>
                @endif
            </form>







        </div>

    </div>
</div>

