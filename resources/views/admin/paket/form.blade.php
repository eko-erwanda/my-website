<div class="box">
    <div class="box-body col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            {!! @implode($errors->all('<p>:message</p>')) !!}
        </div>
        @endif
        <div class="row">
            <div class="form-group col-md-4">
                <label>Judul</label>
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 1</label>
                {!! Form::text('content1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 2</label>
                {!! Form::text('content2', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Paket 3</label>
                {!! Form::text('content3', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 4</label>
                {!! Form::text('content4', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 5</label>
                {!! Form::text('content5', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Paket 6</label>
                {!! Form::text('content6', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 7</label>
                {!! Form::text('content7', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 8</label>
                {!! Form::text('content8', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label>Paket 9</label>
                {!! Form::text('content9', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4">
                <label>Paket 10</label>
                {!! Form::text('content10', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-4 text-center">
                <label class="alert-success">Data minimal berisi 3 paket dan urut sesuai kolom</label>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"> Simpan</i>
                </button>
            </div>
        </div>
    </div>
</div>