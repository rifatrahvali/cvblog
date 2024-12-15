<div class="col-md-6 mb-3">
    <div class="card bg-light custom-card">
        <div class="card-body">
            <h3 class="card-title">Sertifikalar</h3>
            @if (!empty($certificateCard) && $certificateCard->count())
                @foreach ($certificateCard as $certificate)
                    <p class="card-text">
                        <b>{{ $certificate->certificate_name ?? '' }}</b> | {{ $certificate->field ?? '' }}<br>
                        <small class="text-muted">{{ $certificate->institution ?? '' }}</small>
                    </p>
                @endforeach
            @else
                <p class="text-muted"></p>
            @endif
        </div>
    </div>
</div>