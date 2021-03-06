<table class="table table-hover">
    <thead>
        <tr>
            <th class="col-lg-1">Judul</th>
            <th class="col-lg-2">Deskripsi</th>
            <th class="col-lg-1">Gambar</th>
            <th class="col-lg-1"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($service as $data)
        <tr>
            <td>{{ $data->title }}</td>
            <td>{{ $data->description }}</td>
            <td><img src="/images/{!! $data->image !!}" width="80" height="80"></td>
            <td class="text-right">
                <a href="{{ route('admin.service.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.service.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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