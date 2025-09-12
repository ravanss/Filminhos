<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Listagem dos filmes</h1>
                        <a href="{{ route('filminho.create') }}" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
                <table class="tabela" style="border: 1px solid black;">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Genero</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid black;">
                        @foreach ($filminhos as $filme)
                            <tr>
                                <td>{{$filme->id}}</td>
                                <td>{{$filme->name}}</td>
                                <td>{{$filme->tipo}}</td>
                                <td>
                                    <button class="btn btn-success">Editar filme</button>
                                    <button class="btn btn-danger">Excluir</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>