<div class="col-md-6 mb-3">
    <div class="card text-end bg-light custom-card">
        <div class="card-body">
            <h3 class="card-title">Deneyimler</h3>
            @if (!empty($experienceCard) && $experienceCard->isNotEmpty())
                @foreach ($experienceCard as $card)
                    <p class="card-text">
                        <b>{{ $card->company_name ?? 'Şirket Adı Belirtilmemiş' }}</b> <br>
                        {{ $card->start_date ?? 'Başlangıç Tarihi Yok' }} :
                        {{ $card->end_date ?? 'Bitiş Tarihi Yok' }} <br>
                        <small class="text-muted">
                        {{ $card->title ?? 'Unvan Belirtilmemiş' }}
                        </small>
                    </p>
                @endforeach
            @else
                <p class="text-muted">Henüz deneyim bilgisi eklenmedi.</p>
            @endif
        </div>
    </div>
</div>
