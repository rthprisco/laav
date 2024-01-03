<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aparelhos.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <x-nav-bar/>
    </header>
    <main>
        <div id="titulo-novo-aparelho">
            <p>Editar informações de {{ $aparelho->marca }} {{ $aparelho->modelo }}</p>
        </div>
        
        <div id="form-div">
            <form action="{{ route('aparelhos.update', $aparelho->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <!-- Categoria -->
                <div class="form-input">
                    <span class="span-label">Categoria</span>
                    <select name="categoria" id="cat" required >
                        <option value="" disabled selected hidden id="placehoder-select">Selecione uma opção...</option>
                        <option value="audio">Áudio</option>
                        <option value="video">Vídeo</option>
                        <option value="computador">Computador</option>
                    </select>
                </div>

                <!-- Marca -->
                <div class="form-input">
                    <span class="span-label">Marca</span>
                    <input type="text" name="marca" autocomplete="off" required value="{{ $aparelho->marca }}">
                </div>
                
                <!-- Modelo -->
                <div class="form-input">
                    <span class="span-label">Modelo</span>
                    <input type="text" name="modelo" autocomplete="off" required value="{{ $aparelho->modelo }}">
                </div>

                <!-- Descrição -->
                <div class="form-input">
                    <span class="span-label">Descrição</span>
                    <textarea name="desc" id="" cols="50" rows="8" autocomplete="off">{{ $aparelho->desc }}</textarea>
                </div>

                <!-- Observações -->
                <div class="form-input">
                    <span class="span-label">Observações</span>
                    <textarea name="obs" id="" cols="50" rows="8" autocomplete="off">{{ $aparelho->obs }}</textarea>
                </div>

                <!-- Fotos -->
                <div class="form-input">
                    <span class="span-label">Fotos</span>
                    <label for="image" class="lbl-img">
                        <div id="img">
                            <i class="fa-solid fa-camera"></i>
                            <p id="img-text">Adicionar uma foto</p>
                        </div>
                    </label>
                    <input type="file" accept="image/*" name="image" id="image" value="{{ $aparelho->image }}">
                </div>

                <button type="submit" class="btn-add-aparelho">Adicionar Aparelho</button>

            </form>
        </div>

    </main>

    <script src="{{ asset('js/aparelhos/input-img.js') }}"></script>
</body>
</html>