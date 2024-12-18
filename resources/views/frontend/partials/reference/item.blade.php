@foreach ($references as $reference)
<div class="col-md-4 col-sm-6">
    <div class="card-reference shadow-sm h-100">
        <img src="{{ asset('storage/' . $reference->reference_image) }}" class="card-img-top" alt="{{ $reference->reference_name }}>
        <div class="card-body p-3">
            <h5 class="card-title">{{ $reference->reference_name }}</h5>
            <p class="card-text">{{ $reference->reference_comment }}</p>
        </div>
    </div>
</div>
@endforeach
