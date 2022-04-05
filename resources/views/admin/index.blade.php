<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlanta Tour</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <style>
        .form-admin{
            margin: 30px;
        }
        .button-submit{
            margin: 30px;
        }
        input[type=file]{
            display: none;
        }
        .text_viajar{
            margin-top: 35px;
        }
    </style>
</head>

<body>
    @include('admin.menu')

    <form method="post" action="{{ route('form.admin') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-admin">
            <label for="roteiros">Texto Roteiros</label>
            <textarea id="roteiros" class="summernote" name="roteiros"></textarea>
            <button type="button" class="btn btn-success btn-small" onclick="upload_img('img_roteiros')">Trocar Imagem Roteiros</button>
            <br>
            <input type="file" id="img_roteiros" name="img_roteiros">

            <label for="viajar" class="text_viajar">Texto Viajar</label>
            <textarea id="viajar" class="summernote" name="texto_viajar"></textarea>

            <label for="lazer" class="text_viajar">Texto Lazer</label>
            <textarea id="lazer" class="summernote" name="texto_lazer"></textarea>

            <button type="button" class="btn btn-success btn-small" onclick="upload_img('img_viajar_1')">Trocar Imagem 1</button>
            <input type="file" id="img_viajar_1" name="img_viajar_1">

            <button type="button" class="btn btn-success btn-small" onclick="upload_img('img_viajar_2')">Trocar Imagem 2</button>
            <input type="file" id="img_viajar_2" name="img_viajar_2">

            <button type="button" class="btn btn-success btn-small" onclick="upload_img('img_viajar_3')">Trocar Imagem 3</button>
            <input type="file" id="img_viajar_3" name="img_viajar_3">

            <button type="button" class="btn btn-success btn-small" onclick="upload_img('img_viajar_4')">Trocar Imagem 4</button>
            <input type="file" id="img_viajar_4" name="img_viajar_4">
        </div>

        <div class="button-submit">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
            });
        });

        function upload_img($img)
        {
            $("#"+$img).trigger('click');
        }
    </script>
</body>

</html>
