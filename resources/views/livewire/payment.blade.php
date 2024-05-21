<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Summary</h5>
                    <p class="card-text">
                        <strong>Date:</strong> {{ $selectedDate }}<br>
                        <strong>Route:</strong> {{ $selectedRoute }}<br>
                        @if ($selectedBoat)
                            <strong>Boat:</strong> {{ $selectedBoat->name }}<br>
                        @else
                            <strong>Boat:</strong> ไม่พบข้อมูลเรือ<br>
                        @endif
                        @if ($selectedAddOn)
                            <strong>Add On:</strong> {{ $selectedAddOn->name }}<br>
                        @else
                            <strong>Add On:</strong> ไม่พบข้อมูล Add-On<br>
                        @endif
                    </p>
                    <button wire:click="goHome" class="btn btn-primary">Home</button>
                </div>
            </div>
        </div>
    </div>
</div>