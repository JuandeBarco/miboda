@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Listado de Invitados | <span><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_nuevo"><i class="fa-solid fa-plus pr-1"></i>Nuevo</button></span></h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Grupo</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invitados as $invitado)
                                    <tr>
                                        @php
                                            $badge_color = '';
                                            switch ($invitado->estado_id) {
                                                case 1: $badge_color = 'badge badge-warning'; break;
                                                    break;
                                                case 2: $badge_color = 'badge badge-success'; break;
                                                    break;
                                            }
                                        @endphp
                                        <td>{{ $invitado->nombre }}</td>
                                        <td>{{ $invitado->primer_apellido }}</td>
                                        <td>{{ $invitado->segundo_apellido }}</td>
                                        <td>{{ $invitado->grupo }}</td>
                                        <td><span class="{{ $badge_color }}">{{ $invitado->estado }}</span></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('invitados.edit', $invitado->id) }}" class="btn btn-sm btn-link text-primary"><i class="fa-solid fa-pen-to-square pr-1"></i>Editar</a>
                                                <a href="{{ route('invitados.destroy', $invitado->id) }}" class="btn btn-sm btn-link text-danger"><i class="fa-solid fa-trash pr-1"></i>Eliminar</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal nuevo -->
<div class="modal fade" id="modal_nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo invitado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('invitados.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. Isis Siomara" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Primer Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej. García" required>
                </div>
                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Ej. Alcalá">
                </div>
                <div class="form-group">
                    <label for="email">Alias</label>
                    <input type="text" class="form-control" id="alias" name="alias" placeholder="Ej. Siomami">
                </div>
                <div class="form-group">
                    <label for="">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo" required>
                        <option value="">-- Selecciona una opción --</option>
                    @foreach ($sexos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Grupo</label>
                    <select class="form-control" name="grupo" id="grupo" required>
                        <option value="">-- Selecciona una opción --</option>
                    @foreach ($grupos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                    </select>
                </div>
                {{-- Checkbox for new group --}}
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="nuevo_grupo" name="nuevo_grupo">
                        <label class="form-check-label" for="nuevo_grupo">
                            ¿Desea crear un nuevo grupo?
                        </label>
                    </div>
                </div>
                <div class="form-group" id="nuevo_grupo_div" style="display: none;">
                    <label for="nuevo_grupo_nombre">Nombre del grupo</label>
                    <input type="text" class="form-control" id="nuevo_grupo_nombre" name="nuevo_grupo_nombre" placeholder="Ej. Grupo de la mujer" disabled>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk pr-1"></i>Guardar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#nuevo_grupo').change(function(){
                if ($(this).is(':checked')) {
                    $('#nuevo_grupo_div').show();
                    $('#grupo').attr('disabled', true);
                    $('#nuevo_grupo_nombre').attr('required', true);
                    $('#nuevo_grupo_nombre').attr('disabled', false);
                } else {
                    $('#nuevo_grupo_div').hide();
                    $('#grupo').attr('disabled', false);
                    $('#nuevo_grupo_nombre').attr('required', false);
                    $('#nuevo_grupo_nombre').attr('disabled', true);
                }
            });
        });
    </script>
@endsection
