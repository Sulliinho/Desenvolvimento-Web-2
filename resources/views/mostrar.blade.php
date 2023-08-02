<!DOCTYPE html>
<html>
<head>
    <title>Aula 2 - Mostrar os dados inseridos no banco</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Aula 2 - Mostrando os Dados Gravados no Banco
    </div>
    <div class="card-body">
        <table class="table">
        <thead>
            <tr>
            <th>Título</th>
            <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formData as $data)
            <tr>
                <td>{{ $data->title }}</td>
                <td>{{ $data->description }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    
    
        <!-- Botão para mostrar a página formulario.blade.php -->
        <div class="mt-4">
            <a href="{{ url('/formulario') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





    </div>
  </div>
</div>  
</body>
</html>