<div class="container">
    <div class="row">
        @foreach ($addOns as $addOn)
        <div class="col-sm-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $addOn->name }}</h5>
                    <p class="card-text">{{ $addOn->description }}</p>
                    <button wire:click="selectAddOn({{ $addOn->id }})" class="btn btn-primary">Select</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>