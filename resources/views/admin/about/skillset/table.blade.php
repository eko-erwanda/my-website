<div class="row col-lg-12">
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-lg-3">Judul</th>
                    <th class="col-lg-2">Progres</th>
                    <th class="col-lg-1"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($skill as $data)
                <tr>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->progress }}</td>
                    <td class="text-right">
                        <a href="{{ route('admin.about.skill.edit', $data->id) }}">Edit</a>
                        {!! Form::open(['route' => ['admin.about.skill.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                            <button type="submit" id="btn-delete">Hapus</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data skill</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-lg-2">Judul</th>
                    <th class="col-lg-3">Deskripsi</th>
                    <th class="col-lg-1"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($recrutment as $data)
                <tr>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->description }}</td>
                    <td class="text-right">
                        <a href="{{ route('admin.about.recrutment.edit', $data->id) }}">Edit</a>
                        {!! Form::open(['route' => ['admin.about.recrutment.destroy', $data->id], 'method' => 'DELETE', 'class' => 'form-delete']) !!}
                            <button type="submit" id="btn-delete">Hapus</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data recrutment</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>