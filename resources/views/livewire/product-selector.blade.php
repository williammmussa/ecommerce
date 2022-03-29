<div>
    @if($initialVariation)
        <livewire:product-dropdown :variations="$initialVariation" />
    @endif
    {{$this->skuVariant}}

</div>
