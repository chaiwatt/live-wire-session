<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Route Selection</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Date</label>
                        <div class="col-md-6">
                            <input wire:model="selectedDate" type="text" class="form-control" id="selectedDate">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Route</label>
                        <div class="col-md-6">
                            <input wire:model="selectedRoute" type="text" class="form-control" id="selectedRoute">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button wire:click="selectRoute" type="button" class="btn btn-primary">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>