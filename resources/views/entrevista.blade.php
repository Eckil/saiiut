@extends('plantilla')
@section('contenido')

<!-- Ocultar secciones -->

<style type="text/css">
#register_form fieldset:not(:first-of-type) {
    display: none;
}
</style>
<!-- Formulario de estados -->

<div class="card border-left-success">
    <h5 class="card-header">Entrevista</h5>
    <form id="register_form" novalidate action="{{route('guardaEstados')}}" method="POST">
        {{csrf_field()}}
        <div class="card-body">
            <div class="progress-bar progress-bar-striped bg-success active" role="progressbar" aria-valuemin="0"
                aria-valuemax="100">
            </div>

            <div class="alert alert-danger hide"></div>
            <!-- Seccion de datos generales -->
            <fieldset>
                <div class="card-footer text-muted">
                    <h3>Datos Generales</h3>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="fechaNac">Fecha de Nacimiento*</label>
                        <input type="date" class="form-control form-control-sm" required id="fechaNac" name="fechaNac">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Sexo:</label>
                        <div>
                            <label class="control-label radio-inline">
                                <input name="sexo" id="sexo1" value="femenino" type="radio" required=""
                                    aria-required="true"> Femenino </label>
                            <label class="control-label radio-inline">
                                <input name="sexo" id="sexo2" value="masculino" type="radio" checked="checked">
                                Masculino </label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="edocivil">Edo Civil*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" id="edocivil"
                            required="" aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                            <option>Soltero(a)</option>
                            <option>Casado(a)</option>
                            <option>Divorciado(a)</option>
                            <option>Viudo(a)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="nohijos">No. Hijos*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="nohijos" id="nohijos"
                            placeholder="#" required="" aria-required="true"> </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="curp">CURP*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="curp" id="curp"
                            placeholder="" required="" aria-required="true"> </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="rfc">RFC:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="rfc" id="rfc"
                            placeholder=""> </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="lugarnac">Lugar de Nacimiento*:</label>
                        <select class="form-control form-control-sm input-sm" name="lugarnac" id="lugarnac" required=""
                            aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option value="1">Aguascalientes</option>
                            <option value="2">Baja California</option>
                            <option value="3">Baja California Sur</option>
                            <option value="4">Campeche</option>
                            <option value="5">Coahuila de Zaragoza</option>
                            <option value="6">Colima</option>
                            <option value="7">Chiapas</option>
                            <option value="8">Chihuahua</option>
                            <option value="9">Ciudad de México</option>
                            <option value="10">Durango</option>
                            <option value="11">Guanajuato</option>
                            <option value="12">Guerrero</option>
                            <option value="13">Hidalgo</option>
                            <option value="14">Jalisco</option>
                            <option value="15">México</option>
                            <option value="16">Michoacán de Ocampo</option>
                            <option value="17">Morelos</option>
                            <option value="18">Nayarit</option>
                            <option value="19">Nuevo León</option>
                            <option value="20">Oaxaca</option>
                            <option value="21">Puebla</option>
                            <option value="22">Querétaro</option>
                            <option value="23">Quintana Roo</option>
                            <option value="24">San Luis Potosí</option>
                            <option value="25">Sinaloa</option>
                            <option value="26">Sonora</option>
                            <option value="27">Tabasco</option>
                            <option value="28">Tamaulipas</option>
                            <option value="29">Tlaxcala</option>
                            <option value="30">Veracruz de Ignacio de la Llav</option>
                            <option value="31">Yucatán</option>
                            <option value="32">Zacatecas</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="telfijo">Tel. Fijo:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="telfijo" id="telfijo">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="celular">Tel. Celular*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="celular" id="celular"
                            required="" aria-required="true"> </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="correo">Correo Electrónico*:</label>
                        <input type="email" class="form-control form-control-sm input-sm" name="correo" id="correo"
                            placeholder="@" required="" aria-required="true"> </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="religion">Religión*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="religion" id="religion"
                            required="" aria-required="true"> </div>
                </div>
                <div class="card-footer text-muted">
                    <h5>Datos de Domicilio</h5>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label class="control-label" for="calle">Calle*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="calle" id="calle"
                            required="" aria-required="true"> </div>
                    <div class="form-group col-md-2 col-xs-6">
                        <label class="control-label" for="noext">No. Ext*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="noext" id="noext"
                            required="" aria-required="true"> </div>
                    <div class="form-group col-md-2 col-xs-6">
                        <label class="control-label" for="noint">No. Int:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="noint" id="noint"> </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="edocivil">Estado*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" required=""
                            aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="edocivil">Municipio*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" required=""
                            aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="edocivil">Localidad*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" required=""
                            aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    <h5>Datos Escolares</h5>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="edocivil">Estado*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" required=""
                            aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="edocivil">Municipio*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="edocivil" required=""
                            aria-required="true" aria-invalid="false">
                            <option value="">Selecciona una opción</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label" for="preparatoria">Escuela de Procedencia*:</label>
                        <select class="form-control form-control-sm input-sm" name="preparatoria" id="preparatoria"
                            required="" aria-required="true"> </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="especialidad">Especialidad*:</label>
                        <select class="form-control form-control-sm input-sm" name="especialidad" id="especialidad"
                            required="" aria-required="true">
                            <optgroup>
                                <option>Sin especialidad</option>
                            </optgroup>
                            <optgroup label="Especialidades">
                                <option>Administración</option>
                                <option>Alimentos y Bebidas</option>
                                <option>Artes Gráficas</option>
                                <option>Asistente Directivo</option>
                                <option>Asistente y Protesista Dental</option>
                                <option>Autotransporte</option>
                                <option>Autotrónica</option>
                                <option>Conservación del Medio Ambiente</option>
                                <option>Construcción</option>
                                <option>Contabilidad</option>
                                <option>Control de Calidad</option>
                                <option>Curtiduría</option>
                                <option>Electricidad Industrial</option>
                                <option>Electromecánica Industrial</option>
                                <option>Enfermería General</option>
                                <option>Escenotecnia</option>
                                <option>Expresión Gráfica Digital</option>
                                <option>Fuentes Alternas de Energía</option>
                                <option>Hospitalidad Turística</option>
                                <option>Industria Automotriz</option>
                                <option>Industria del Vestido</option>
                                <option>Informática</option>
                                <option>Laministería y Recubrimiento de las Aeronaves</option>
                                <option>Mantenimiento Automotriz</option>
                                <option>Mantenimiento de Motores y Planeadores</option>
                                <option>Mantenimiento de Sistemas Automáticos</option>
                                <option>Mantenimiento de Sistemas Electrónicos</option>
                                <option>Máquinas Herramienta</option>
                                <option>Mecatrónica</option>
                                <option>Metalmecánica</option>
                                <option>Metalurgia</option>
                                <option>Minero Metalurgista</option>
                                <option>Motores a Diesel</option>
                                <option>Optometría</option>
                                <option>Plásticos</option>
                                <option>Procesamiento Industrial de Alimentos</option>
                                <option>Producción de Calzado</option>
                                <option>Producción y Transformación de Productos Acuícolas</option>
                                <option>Productividad Industrial</option>
                                <option>Química Industrial</option>
                                <option>Refrigeración y Climatización</option>
                                <option>Salud Comunitaria</option>
                                <option>Seguridad e Higiene y Protección Civil</option>
                                <option>Sistemas Electrónicos de Aviación</option>
                                <option>Soporte y Mantenimiento de Equipo de Cómputo</option>
                                <option>Telecomunicaciones</option>
                                <option>Terapia Respiratoria</option>
                                <option>Textil</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="turno_prod">Turno*:</label>
                        <select class="form-control form-control-sm input-sm" name="turno_prod" id="turno_prod"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Matutino</option>
                            <option>Vespertino</option>
                        </select>
                    </div>
                </div>

                <input type="button" class="next-form btn btn-success" value="Next" /> (Los campos marcados con * son
                obligatorios)<br>
            </fieldset>




            <!-- Seccion de aspectos socioeconómicos -->
            <fieldset>
                <div class="card-footer text-muted">
                    <h3>Aspectos Socioeconómicos</h3>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="ambito_loc">¿En qué localidad resides?*:</label>
                        <select class="form-control form-control-sm input-sm valid" name="ambito_loc" id="ambito_loc"
                            required="" aria-required="true" aria-invalid="false">
                            <option value="">Seleccione una opción</option>
                            <option>Rural</option>
                            <option>Urbana</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="tiempo_residencia">Tiempo de residencia en el
                            domicilio*:</label>
                        <select class="form-control form-control-sm input-sm" name="tiempo_residencia"
                            id="tiempo_residencia" required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Menos de un año</option>
                            <option>De 1 a 2 años</option>
                            <option>De 2 a 4 años</option>
                            <option>De 4 a 6 años</option>
                            <option>Más de 7 años</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="vive_con">¿Con quién vives actualmente?*:</label>
                        <select class="form-control form-control-sm input-sm" name="vive_con" id="vive_con" required=""
                            aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Padres</option>
                            <option>Esposo(a)</option>
                            <option>Falimiar</option>
                            <option>Otros</option>
                            <option>Solo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">¿Trabajas?*:</label>
                        <div>
                            <label class="control-label radio-inline">
                                <input name="   " id="trabaja" value="1" type="radio" required="" aria-required="true"
                                    checked="checked"> Si </label>
                            <label class="control-label radio-inline">
                                <input name="trabaja" type="radio" value="0" > No </label>
                        </div>
                    </div>
                </div>
                <div class="row" id="elemnttrabaja">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="lugar_trabajo">¿Dónde Trabajas?*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="lugar_trabajo"
                            id="lugar_trabajo" required="" aria-required="true"> </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="horas_trabajo">Horas Semanales*:</label>
                        <select class="form-control form-control-sm input-sm" name="horas_trabajo" id="horas_trabajo"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Menor a 20 hrs.</option>
                            <option>De 20 a 30 hrs.</option>
                            <option>De 30 a 40 hrs.</option>
                            <option>De 40 a 50 hrs.</option>
                            <option>Más de 50 hrs.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="horario1">Horario*:</label>
                        <div>
                            <div class="input-group bootstrap-timepicker timepicker col-md-6"
                                style="float: left!important;">
                                <input type="text" class="form-control form-control-sm input-small time" id="horario1"
                                    name="horario1" required="" aria-required="true">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i> a</span>
                            </div>
                            <div class="input-group bootstrap-timepicker timepicker col-md-6"
                                style="float: left!important;">
                                <input type="text" class="form-control form-control-sm input-small time" id="horario2"
                                    name="horario2" required="" aria-required="true"> <span class="input-group-addon"><i
                                        class="glyphicon glyphicon-time"></i></span> </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="ingreso_men">Ingreso Mensual*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="ingreso_men"
                            id="ingreso_men" required="" aria-required="true"> </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="ambito_loc">¿De quién dependes económicamente?*:</label>
                        <select class="form-control form-control-sm input-sm" name="depende_de" id="depende_de"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Padres</option>
                            <option>Hijos</option>
                            <option>Esposo(a)</option>
                            <option>Falimiar</option>
                            <option>Otros</option>
                            <option>Nadie</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="ambito_loc">¿Quién depende económicamente de ti?*:</label>
                        <select class="form-control form-control-sm input-sm" name="depende_de_el" id="depende_de_el"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Padres</option>
                            <option>Hijos</option>
                            <option>Esposo(a)</option>
                            <option>Falimiar</option>
                            <option>Otros</option>
                            <option>Nadie</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="profecion_padre">¿A qué se dedica tu papá?*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="profecion_padre"
                            id="profecion_padre" required="" aria-required="true"> </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="profecion_madre">¿A qué se dedica tu mamá?*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="profecion_madre"
                            id="profecion_madre" required="" aria-required="true"> </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="no_hermanos">¿Cuántos hermanos tienes?*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="no_hermanos"
                            id="no_hermanos" required="" aria-required="true"> </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" for="act_hermanos">Señala la principal actividad de cada
                            uno:</label>
                        <textarea class="form-control form-control-sm input-sm" name="act_hermanos" id="act_hermanos"
                            placeholder="Máximo 250 caracteres" maxlength="250"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="ingreso_familiar">Ingreso familiar mensual
                            (aproximado)*:</label>
                        <input type="text" class="form-control form-control-sm input-sm" name="ingreso_familiar"
                            id="ingreso_familiar" required="" aria-required="true"> </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="residencia">¿La casa que habitas es?*:</label>
                        <select class="form-control form-control-sm input-sm" name="residencia" id="residencia"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Propia</option>
                            <option>Rentada</option>
                            <option>Prestada</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="trasposte">¿Qué medio de transporte usas para llegar a la
                            Universidad?*: </label>
                        <select class="form-control form-control-sm input-sm" name="trasposte" id="trasposte"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Automovil propio</option>
                            <option>Trasporte publico</option>
                            <option>Bicicleta</option>
                            <option>Motocicleta</option>
                            <option>Caminando</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="costo_tranp"> ¿Cuál es el costo semanal de tus traslados a
                            la Universidad?*: </label>
                        <input type="text" class="form-control form-control-sm input-sm" name="costo_tranp"
                            id="costo_tranp" required="" aria-required="true"> </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="tiempo_trasp">¿Cuánto tiempo usas para trasladarte a la
                            Universidad?*: </label>
                        <select class="form-control form-control-sm input-sm" name="tiempo_trasp" id="tiempo_trasp"
                            required="" aria-required="true">
                            <option value="">Seleccione una opción</option>
                            <option>Menos de 1 hora.</option>
                            <option>De 1hr. a 2hrs.</option>
                            <option>De 2hrs. a 3hrs.</option>
                            <option>Más de 3hrs.</option>
                        </select>
                    </div>
                </div>

                <input type="button" name="previous" class="previous-form btn btn-secondary" value="Previous" />

                <input type="button" class="next-form btn btn-info" value="Next" />
            </fieldset>




            <!-- Seccion de aspectos de salud -->
            <fieldset>
                <div class="card-footer text-muted">
                    <h3>Aspectos de Salud</h3>
                </div>
                <div role="tabpanel" class="tab-pane active" id="infosalud">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label" for="estado_salud">¿Cómo consideras tu estado de
                                salud?*:</label>
                            <select class="form-control form-control-sm input-sm valid" name="estado_salud" id="estado_salud"
                                required="" aria-required="true" aria-invalid="false">
                                <option value="">Seleccione una opción</option>
                                <option>Buena</option>
                                <option>Regular</option>
                                <option>Mala</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="enfermedad_alergia">¿Padeces alguna enfermedad o
                                alergia?:</label>
                            <div class="input-group"> <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkalergia">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" name="enfermedad_alergia"
                                    id="enfermedad_alergia" placeholder="Especifica*" required="" aria-required="true"
                                    disabled="disabled"> </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" for="enfmenor"> ¿Con qué frecuencia presentas enfermedades
                                menores como gripe, infecciones estomacales, dolores de cabeza, etc.? (Especifica
                                enfermedad y frecuencia): </label>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select class="form-control form-control-sm input-sm" name="enferm_menor" id="enferm_menor"
                                        required="" aria-required="true">
                                        <option value="">Seleccione una opción</option>
                                        <option>Dolores de cabeza</option>
                                        <option>Infecciones estomacales</option>
                                        <option>Gripe</option>
                                        <option>Otros</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control form-control-sm input-sm" name="frec_enf_menor" id="frec_enf_menor"
                                        required="" aria-required="true">
                                        <option value="">Seleccione una opción</option>
                                        <option>Seguido</option>
                                        <option>Algunas veces a la semana</option>
                                        <option>Algunas veces al mes</option>
                                        <option>Rara la vez</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label" for="medicamento">¿Tomas algún medicamento
                                periódicamente?:</label>
                            <div class="input-group"> <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkmedicamento">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" name="medicamento" id="medicamento"
                                    placeholder="¿Cuál?*" required="" aria-required="true" disabled="disabled"> </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="hora_alimentos">¿Tienes un horario fijo para comer tus
                                alimentos?:</label>
                            <div class="input-group"> <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkhoraalimento">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" name="hora_alimentos"
                                    id="hora_alimentos" placeholder="Especifica*" required="" aria-required="true"
                                    disabled="disabled"> </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="desayuna_razon">¿Desayunas antes de venir a la
                                Universidad?:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkdesayuna">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" id="desayuna_razon"
                                    name="desayuna_razon" placeholder="¿Por qué?*" required="" aria-required="true"
                                    disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="droga">¿Has sufrido algún accidente?:</label>
                            <div class="input-group"> <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkaccidente">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" id="accidente_sec" name="accidente_sec"
                                    placeholder="Especifica si hubo secuelas*" disabled="disabled"> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label">¿Con qué frecuencia consumes comida chatarra?*: </label>
                            <div class="input-group">
                                <select class="form-control form-control-sm input-sm" name="chatarra_cant" id="chatarra_cant"
                                    required="" aria-required="true">
                                    <option value="">Especifica cantidad</option>
                                    <option>Muy poco</option>
                                    <option>Poco</option>
                                    <option>Mucho</option>
                                </select>
                                <select class="form-control form-control-sm input-sm" name="chatarra_frec" id="chatarra_frec"
                                    required="" aria-required="true">
                                    <option value="">Especifica frecuencia</option>
                                    <option>Varía veces a la dia</option>
                                    <option>Una vez a la semana</option>
                                    <option>Varía veces a la semana</option>
                                    <option>Algunas veces al mes</option>
                                    <option>Rara vez</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">¿Fumas?:</label>
                            <div class="input-group">
                                <span class="input-group-addon">Si <input type="checkbox" id="checkfuma"></span>
                                <select class="form-control form-control-sm input-sm" name="fuma_cant" id="fuma_cant" required=""
                                    aria-required="true">
                                    <option value="">Especifica cantidad*</option>
                                    <option>Muy poco</option>
                                    <option>Poco</option>
                                    <option>Mucho</option>
                                </select>
                                <select class="form-control form-control-sm input-sm" name="fuma_frec" id="fuma_frec" required=""
                                    aria-required="true">
                                    <option value="">Especifica frecuencia*</option>
                                    <option>Varía veces a la dia</option>
                                    <option>Una vez a la semana</option>
                                    <option>Varía veces a la semana</option>
                                    <option>Algunas veces al mes</option>
                                    <option>Rara vez</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">¿Ingieres bebidas alcohólicas?: </label>
                            <div class="input-group">
                                <span class="input-group-addon">Si <input type="checkbox" id="checkalcohol"></span>
                                <select class="form-control form-control-sm input-sm" name="alcohol_cant" id="alcohol_cant" required=""
                                    aria-required="true">
                                    <option value="">Especifica cantidad*</option>
                                    <option>Muy poco</option>
                                    <option>Poco</option>
                                    <option>Mucho</option>
                                </select>
                                <select class="form-control form-control-sm input-sm" name="alcohol_frec" id="alcohol_frec" required=""
                                    aria-required="true">
                                    <option value="">Especifica frecuencia*</option>
                                    <option>Varía veces a la dia</option>
                                    <option>Una vez a la semana</option>
                                    <option>Varía veces a la semana</option>
                                    <option>Algunas veces al mes</option>
                                    <option>Rara vez</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">¿Has consumido algún tipo de droga?: </label>
                            <div class="input-group">
                                <span class="input-group-addon">Si <input type="checkbox" id="checkdroga"></span>
                                <select class="form-control form-control-sm input-sm" name="droga_cant" id="droga_cant" required=""
                                    aria-required="true" disabled="disabled">
                                    <option value="">Especifica cantidad*</option>
                                    <option>Muy poco</option>
                                    <option>Poco</option>
                                    <option>Mucho</option>
                                </select>
                                <select class="form-control form-control-sm input-sm" name="droga_frec" id="droga_frec" required=""
                                    aria-required="true" disabled="disabled">
                                    <option value="">Especifica frecuencia*</option>
                                    <option>Varía veces a la dia</option>
                                    <option>Una vez a la semana</option>
                                    <option>Varía veces a la semana</option>
                                    <option>Algunas veces al mes</option>
                                    <option>Rara vez</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">¿Has recibido atención psicológica?:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkatenpsicol">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" id="psico_tiempo" name="psico_tiempo"
                                    placeholder="¿Cuánto tiempo?*" required="" aria-required="true" disabled="disabled">
                                <input type="text" class="form-control form-control-sm input-sm" id="psico_motiv" name="psico_motiv"
                                    placeholder="Motivo de consulta*" required="" aria-required="true"
                                    disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">¿Has recibido atención psiquiátrica?:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkatenpsiqui">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" id="psiqui_tiempo" name="psiqui_tiempo"
                                    placeholder="¿Cuánto tiempo?*" required="" aria-required="true" disabled="disabled">
                                <input type="text" class="form-control form-control-sm input-sm" id="psiqui_motiv" name="psiqui_motiv"
                                    placeholder="Motivo de consulta*" required="" aria-required="true"
                                    disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">¿Tienes seguridad social?:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Si <input type="checkbox" id="checkseguro">
                                </span>
                                <input type="text" class="form-control form-control-sm input-sm" id="seguro_inst" name="seguro_inst"
                                    placeholder="¿En cuál institución?*" required="" aria-required="true">
                                <input type="text" class="form-control form-control-sm input-sm" id="seguro_no" name="seguro_no"
                                    placeholder="Número de seguridad social*" required="" aria-required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Marque los aspectos que observa en el alumno de forma
                            evidente::</label>
                        <div>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Obesidad"> Obesidad
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Delgadez extrema"> Delgadez extrema
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Manchas en la piel"> Manchas en la
                                piel
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Falta de energía"> Falta de energía
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Problemas de dentadura"> Problemas
                                de dentadura
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Problemas visuales"
                                    checked="checked"> Problemas visuales
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Problemas auditivos"> Problemas
                                auditivos
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Discapacidades"> Discapacidades
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="aspectossalud[]" value="Otros"> Otros
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-secondary" value="Previous" />
                <input type="button" name="next" class="next-form btn btn-info" value="Next" />
            </fieldset>
            <fieldset>
                <h3>Step 3: Add Contact Information</h3>
                <div class="form-group">
                    <label for="mobile">Mobile*</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" placeholder="Communication Address"></textarea>
                </div>
                <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
                <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
            </fieldset>


        </div>
