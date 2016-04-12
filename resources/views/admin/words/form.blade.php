<div class="box">
    <div class="box-body col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Apa Yang Kami Kerjakan?</label>
                {!! Form::textarea('service_words', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Sudah Pernah Melihat Hasil Kerja Kami?</label>
                {!! Form::textarea('portofolio_words', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-4">
                <label class="control-label">Siapa Kami?</label>
                {!! Form::textarea('about_words_1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-4">
                <label class="control-label">Info Tentang Kami</label>
                {!! Form::textarea('about_words_2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-4">
                <label class="control-label">Tagline setelah about</label>
                {!! Form::textarea('about_words_3', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Apa Pendapat Klien Kami?</label>
                {!! Form::textarea('client_words_1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Tagline Klien</label>
                {!! Form::textarea('client_words_2', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Paket</label>
                {!! Form::textarea('paket_words_1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Penawaran spesial</label>
                {!! Form::textarea('paket_words_2', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group words col-md-6">
                <label class="control-label">Kabar Berita</label>
                {!! Form::textarea('newsletter_words', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group words col-md-6">
                <label class="control-label">Hubungi Kami</label>
                {!! Form::textarea('contact_words', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <button type="submit" class="btn btn-primary center">
            <i class="fa fa-check"> Simpan</i>
        </button>
    </div>
</div>