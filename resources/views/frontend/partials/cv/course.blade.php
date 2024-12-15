<div class="col-md-6 mb-3">
    <div class="card text-end bg-light custom-card">
        <div class="card-body">
            <h3 class="card-title">Kurs</h3>
            @if (!empty($courseCard) && $courseCard->count())
                @foreach ($courseCard as $courses)
                    <p class="card-text">
                        <b>{{ $courses->course_name ?? 'Kurs Adı Belirtilmemiş' }}</b> <br>
                        {{ $courses->institution ?? 'Kurum Belirtilmemiş' }} <br>
                        <small class="text-muted">
                            {{ is_string($courses->additional_achievements) 
                                ? implode(', ', json_decode($courses->additional_achievements, true) ?? [])
                                : 'Ek Başarılar Yok' }}
                        </small>
                    </p>
                @endforeach
            @else
                <p class="text-muted">Henüz kurs bilgisi eklenmedi.</p>
            @endif 
        </div>
    </div>
</div>
