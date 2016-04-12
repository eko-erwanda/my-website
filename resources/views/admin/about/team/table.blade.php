<table class="table table-hover">
    <thead>
        <tr>
            <th class="col-lg-3">Nama</th>
            <th class="col-lg-3">Posisi</th>
            <th class="col-lg-3">Caption</th>
            <th class="col-lg-3">Foto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($team as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->position }}</td>
            <td>{{ $data->caption }}</td>
            <td><img src="/images/{!! $data->image !!}" width="50px" height="50px"></td>
            <td class="text-right">
                <a href="{{ route('admin.about.team.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.about.team.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                    <button class="btn-danger" type="submit" id="btn-delete">Hapus</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>