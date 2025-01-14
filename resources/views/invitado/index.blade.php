@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p>Invitados</p>
                        <h1>{{ $invitados->count() }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p>Confirmados</p>
                        <h1 class="text-success">{{ $confirmados->count() }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p>Pendientes</p>
                        <h1 class="text-danger">{{ $pendientes->count() }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <th>Boleto</th>
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
                                        <td>{{ $invitado->boleto }}</td>
                                        <td><span class="{{ $badge_color }}">{{ $invitado->estado }}</span></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button class="btn btn-sm btn-link text-primary btn_editar" data-toggle="modal" data-target="#modal_editar" data-id="{{ $invitado->id }}"><i class="fa-solid fa-pen-to-square pr-1"></i>Editar</button>
                                                {{-- <a href="{{ route('invitados.destroy', $invitado->id) }}" class="btn btn-sm btn-link text-danger"><i class="fa-solid fa-trash pr-1"></i>Eliminar</a> --}}
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
<div class="modal fade" id="modal_nuevo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo invitado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('invitados.store') }}" method="POST" id="form_nuevo" enctype="multipart/form-data">
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

<!-- Modal editar -->
<div class="modal fade" id="modal_editar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar invitado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('invitados.edit') }}" method="POST" id="form_editar" enctype="multipart/form-data">
                    @method('PUT')
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
                            <input class="form-check-input" type="checkbox" value="1" id="nuevo_grupo_edit" name="nuevo_grupo">
                            <label class="form-check-label" for="nuevo_grupo">
                                ¿Desea crear un nuevo grupo?
                            </label>
                        </div>
                    </div>
                    <div class="form-group" id="nuevo_grupo_div_editar" style="display: none;">
                        <label for="nuevo_grupo_nombre">Nombre del grupo</label>
                        <input type="text" class="form-control" id="nuevo_grupo_nombre" name="nuevo_grupo_nombre" placeholder="Ej. Grupo de la mujer" disabled>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="persona_id" id="persona_id">
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

            $(".btn_editar").click(function(){
                var id = $(this).data('id');
                
                // ajax setup
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('invitados.get_info', ':id') }}".replace(':id', id),
                    type: "GET",
                    success: function(data){
                        console.log(data);
                        $("#form_editar input[name='nombre']").val(data.nombre);
                        $("#form_editar input[name='apellido']").val(data.primer_apellido);
                        $("#form_editar input[name='apellido2']").val(data.segundo_apellido);
                        $("#form_editar input[name='alias']").val(data.alias);
                        $("#form_editar select[name='sexo']").val(data.sexo_id);
                        $("#form_editar select[name='grupo']").val(data.grupo_id);
                        $("#form_editar input[name='nuevo_grupo']").prop('checked', false);
                        $("#form_editar input[name='nuevo_grupo_nombre']").prop('disabled', true);
                        $("#form_editar input[name='persona_id']").val(data.id);
                    }
                });
            });

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

            $('#nuevo_grupo_edit').change(function(){
                if ($(this).is(':checked')) {
                    $('#nuevo_grupo_div_editar').show();
                    $('#form_editar select[name="grupo"]').attr('disabled', true);
                    $('#form_editar input[name="nuevo_grupo_nombre"]').attr('required', true);
                    $('#form_editar input[name="nuevo_grupo_nombre"]').attr('disabled', false);
                } else {
                    $('#nuevo_grupo_div_editar').hide();
                    $('#form_editar select[name="grupo"]').attr('disabled', false);
                    $('#form_editar input[name="nuevo_grupo_nombre"]').attr('required', false);
                    $('#form_editar input[name="nuevo_grupo_nombre"]').attr('disabled', true);
                }
            });
        });
    </script>
@endsection
