<div class="container">
    <div class="row">
        @foreach ($boats as $boat)
        <div class="col-sm-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $boat->name }}</h5>
                    <p class="card-text">{{ $boat->description }}</p>
                    <button wire:click="selectBoat({{ $boat->id }})" class="btn btn-primary">Select</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>