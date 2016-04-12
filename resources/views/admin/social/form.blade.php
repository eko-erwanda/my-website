<div class="box">
    <div class="box-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="form-group">
            <label>Icon</label>
            {!! Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'contoh : fa-facebook']) !!}
        </div>
        <div class="form-group">
            <label>Url</label>
            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'contoh : http://facebook.com/blablabla']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">
    <i class="fa fa-check"> Simpan</i>
</button>

<a href="https://fortawesome.github.io/Font-Awesome/icons/" target="blank">
    <strong>Referensi kode icon</strong>
</a>