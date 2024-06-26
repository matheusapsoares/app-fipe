
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ByeCar Aluguel de carros</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="{{ asset('bootstrap/dashboard.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ByeCar</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Veículos <span class="sr-only">(atual)</span>
                </a>
              </li> 
            </ul>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
            <h1 class="h2">Lista de Veículos</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href ="{{ route('vehicles.create') }}" class="btn btn-sm btn-outline-dark">Adicionar</a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" id='list'>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Código Fipe</th>
                  <th>Preço</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($vehicles as $vehicle)
                  <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->vehicles_name }}</td>
                    <td>{{ $vehicle->fipe_code }}</td>
                    <td>{{ $vehicle->price }}</td>
                    <td>
                      <form action="{{ route('vehicles.delete', $vehicle->id) }}" method="POST">
                        <a href ="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-outline-info btn-sm mr-3">Editar</a>
                        @csrf
                        {{ method_field('DELETE') }} 
                        <button type="submit" class="btn btn-outline-danger btn-sm mr-3">Excluir</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>

    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>

    <script>
      new DataTable('#list');
    </script>
  </body>
</html>
