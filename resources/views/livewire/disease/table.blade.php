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
            <h3 class="block-title">All Disease <small>Added in the system</small></h3>
        </div>
        <div class="block-content block-content-full">
            <button class="btn btn-success btn-sm mb-3" wire:click='showFormAdd'><i class="fa fa-plus fa-fw"></i> Add Disease</button>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Name</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($our_diseases as $disease)
                    <tr>
                        <td class="text-center font-size-sm">{{ $loop->iteration }}</td>
                        <td class="font-w600 font-size-sm"><a href="#">{{ $disease->name }}</a></td>
                        <td>
                            <button class="btn btn-primary btn-sm"  wire:click="edit({{ $disease->id }})" ><i class="fa fa-pen fa-fw"></i> Edit</button>
                            <button class="btn btn-danger btn-sm"  wire:click="delete({{ $disease->id }})" ><i class="fa fa-trash fa-fw"></i> Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
