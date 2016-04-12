<table class="table table-collumn">
    <thead>
        <tr>
            <th class="col-lg-2">Alamat</th>
            <th class="col-lg-2">E-mail</th>
            <th class="col-lg-2">phone 1</th>
            <th class="col-lg-2">phone 2</th>
            <th class="col-lg-2">phone 3</th>
            <th class="col-lg-2">phone 4</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contact as $data)
        <tr>
            <td>{{ $data->addres }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone1 }}</td>
            <td>{{ $data->phone2 }}</td>
            <td>{{ $data->phone3 }}</td>
            <td>{{ $data->phone4 }}</td>
            <td class="text-right">
                <a href="{{ route('admin.contact.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.contact.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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