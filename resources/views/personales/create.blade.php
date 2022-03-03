@extends('layouts.app',['activePage' => 'contrato_personales', 'titlePage' => 'Contrato de Personales'])

@section('content')

@section('css')

@endsection

<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Nuevo Contrato de Personal</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card card-primary">
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Nuevo Contrato</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mt-4">
                                                <div class="col-12 col-lg-8 offset-lg-2">
                                                    <div class="wizard-steps">
                                                        <div class="wizard-step wizard-step-active">
                                                            <div class="wizard-step-icon">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="wizard-step-label">
                                                                Datos Basicos
                                                            </div>
                                                        </div>
                                                        <div class="wizard-step">
                                                            <div class="wizard-step-icon">
                                                                <i class="fas fa-briefcase"></i>
                                                            </div>
                                                            <div class="wizard-step-label">
                                                                Datos Experiencia Laboral
                                                            </div>
                                                        </div>
                                                        <div class="wizard-step">
                                                            <div class="wizard-step-icon">
                                                                <i class="fas fa-clipboard-check"></i>
                                                            </div>
                                                            <div class="wizard-step-label">
                                                                Habilidades Tecnicas
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="wizard-content mt-2">
                                                <div class="wizard-pane">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="nombre">NOMBRES</label>
                                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres...">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="apellidos">APELLIDOS</label>
                                                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos...">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="fecha_nacimiento">FECHA NACIMIENTO</label>
                                                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento...">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="carnet_identidad">CARNET DE IDENTIDAD</label>
                                                            <input type="text" class="form-control" id="carnet_identidad" name="carnet_identidad" placeholder="Carnet de Identidad...">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 ">
                                                            <label for="domicilio">DOMICILIO</label>
                                                            <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio...">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="zona">ZONA</label>
                                                            <input type="text" class="form-control" id="zona" name="zona" placeholder="Zona...">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="nro_celular_personal">NRO DE CELULAR PERSONAL</label>
                                                            <input type="number" class="form-control" id="nro_celular_personal" name="nro_celular_personal" placeholder="Nro de Celular Personal...">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="nro_celular_referencia">NRO CELULAR DE REFERENCIA</label>
                                                            <input type="number" class="form-control" id="nro_celular_referencia" name="nro_celular_referencia" placeholder="Nro de Celular de Refencia...">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="estudios">ESTUDIOS</label>
                                                            <input type="text" class="form-control" id="estudios" name="estudios" placeholder="Estudios...">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="carnet_identidad">FOTO</label>
                                                            <input type="file" class="form-control" id="carnet_identidad" name="Carnet de Identidad...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-lg-4 col-md-6 text-right">
                                                            <a href="#" class="btn btn-icon icon-right btn-primary">Anterior <i class="fas fa-arrow-left"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-lg-4 col-md-6 text-right">
                                                            <a href="#" class="btn btn-icon icon-right btn-primary">Siguiente <i class="fas fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</section>
@endsection