@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Recepción de reciduo seco galletas ')

@section('page-script')
<script src="{{asset('assets/js/form-basic-inputs.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Gestion  /</span> Residuo seco
</h4>

<div class="row justify-content-center align-items-center">


  <div class="col-xl-6 ">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
      <h5 class="card-header">Recepción de residuo seco galletas </h5>
      <div class="card-body">
        <div class="mb-3 row">
          <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Fecha</label>
          <div class="col-md-10">
            <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="defaultSelect" class="form-label col-md-2">Turno</label>
          <div  class="col-md-10">
            <select id="defaultSelect" class="form-select col-md-10">
              <option>Seleccione un turno</option>
              <option value="1">Dia</option>
              <option value="2">tarde</option>
              <option value="3">Noche</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-number-input" class="col-md-3 col-form-label">Amasado</label>
          <div class="col-md-9">
            <input class="form-control" type="number" value="18" id="html5-number-input" />
          </div>
        </div><div class="mb-3 row">
          <label for="html5-number-input" class="col-md-3 col-form-label">Maquinado</label>
          <div class="col-md-9">
            <input class="form-control" type="number" value="18" id="html5-number-input" />
          </div>
        </div><div class="mb-3 row">
          <label for="html5-number-input" class="col-md-3 col-form-label">Horno</label>
          <div class="col-md-9">
            <input class="form-control" type="number" value="18" id="html5-number-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-number-input" class="col-md-3 col-form-label">Galleta con relleno capper</label>
          <div class="col-md-9">
            <input class="form-control" type="number" value="18" id="html5-number-input" />
          </div>
        </div>

        <div class="mb-3 row">
          <label for="html5-text-input" class="col-md-3 col-form-label">Chocolatera </label>
          <div class="col-md-9">
            <input class="form-control" placeholder="Valor en kilos" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-text-input" class="col-md-3 col-form-label">Robot </label>
          <div class="col-md-9">
            <input class="form-control" placeholder="Valor en kilos" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-number-input" class="col-md-3 col-form-label">No conformidad</label>
          <div class="col-md-9">
            <input class="form-control" type="number" value="18" id="html5-number-input" />
          </div>
        </div>
        <div class="row">
          <label for="html5-range" class="col-md-3 col-form-label">Numero de pruebas</label>
          <div class="col-md-9">
            <input type="range" class="form-range mt-3" id="html5-range" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-text-input" class="col-md-3 col-form-label">PPN empaque </label>
          <div class="col-md-9">
            <input class="form-control" placeholder="Valor en kilos" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-text-input" class="col-md-3 col-form-label">LIder proceso </label>
          <div class="col-md-9">
            <input class="form-control" placeholder="Nombre de lider de empaque" type="text" value="" id="html5-text-input" />
          </div>
        </div>
        <div class="mb-3 row">
          <label for="html5-text-input" class="col-md-3 col-form-label">Turno </label>
          <div class="col-md-9">
            <input class="form-control" placeholder="Turno de dia" type="text" value="" id="html5-text-input" />
          </div>
        </div>

        <div class="mb-3 row">
          <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
          <div class="col-md-10">
            <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
          </div>
        </div>

        <div class="row mt-3">
          <div class="d-grid gap-2 col-md-6 mx-auto">

              <button class="btn btn-success btn-md" type="button">Guardar</button>
              <button class="btn btn-danger btn-md" type="button">Cancelar</button>


          </div>
        </div>

      </div>
    </div>

    <!-- File input -->

  </div>
</div>
@endsection

