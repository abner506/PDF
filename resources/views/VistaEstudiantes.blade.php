<!DOCTYPE html>
<html lang="en">
    <? use App\Http\Controllers\LController; ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de estudiantes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h4>Lista de estudiantes</h4>
            <div class="row">
                <div class="col-xl-12">
                    <table class="table">
                        <thead class="thead-dark">
                    <form action="">
                        <div class="form-row">
                            <div class="col-sm-4 my-1">
                                <input type="text" class="form-control" name="texto">
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-light">
                                 <a class="btn btn-primary" href="{{route('descargaPDF')}}">Export to PDF</a>
                                <tr>
                                    <th> Matrícula</th>
                                    <th> Nombre</th>
                                    <th> Dirección </th>
                                    <th> Acciones </th>
                                    <th colspan="2" > Acciones </th>
                            </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estudiante as $estudiantes)
                                <tr>
                                    <td>{{$estudiantes->Matricula}}</td>
                                    <td>{{$estudiantes->Nombre}}</td>
                                    <td>{{$estudiantes->Direccion}}</td>
                                    <td> <a href="{{ route ('Lista.edit',$estudiantes->Matricula) }}" class="btn btn-primary btn-sm btn btn-warning btn-sm">Actualizar</a></td>
                                    <td><button class="btn btn-danger btn-delete delete-product" value="{{$estudiantes->Matricula}}">Delete</button></td>
                                    <form method="POST" action="{{ url("Lista/{$estudiantes->Matricula}") }}">
                                         @csrf
                                         @method('DELETE')
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div-class-col>
            </div class>
        </div>
    </body>
</html>
