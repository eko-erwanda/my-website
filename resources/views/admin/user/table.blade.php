<table class="table table-hover">
    <thead>
        <tr>
            <th class="col-lg-3">Nama</th>
            <th class="col-lg-3">E-mail</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td class="text-right">
                <a href="{{ route('admin.user.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.user.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                    <button type="submit" id="btn-delete">Hapus</button>
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