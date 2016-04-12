<div class="box">
    <div class="box-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="form-group">
            <label>Alamat</label>
            {!! Form::text('addres', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>E-mail</label>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Kontak 1</label>
            {!! Form::text('phone1', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Kontak 2</label>
            {!! Form::text('phone2', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Kontak 3</label>
            {!! Form::text('phone3', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Kontak 4</label>
            {!! Form::text('phone4', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">
    <i class="fa fa-check"> Simpan</i>
</button>