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
            <label>Testimony</label>
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="row col-md-12">
            <div class="form-group col-md-6">
                <label>Foto Client</label>
                {!! Form::file('client', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                <label>Logo Perusahaan</label>
                {!! Form::file('company', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-check"> Simpan</i>
        </button>
    </div>
</div>