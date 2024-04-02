
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
            <form action="{{ route('vehicles.store')}}" method="POST">
              @csrf <!-- {{ csrf_field() }} -->
              <div class="d-flex justify-content-between mb-4 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
                <h1 class="h2">Adicionar Veículo</h1>
              </div>
              <div class="col-md-8 order-md-1">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="name">Nome do Veículo</label>
                    <input type="text" class="form-control" id="vehicles_name" name="vehicles_name" placeholder="" value="" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="sobrenome">Código Fipe</label>
                    <input type="text" class="form-control" id="code" name="fipe_code" placeholder="" value="" required>
                  </div>
                </div>
              </div>
              <div class="col-md-8 order-md-1">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="price">Preço</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="" value="" required>
                  </div>
                </div>
              </div>
              <div class="col-md-8 order-md-1">
                <div class="row">
                  <div class="col-md-12 float-right">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </div>
              </div>             
          </form>
        </main>
      </div>
    </div>

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

    <!-- Gráficos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      const input = document.getElementById("price");

      input.addEventListener("keyup", formatarMoeda); 

      function formatarMoeda(e) {
        var v = e.target.value.replace(/\D/g,"");
        v = (v/100).toFixed(2) + "";
        v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
        v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
        e.target.value = v;
      }

    </script>
  </body>
</html>
