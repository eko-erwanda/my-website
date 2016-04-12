<table class="table table-collumn">
    <thead>
        <tr>
            <th class="col-lg-3">icon</th>
            <th class="col-lg-9">url</th>
        </tr>
    </thead>
    <tbody>
        @forelse($social as $data)
        <tr>
            <td><strong><i class="fa {{ $data->icon }}"></i></strong></td>
            <td><b>{{ $data->url }}</b></td>
            <td class="text-right">
                <a href="{{ route('admin.social.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.social.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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