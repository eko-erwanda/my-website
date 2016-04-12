<div class="box">
    <div class="box-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="form-group">
            <label>Nama</label>
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Posisi</label>
            {!! Form::text('position', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Caption</label>
            {!! Form::textarea('caption', null, ['class' => 'form-control']) !!}
        </div>
            <div class="form-group col-md-6">
                <label>Foto</label>
                {!! Form::file('pic', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-check"> Simpan</i>
        </button>
    </div>
</div>