</div>



</form>

<script type="text/javascript">
// -->Selector<-- -->Evento<--
$(document).ready(function() {
    var form_count = 1,
        previous_form, next_form, total_forms;
    total_forms = $("fieldset").length;
    $(".next-form").click(function() {
        previous_form = $(this).parent();
        next_form = $(this).parent().next();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(++form_count);
    });
    $(".previous-form").click(function() {
        previous_form = $(this).parent();
        next_form = $(this).parent().prev();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(--form_count);
    });
    setProgressBarValue(form_count);

    function setProgressBarValue(value) {
        var percent = parseFloat(100 / total_forms) * value;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    }
    // Handle form submit and validation
    $("#register_form").submit(function(event) {
        var error_message = '';
        if (!$("#email").val()) {
            error_message += "Please Fill Email Address";
        }
        if (!$("#password").val()) {
            error_message += "<br>Please Fill Password";
        }
        if (!$("#mobile").val()) {
            error_message += "<br>Please Fill Mobile Number";
        }
        // Display error if any else submit form
        if (error_message) {
            $('.alert-danger').removeClass('hide').html(error_message);
            return false;
        } else {
            return true;
        }
    });
});
</script>



<script type="text/javascript">
    $(document).ready(function() {
    $(function (e) {
        var v = validateForm('#frmdoadd');
        $("input[type=radio][name=trabaja]").disableElements($("#elemnttrabaja"));
        $("#checkalergia").disablecheck($("#enfermedad_alergia"), true);
        $("#checkmedicamento").disablecheck($("#medicamento"), true);
        $("#checkhoraalimento").disablecheck($("#hora_alimentos"), true);
        $("#checkdesayuna").disablecheck($("#desayuna_razon"), false);
        
		$("#checkfuma").disablecheck($("#fuma_cant"), true);
		$("#checkfuma").disablecheck($("#fuma_frec"), true);
        
		$("#checkalcohol").disablecheck($("#alcohol_cant"), true);
		$("#checkalcohol").disablecheck($("#alcohol_frec"), true);
        
        $("#checkdroga").disablecheck($("#droga_cant"), true);
        $("#checkdroga").disablecheck($("#droga_frec"), true);
        
        $("#checkaccidente").disablecheck($("#accidente_sec"), true);
        
        $("#checkatenpsicol").disablecheck($("#psico_tiempo"), true);
        $("#checkatenpsicol").disablecheck($("#psico_motiv"), true);
        
        $("#checkatenpsiqui").disablecheck($("#psiqui_tiempo"), true);
        $("#checkatenpsiqui").disablecheck($("#psiqui_motiv"), true);
        
        $("#checkseguro").disablecheck($("#seguro_inst"), true);
        $("#checkseguro").disablecheck($("#seguro_no"), true);
        
        $("#checkrelacion").disablecheck($("#relacion"), true);
        $("#checkprimeraopc").disablecheck($("#primeraopc_inst"), true);
        $("#checkcarrprimeraopc").disablecheck($("#primeraopc_carr"), true);
        $("#checkotroexamen").disablecheck($("#otro_examen"), true);
        
        $("#checkmatdif").disablecheck($("#materia_dif"), false);
        $("#checkmatdif").disablecheck($("#materia_dif_razon"), false);
		
		$("#checkmatfac").disablecheck($("#materia_fal"), false);
        $("#checkmatfac").disablecheck($("#materia_fal_razon"), false);
		
		$("#checkreprobado").disablecheck($("#materia_rep"), true);
        $("#checkreprobado").disablecheck($("#materia_rep_razon"), true);
        
        $("#checkinterrunestud").disablecheck($("#estudio_interr"), true);
        $("#checkinterrunestud").disablecheck($("#estudio_interr_razon"), true);
        
        $("#checklibros").disablecheck($("#nolibros"), true);
        
        //$("#curp").rules("add", "valida_curp");
        $("#rfc").rules("add", "valida_rfc");
        $("#correo").rules("add", "email");
        $("#fechaNac").rules("add", "valida_fecha");
        $("#CENEVAL").rules("add", "digits");
        
        $("#promedio_bach").rules("add", "number");
        $("#promedio_bach").rules("add", { min: 1,max: 10 });
        
        $("#nohijos").rules("add", "digits");
        $("#ingreso_men").rules("add", "digits");
        $("#no_hermanos").rules("add", "digits");
        $("#costo_tranp").rules("add", "digits");
        $("#ingreso_familiar").rules("add", "digits");
        $("#nolibros").rules("add", "digits");
        $("#telfijo").rules("add", "digits");
        $("#telfijo").rules("add", { exactlength: 10 });
        $("#celular").rules("add", "digits");
        $("#celular").rules("add", { exactlength: 10 });
        $("#religion").rules("add", "valida_AZ");
        $("#profecion_padre").rules("add", "valida_AZ");
        $("#profecion_madre").rules("add", "valida_AZ");
        $("#enfermedad_alergia").rules("add", "valida_AZ");
        $("#desayuna_razon").rules("add", "valida_AZ");
        $("#calle").rules("add", "valida_alfanumerico");
        $("#lugar_trabajo").rules("add", "valida_alfanumerico");
        $("#medicamento").rules("add", "valida_alfanumerico");
        $("#hora_alimentos").rules("add", "valida_alfanumerico");
        $("#alcohol").rules("add", "valida_alfanumerico");
        $("#droga").rules("add", "valida_alfanumerico");
        $("#accidente_sec").rules("add", "valida_alfanumerico");
        $("#psico_tiempo").rules("add", "valida_alfanumerico");
        $("#psico_motiv").rules("add", "valida_alfanumerico");
        $("#psiqui_tiempo").rules("add", "valida_alfanumerico");
        $("#psiqui_motiv").rules("add", "valida_alfanumerico");
        $("#cualidades").rules("add", "valida_alfanumerico");
        $("#areaaport").rules("add", "valida_alfanumerico");
        $("#valoresgente").rules("add", "valida_alfanumerico");
        $("#disgustagente").rules("add", "valida_alfanumerico");
        $("#tiempolibre").rules("add", "valida_alfanumerico");
        $("#miedos").rules("add", "valida_alfanumerico");
        $("#relacion").rules("add", "valida_alfanumerico");
        $("#futuroper").rules("add", "valida_alfanumerico");
        $("#futuroacad").rules("add", "valida_alfanumerico");
        $("#futuroprof").rules("add", "valida_alfanumerico");
        $("#eleccion_inst").rules("add", "valida_alfanumerico");
        $("#primeraopc_inst").rules("add", "valida_alfanumerico");
        $("#primeraopc_carr").rules("add", "valida_alfanumerico");
        $("#espectativas_carr").rules("add", "valida_alfanumerico");
        $("#otro_examen").rules("add", "valida_alfanumerico");
        $("#info_apoyo_carr").rules("add", "valida_alfanumerico");
        $("#materia_dif").rules("add", "valida_alfanumerico");
        $("#materia_dif_razon").rules("add", "valida_alfanumerico");
        $("#materia_fal").rules("add", "valida_alfanumerico");
        $("#materia_fal_razon").rules("add", "valida_alfanumerico");
        $("#materia_rep").rules("add", "valida_alfanumerico");
        $("#materia_rep_razon").rules("add", "valida_alfanumerico");
        $("#metodo_est").rules("add", "valida_alfanumerico");
        $("#metodo_est_razon").rules("add", "valida_alfanumerico");
        $("#estudio_interr").rules("add", "valida_alfanumerico");
        $("#estudio_interr_razon").rules("add", "valida_alfanumerico");
        $("#dif_esc").rules("add", "valida_alfanumerico");
        $("#mayor_logro_esc").rules("add", "valida_alfanumerico");
        
        $("#seguro_inst").rules("add", "valida_AZ");
        $("#seguro_no").rules("add", "digits");
        
        $("#noext").rules("add", "valida_num_dir");
        $("#noint").rules("add", "valida_num_dir");
        
        $('.time').timepicker();
        $('.date').datepicker({
            language: "es"
            , format: "yyyy-mm-dd"
            , todayBtn: true
            , forceParse: false
            , autoclose: true
            , todayHighlight: true
        });
        $('#frmdoadd').bootstrapWizard({
            'tabClass': 'nav nav-pills'
            , 'onNext': function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    if (!v.form()) { return false; }
            }
            , onTabClick: function () { return false; }
        });
        $('#estado').change(function () {
            ajax_div($('#municipio'), 'http://www.isictprojects.com/catalogos/municipios', 'estado=' + $('#estado').val());
        });
        $('#municipio').change(function () {
            ajax_div($('#localidad'), 'http://www.isictprojects.com/catalogos/localidades', 'municipio=' + $('#municipio').val());
        });
		
        $('#edoprep').change(function () {
            ajax_div($('#munprep'), 'http://www.isictprojects.com/catalogos/municipios', 'estado=' + $('#edoprep').val());
			$('#munprep').trigger('change');
        });
        $('#munprep').change(function () {
            ajax_div($('#preparatoria'), 'http://www.isictprojects.com/catalogos/preparatoria', 'municipio=' + $('#munprep').val());
        });
        
         $('#frmdoadd').submit(function (e) {
             e.preventDefault();
             if (v.form()) {
                 ajax_div($('#result_add'), 'http://www.isictprojects.com/entrevista/agregar', $('#frmdoadd').serialize());
             }
         });
        
    });
    });

</script>

@stop