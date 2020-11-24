@extends('layouts.app', [
    'namePage' => 'Horarios',
    'class' => 'sidebar-mini',
    'activePage' => 'horarios',
])

@section('content')
<div class="content">


<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mis Horarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Horarios Generales</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Criterio de Busqueda</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <div class="col-lg-2 mb-2">
                    <select class="form-control " id="exampleFormControlSelect1">
                    <option value="" disabled selected>Año</option>
                    <option>1</option>
                    <option>2</option>
                    </select>
                    </div>
                    
                    <div class="col-lg-8 mb-2">
                    <select class="form-control " id="exampleFormControlSelect1">
                    <option value="" disabled selected>Año</option>
                    <option>1</option>
                    <option>2</option>
                    </select>
                    </div>
                    
                    <div class="col-lg-2 mb-2">
                    <input class="form-control bg-primary" type="submit" value="Buscar" style="color:#FFFFFF">
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
</div>

</div>
@endsection