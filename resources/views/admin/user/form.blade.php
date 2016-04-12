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
            <label>E-mail</label>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label>Password</label>
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">
    <i class="fa fa-check"> Simpan</i>
</button>