<div>
    @include('livewire.includes.create-customer-box')
    @include('livewire.includes.search-box')
    
    <div id="customer-list">
        @foreach ($customers as $customer)
            @include('livewire.includes.customer-card')
        @endforeach

        <div class="my-2">
            {{ $customers->links() }}
        </div>
    </div>
</div>
