<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Provinsi & Kota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Input Data Provinsi & Kota</h2>

        {{-- Tampilkan pesan sukses jika ada --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Form Input --}}
        <form action="{{ url('/') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="namaProvinsi" class="form-label">Nama Provinsi</label>
                <input type="text" class="form-control" id="namaProvinsi" name="namaProvinsi" required>
            </div>
            <div class="mb-3">
                <label for="namaKota" class="form-label">Nama Kota</label>
                <input type="text" class="form-control" id="namaKota" name="namaKota" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level Kota</label>
                <input type="text" class="form-control" id="level" name="level" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Provinsi</th>
                <th>Nama Kota</th>
                <th>Level</th>
            </tr>
        </thead>
        <tr>
        <tbody>
            @foreach ($provinces as $province)
                @foreach ($province->cities as $city)
                    <tr>
                        <td>{{ $province->namaProvinsi }}</td>
                        <td>{{ $city->namaKota }}</td>
                        <td>{{ $city->level }}</td>
                        <td>
                            {{-- <a href="{{ route('/', $province->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('delete', $province->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
