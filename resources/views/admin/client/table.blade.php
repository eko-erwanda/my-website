<table class="table table-hover">
    <thead>
        <tr>
            <th class="col-lg-3">Nama</th>
            <th class="col-lg-3">Testimony</th>
            <th class="col-lg-3">Foto Client</th>
            <th class="col-lg-3">Logo Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        @forelse($client as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->description }}</td>
            <td><img src="/images/{!! $data->client_img !!}" width="50" height="50"></td>
            <td><img src="/images/{!! $data->company_img !!}" width="90" height="50"></td>
            <td class="text-right">
                <a href="{{ route('admin.client.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.client.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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