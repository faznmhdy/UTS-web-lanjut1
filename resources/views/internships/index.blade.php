<!DOCTYPE html>
<html>
<head>
    <title>SIPMAG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center">Daftar Lowongan Magang</h1>

<div class="text-center">
    <a href="/internships/create" class="btn btn-danger mb-3">

        Tambah Lowongan

    </a>
</div>

    @foreach($internships as $internship)

        <div class="card mb-3">

            <div class="card-body">

                <h3>{{ $internship->title }}</h3>

                <p>{{ $internship->description }}</p>

                <p>
                    <strong>Perusahaan:</strong>
                    {{ $internship->company->company_name }}
                </p>

                <p>
                    <strong>Lokasi:</strong>
                    {{ $internship->location }}
                </p>

                <p>
                    <strong>Kuota:</strong>
                    {{ $internship->quota }}
                </p>

                <form action="/internships/delete/{{ $internship->id }}" method="POST">

    @csrf
    @method('DELETE')

    <button class="btn btn-danger">
        Hapus
    </button>

</form>

            </div>

        </div>

    @endforeach

</div>

<style>

    body{
        background-color: #f8f9fa;
        font-family: 'Arial';
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
