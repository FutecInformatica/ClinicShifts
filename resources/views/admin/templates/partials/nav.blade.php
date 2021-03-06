<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <a class="navbar-brand" href="/">Home</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
<!--                  <li class="nav-item active">
                    <a class="nav-link" href="#">link1 <span class="sr-only">(current)</span></a>
                  </li>-->
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('especialidades.index') }}">Especialidades</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('medicos.index') }}">Medicos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('os.index') }}">Obras Sociales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pacientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Salir</a>
                      <!--<a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>-->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                    
                </form>

              </div>
            </nav>
        </div>
        <div class="col"></div>
    </div>
</div>
<br><br>
