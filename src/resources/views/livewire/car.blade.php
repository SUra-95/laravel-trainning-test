<div>
    @include('livewire.includes.create-car-box')
    @include('livewire.includes.search-box')
    
    <div id="car-list">
        @foreach ($cars as $car)
            @include('livewire.includes.car-card')
        @endforeach

        <div class="my-2">
            {{ $cars->links() }}
        </div>
    </div>
</div>
