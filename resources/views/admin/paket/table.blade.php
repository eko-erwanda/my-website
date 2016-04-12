<table class="table table-collumn col-lg-12">
    <thead>
        <tr>
            <th class="col-lg-1">Judul</th>
            <th class="col-lg-1">Paket 1</th>
            <th class="col-lg-1">Paket 2</th>
            <th class="col-lg-1">Paket 3</th>
            <th class="col-lg-1">Paket 4</th>
            <th class="col-lg-1">Paket 5</th>
            <th class="col-lg-1">Paket 6</th>
            <th class="col-lg-1">Paket 7</th>
            <th class="col-lg-1">Paket 8</th>
            <th class="col-lg-1">Paket 9</th>
            <th class="col-lg-1">Paket 10</th>            
            <th class="col-lg-1"></th>            

        </tr>
    </thead>
    <tbody>
        @forelse($paket as $data)
        <tr>
            <td class="col-lg-1">{{ $data->title }}</td>
            <td class="col-lg-1">{{ $data->content1 }}</td>
            <td class="col-lg-1">{{ $data->content2 }}</td>
            <td class="col-lg-1">{{ $data->content3 }}</td>
            <td class="col-lg-1">{{ $data->content4 }}</td>
            <td class="col-lg-1">{{ $data->content5 }}</td>
            <td class="col-lg-1">{{ $data->content6 }}</td>
            <td class="col-lg-1">{{ $data->content7 }}</td>
            <td class="col-lg-1">{{ $data->content8 }}</td>
            <td class="col-lg-1">{{ $data->content9 }}</td>
            <td class="col-lg-1">{{ $data->content10 }}</td>
            <td class="text-right col-lg-1">
                <a href="{{ route('admin.paket.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.paket.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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