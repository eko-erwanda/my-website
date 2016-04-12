<table class="table table-hover">
    <thead>
        <tr>
            <th class="col-lg-1">Label</th>
            <th class="col-lg-1">Caption</th>
            <th class="col-lg-1">Judul</th>
            <th class="col-lg-1">Nama-Client</th>
            <th class="col-lg-1">Tanggal</th>
            <th class="col-lg-1">Skill yang digunakan</th>
            <th class="col-lg-1">Link</th>
            <th class="col-lg-1">category</th>
            <th class="col-lg-2">Deskripsi</th>
            <th class="col-lg-1">Gambar</th>
            <th class="col-lg-1"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($portofolio as $data)
        <tr>
            <td>{{ $data->label }}</td>
            <td>{{ $data->caption }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->client }}</td>
            <td>{{ $data->date->format('d-m-Y') }}</td>
            <td>{{ $data->skills }}</td>
            <td>{{ $data->link }}</td>
            <td><?php echo ucfirst($data->category); ?></td>
            <td>{{ $data->description }}</td>
            <td><img src="/images/{!! $data->image !!}" width="80" height="80"></td>
            <td class="text-right">
                <a href="{{ route('admin.portofolio.edit', $data->id) }}">Edit</a>
                {!! Form::open(['route' => ['admin.portofolio.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
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