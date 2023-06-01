<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Sapi</title>
</head>

<body>
    <div class="container">
        <h3>Tambah Sapi Baru</h3>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('sapi.update', $sapi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <img src="{{ asset('storage/' . $sapi->gambar) }}" alt=""> <br>
                <label for="BeratSapi">Ganti Gambar</label>
                <input type="file" class="form-control" id="" name="gambar">
            </div>
            <div class="form-group">
                <label for="BeratSapi">Berat(KG)</label>
                <input type="text" class="form-control" id="BeratSapi" name="beratSapi"
                    value="{{ $sapi->beratSapi }}">
            </div>
            <div class="form-group">
                <label for="JenisSapi">Jenis</label>
                <input type="text" class="form-control" id="JenisSapi" name="jenisSapi"
                    value="{{ $sapi->jenisSapi }}">
            </div>
            <div class="form-group">
                <label for="HargaSapi">Harga</label>
                <input type="text" class="form-control" id="HargaSapi" name="hargaSapi"
                    value="{{ $sapi->hargaSapi }}">
            </div>
            <div class="form-group">
                <label for="KesehatanSapi">Kesehatan</label>
                <input type="text" class="form-control" id="KesehatanSapi" name="kesehatanSapi"
                    value="{{ $sapi->kesehatanSapi }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
-->
</body>

</html>
