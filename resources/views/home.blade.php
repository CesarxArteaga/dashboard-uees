@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
  
  <div class="content">
  <div class="row">
      <div class="col-lg-2 ">
        <div class="card color-saldo-1">
          <div class="card-body">
          <p class="val">$50.00</p>
          <p class="saldo-title">Saldo<br>Tarjeta de UEES</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 ">
        <div class="card color-saldo-2">
          <div class="card-body">
          <p class="val">$50.00</p>
          <p class="saldo-title">Saldo<br>por Vencer</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 ">
        <div class="card color-saldo-3">
          <div class="card-body">
          <p class="val">$50.00</p>
          <p class="saldo-title">Saldo<br>Vencido</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card ">
          <div class="card-body">
          <h2>Encuestas</h2>
          <div class="alert alert-secondary mt-4" role="alert" >
            A simple secondary alert—check it out!
          </div>
          
          </div>
        </div>
      </div>
    </div>

    <div class="row">    
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Materias Registradas</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-color thead-title">
                  <th>
                    SESIÓN
                  </th>
                  <th>
                    CÓDIGO
                  </th>
                  <th>
                    MATERIA
                  </th>
                  <th>
                    PROFESOR
                  </th>
                  <th>
                    HORARIO
                  </th>
                </thead>
                <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td >
                      $36,738
                    </td>
                    <td>
                      10:00 a 11:00
                    </td>
                  </tr>
                @endfor
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Trámites</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-color thead-title">
                  <th>
                    SESIÓN
                  </th>
                  <th>
                    CÓDIGO
                  </th>
                  <th>
                    MATERIA
                  </th>
                  <th>
                    PROFESOR
                  </th>
                  <th>
                    HORARIO
                  </th>
                </thead>
                <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td >
                      $36,738
                    </td>
                    <td>
                      10:00 a 11:00
                    </td>
                  </tr>
                @endfor
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      

    });
  </script>
@endpush