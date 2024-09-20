<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Modal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Modal de ya soy cliente width: 1120px; height: 1005px -->
    <div class="container col-sm-12 col-md-12 col-lg-4" style="width: 80%; height: 1000px; border-radius: 20px; border: 2px solid #000000; background: #DEFDB7; box-shadow: 0px 4px 4px 0px rgba(0, 2, 2, 0.700) inset;">
        <div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#primeravezModal" class="btn btn-Dark text-white mt-5 fw-bold" style="width: 200px; height: 55px; border-radius: 5px; background: #fe020e;">Mi Primera Vez</button>
        </div>
        <div>
            <strong>
                <button type="button" data-bs-toggle="modal" data-bs-target="#soyClienteModal" class="btn btn-primary text-white mt-5 fw-bold" style="width: 200px; height: 55px; border-radius: 5px; background: #070473;">Ya Soy Cliente</button>
            </strong>
        </div>

        <!-- SECCION Primeravez -->
        <div class="modal fade" id="primeravezModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="primeravezModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="primeravezModalLabel">FORMULARIO DE ENVIO DE ARCHIVOS - PRIMERA VEZ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-1">
                            <h3 class="mb-4 btn btn-warning">Tus datos para conocerte</h3>
                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu Nombre">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="telefono">Teléfono:</label>
                                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="direccion">Dirección:</label>
                                        <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="dni">DNI:</label>
                                        <input type="text" class="form-control" id="dni" placeholder="DNI">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="institucion">Institución:</label>
                                        <input type="text" class="form-control" id="institucion" placeholder="Institución">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="archivo">Déjanos tu archivo:</label>
                                        <input type="file" class="form-control" id="archivo">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="cantidadHojas">Cantidad de Hojas:</label>
                                        <input type="number" class="form-control" id="cantidadHojas" placeholder="Cantidad de Hojas">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="tipoImpresion">Tipo de Impresión:</label>
                                        <select id="tipoImpresion" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Laser color</option>
                                            <option>Laser B/N</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="tipoPapel">Tipo de Papel:</label>
                                        <select id="tipoPapel" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Obra de 80 Grs</option>
                                            <option>Obra de 90 Grs</option>
                                            <option>Obra de 115 Grs</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="simpleDobleFas">Simple o Doble Faz:</label>
                                        <select id="simpleDobleFas" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Simple Fas</option>
                                            <option>Doble Fas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="cantidadEjemplares">Cantidad de Ejemplares:</label>
                                        <input type="number" class="form-control" id="cantidadEjemplares" placeholder="Cantidad de Ejemplares">
                                    </div>

                                    <!-- check Radio forma d envio -->
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="homePickup" value="homePickup" checked>
                                            <label class="form-check-label fw-bold" for="homePickup">
                                                        Retira por El Local
                                                    </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="deliveryService" value="deliveryService">
                                            <label class="form-check-label fw-bold" for="deliveryService">
                                                    Enviar por delivery $
                                                </label>
                                        </div>
                                    </div>
                                    <!-- FIN check Radio forma d envio -->




                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4 btn btn-danger">
                                        <h4 class="marg">Costo: $5780.45</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <button type="reset" class="btn btn-warning mt-3">Limpiar campos</button>
                                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION Soy Cliente -->
        <div class="modal fade" id="soyClienteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="soyClienteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title btn-warning" id="soyClienteModalLabel">FORMULARIO DE YA SOY CLIENTE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-1">
                            <h3 class="mb-4 btn btn-warning">** YA SOY CLIENTE **</h3>
                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="nombre2">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre2" placeholder="Escribe tu Nombre">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="telefono2">Teléfono:</label>
                                        <input type="text" class="form-control" id="telefono2" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="direccion2">Dirección:</label>
                                        <input type="text" class="form-control" id="direccion2" placeholder="Dirección">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="dni2">DNI:</label>
                                        <input type="text" class="form-control" id="dni2" placeholder="DNI">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="institucion2">Institución:</label>
                                        <input type="text" class="form-control" id="institucion2" placeholder="Institución">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="email2">Email:</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="archivo2">Déjanos tu archivo:</label>
                                        <input type="file" class="form-control" id="archivo2">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="cantidadHojas2">Cantidad de Hojas:</label>
                                        <input type="number" class="form-control" id="cantidadHojas2" placeholder="Cantidad de Hojas">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="tipoImpresion2">Tipo de Impresión:</label>
                                        <select id="tipoImpresion2" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Laser color</option>
                                            <option>Laser B/N</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="tipoPapel2">Tipo de Papel:</label>
                                        <select id="tipoPapel2" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Obra de 80 Grs</option>
                                            <option>Obra de 90 Grs</option>
                                            <option>Obra de 115 Grs</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="simpleDobleFas2">Simple o Doble Faz:</label>
                                        <select id="simpleDobleFas2" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Simple Fas</option>
                                            <option>Doble Fas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <label for="cantidadEjemplares2">Cantidad de Ejemplares:</label>
                                        <input type="number" class="form-control" id="cantidadEjemplares2" placeholder="Cantidad de Ejemplares">
                                    </div>

                                    <!-- check Radio forma d envio -->
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4 mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="homePickup" value="homePickup" checked>
                                            <label class="form-check-label fw-bold" for="homePickup">
                                                        Retira por El Local
                                                    </label>

                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="deliveryService" value="deliveryService">
                                            <label class="form-check-label fw-bold" for="deliveryService">
                                                    Enviar por delivery $
                                            </label>
                                        </div>
                                    </div>
                                    <!-- FIN check Radio forma d envio -->


                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-sm-12 col-md-12 col-lg-6 col-xl-4 btn btn-danger">
                                        <h4 class="marg">Costo: $5780.45</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                        <button type="reset" class="btn btn-warning mt-3">Limpiar campos</button>
                                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
