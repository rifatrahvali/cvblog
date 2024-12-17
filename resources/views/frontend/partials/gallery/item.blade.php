@foreach($images as $image)
    <div class="col-md-4 col-sm-6">
        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal"
            data-bs-image="{{ asset('storage/' . $image->image) }}">
            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid rounded gallery-item"
                alt="{{ $image->name }}">
        </a>
    </div>
@endforeach