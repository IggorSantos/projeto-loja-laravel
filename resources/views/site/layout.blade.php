<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/css/style.css">

    <title>Produtos</title>
</head>
<body>
    <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">              
              <div class="dropdown">
                <button class="button-drop btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </button>
                <ul class="dropdown-menu">
                  @foreach($categoriasMenu as $categoriaM)
                    <li><a class="dropdown-item" href="#">{{ $categoriaM->nome }}</a></li>
                  @endforeach               
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Carrinho</a>
            </li>
    </ul>
@yield('conteudo')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>