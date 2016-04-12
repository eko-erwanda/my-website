<div class="row col-lg-12">
    <div class="col-lg-9">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-lg-3">Nama</th>
                    <th class="col-lg-3">E-mail</th>
                    <th class="col-lg-3">Komentar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($message as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->comment }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col-lg-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-lg-3 text-center">Newsletter</th>
                </tr>
            </thead>
            <tbody>
                @forelse($news as $data)
                <tr>
                    <td class="text-center">{{ $data->email }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>