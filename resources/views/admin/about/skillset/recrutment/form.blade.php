<div class="box">
    <div class="box-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="form-group">
            <label>Judul</label>
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">
    <i class="fa fa-check"> Simpan</i>
</button>