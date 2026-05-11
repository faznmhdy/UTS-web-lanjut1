<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lowongan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Tambah Lowongan Magang</h1>

    <form action="/internships/store" method="POST">

        @csrf

        <div class="mb-3">

            <label>Perusahaan</label>

            <select name="company_id" class="form-control">

                @foreach($companies as $company)

                    <option value="{{ $company->id }}">

                        {{ $company->company_name }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Judul</label>

            <input type="text" name="title" class="form-control">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea name="description" class="form-control"></textarea>

        </div>

        <div class="mb-3">

            <label>Kuota</label>

            <input type="number" name="quota" class="form-control">

        </div>

        <div class="mb-3">

            <label>Lokasi</label>

            <input type="text" name="location" class="form-control">

        </div>

        <div class="mb-3">

            <label>Tanggal Mulai</label>

            <input type="date" name="start_date" class="form-control">

        </div>

        <div class="mb-3">

            <label>Tanggal Selesai</label>

            <input type="date" name="end_date" class="form-control">

        </div>

        <button class="btn btn-primary">

            Simpan

        </button>

    </form>

</div>

<style>

    body{
        background-color: #f8f9fa;
    }

    .container{
        max-width: 700px;
    }

    h1{
        margin-top: 30px;
        margin-bottom: 20px;
    }

    .card{
        margin-bottom: 15px;
    }

</style>

</body>
</html>