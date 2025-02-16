<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Provinsi & Kota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Provinsi & Kota</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('/index') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Provinsi</th>
                    <th>Nama Kota</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provinces as $province)
                    @foreach ($province->cities as $city)
                        <tr>
                            <td>{{ $province->namaProvinsi }}</td>
                            <td>{{ $city->namaKota }}</td>
                            <td>{{ $city->level }}</td>
                            <td>
                                <a href="{{ route('edit', $province->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('delete', $province->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>