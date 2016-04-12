<div class="box">
    <div class="box-body col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="row">
            <div class="form-group col-md-6">
                <label>Label</label>
                {!! Form::text('label', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                <label>Caption</label>
                {!! Form::text('caption', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Judul</label>
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Nama Client</label>
                {!! Form::text('client', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Tanggal</label>
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Skill yang digunakan</label>
            {!! Form::text('skills', null, ['class' => 'form-control']) !!}
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Link website</label>
                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Category</label>
                    {!! Form::select('category', $data, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    {!! Form::file('pic', null, ['class' => 'form-control']) !!}
                </div>
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="fa fa-check"> Simpan</i>
                </button>
            </div>
            <div class="form-group col-md-6">
                <label>Deskripsi</label>
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>