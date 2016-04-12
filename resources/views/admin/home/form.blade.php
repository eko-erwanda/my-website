<div class="box">
    <div class="box-body col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="row">
            <div class="form-group col-md-6">
                <label>Deskripsi</label>
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Judul</label>
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Sub-Judul</label>
                    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    {!! Form::file('pic', null, ['class' => 'form-control']) !!}
                </div>
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="fa fa-check"> Simpan</i>
                </button>
            </div>
        </div>
    </div>
</div>