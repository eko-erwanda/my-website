<div class="col-md-12">
    @forelse($words as $data)
        <div class="row col-md-offset-10">
            <div>
                <a href="{{ route('admin.words.edit', $data->id) }}"><i class="fa fa-edit"></i> Edit</a>
                {!! Form::open(['route' => ['admin.words.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                    <button type="submit" class="btn btn-danger" id="btn-delete"><i class="fa fa-trash"></i> Hapus</button>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Apa Yang Kami Kerjakan?</label>
                {!! Form::textarea('service_words', $data->service_words, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Sudah Pernah Melihat Hasil Kerja Kami?</label>
                {!! Form::textarea('portofolio_words', $data->portofolio_words, ['class' => 'form-control','readonly']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-4">
                <label class="control-label">Siapa Kami?</label>
                {!! Form::textarea('about_words_1', $data->about_words_1, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-4">
                <label class="control-label">Info Tentang Kami</label>
                {!! Form::textarea('about_words_2', $data->about_words_2, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-4">
                <label class="control-label">Tagline setelah about</label>
                {!! Form::textarea('about_words_3', $data->about_words_3, ['class' => 'form-control','readonly']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Apa Pendapat Klien Kami?</label>
                {!! Form::textarea('client_words_1', $data->client_words_1, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Tagline Klien</label>
                {!! Form::textarea('client_words_2', $data->client_words_2, ['class' => 'form-control','readonly']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Paket</label>
                {!! Form::textarea('paket_words_1', $data->paket_words_1, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Penawaran spesial</label>
                {!! Form::textarea('paket_words_2', $data->paket_words_2, ['class' => 'form-control','readonly']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Kabar Berita</label>
                {!! Form::textarea('newsletter_words', $data->newsletter_words, ['class' => 'form-control','readonly']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Hubungi Kami</label>
                {!! Form::textarea('contact_words', $data->contact_words, ['class' => 'form-control','readonly']) !!}
            </div>
        </div>
    @empty
    <h1>Tidak ada data</h1>
    @endforelse
</div>