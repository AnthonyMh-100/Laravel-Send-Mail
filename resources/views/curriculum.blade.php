<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/cv.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Envia Curriculum</title>
</head>

<body>

    <div class="container-form">
        <form action="{{ route('send') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-1">
                <h1 for="floatingInput">Envianos tu curriculum</label>
            </div>
            <div class="form-floating mb-1">
                <input type="email" class="form-control" id="floatingInput" name="email">
                <label for="floatingInput">Correo Electronico</label>
                @error('email')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" name="subject">
                <label for="floatingInput">Asunto</label>
                @error('subject')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" name="title">
                <label for="floatingInput">Titulo</label>
                @error('title')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="comment"></textarea>
                <label for="floatingTextarea2">Comentarios</label>
                @error('comment')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-floating">
                <input type="file" class="form-control" id="floatingPassword" name="file">
                <label for="floatingPassword">Archivo</label>
            </div>
            <div class="form-floating">
                {{-- <input type="submit" class="form-control" id="floatingPassword"> --}}
                <button type="submit" class="form-control btn btn-primary" id="liveToastBtn">Enviar</button>
            </div>
        </form>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
