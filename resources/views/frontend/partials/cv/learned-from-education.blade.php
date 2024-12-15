<div class="col-md-6 mb-3">
    <div class="card bg-light custom-card">
        <div class="card-body">
            <h3 class="card-title">Öğrenim</h3>
            @if (!empty($learnedFromEducationCard) && $learnedFromEducationCard->count())
                @foreach ($learnedFromEducationCard as $lfeduc)
                    <p class="card-text">
                        <b>{{ $lfeduc->degree ?? 'Derece Belirtilmemiş' }}</b> |
                        {{ $lfeduc->main_achievement ?? 'Ana Başarı Belirtilmemiş' }}<br>
                        <small class="text-muted">
                            {{ is_array($lfeduc->secondary_achievements)
                    ? implode(', ', $lfeduc->secondary_achievements)
                    : ($lfeduc->secondary_achievements ?? 'İkincil Başarılar Yok') }}
                        </small>
                    </p>
                @endforeach
            @else
                <p class="text-muted">Henüz öğrenim bilgisi eklenmedi.</p>
            @endif
        </div>
    </div>
</div>