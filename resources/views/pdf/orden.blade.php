<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div class="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" style="width: 15%">
                            <div class="text-center">
                                <img src="https://s3-us-west-2.amazonaws.com/grupoensamblecreativo/logo_itp.png" alt="" style="width: 90px">
                            </div>
                        </th>
                        <th style="width: 60%">
                            <h6 style="font-size: 14px">
                                Nombre del Documento: Formato para orden de trabajo de mantenimiento.
                            </h6>
                        </th>
                        <th style="width: 25%">
                            <h6 style="font-size: 14px">Código: ITPIN-AD-PO-001-04</h6>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h6 style="font-size: 14px">Referencia a punto de la norma ISO 9001:2015 7.1.3   Y  7.1.4</h6>
                        </th>
                        <th>
                            <h6 style="font-size: 14px">Revisión 1</h6>
                        </th>
                    </tr>
                </thead>
            </table>

            <div class="w-100 mt-2">
                <h5 class="text-center">ORDEN DE TRABAJO DE MANTENIMIENTO</h5>
            </div>
            <div class="w-100">
                <h6 style="margin-left: 60%">
                    Número de control:
                    <span class="ml-3">
                        {{ $formato->numero_control }}
                    </span>
                </h6>
            </div>

            <div class="w-100 mt-3">
                <table class="w-100 table-bordered">
                    <thead class="w-100">
                        <tr>
                            <th style="width: 20%">
                                <h5 class="mt-1 ml-1">
                                    Mantenimiento:
                                </h5>
                            </th>
                            <th class="border-left-0" style="width: 40%">
                                <h6>
                                    Interno
                                    <span class="ml-3">
                                        @if ($formato->mantenimiento == 'Interno')
                                            X
                                        @endif
                                    </span>
                                </h6>
                            </th>
                            <th class="border-left-0" style="width: 40%">
                                <h6>
                                    Externo
                                    <span class="ml-3">
                                        @if ($formato->mantenimiento == 'Externo')
                                            X
                                        @endif
                                    </span>
                                </h6>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3" class="w-100">
                                <h5 class="ml-1 mt-1">
                                    Tipo de servicio:
                                    <span class="ml-3">
                                    {{ $formato->tipo_servicio }}
                                    </span>
                                </h5>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <h5 class="ml-1 mt-1">
                                Asignado a:
                                <span class="ml-3">
                                    {{ $formato->asignado_a }}
                                </span>
                                </h5>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>


            <div class="w-100 mt-4">
                <table class="w-100 table-bordered">
                    <thead>
                        <tr class="w-100">
                        <th colspan="2">
                            <h5 class="mt-1 ml-1">Fecha de realización: <span class="ml-3">{{ $formato->created_at->format('d/m/Y') }}</span></h5>
                        </th>
                        </tr>
                        <tr class="w-100" style="height: 150px">
                        <th class="mt-0" colspan="2">
                            <h5 class="mt-1 ml-1">Trabajos realizados: </h5>
                            <p class="ml-2" style="font-weight: 300">
                                {{ $formato->trabajo_realizado }}
                            </p>
                        </th>
                        </tr>
                        <tr >
                        <th class="mt-0">
                            <h5 class="mt-1 ml-1">
                                Verificado y Liberado por:
                                <span class="ml-3">
                                    {{ $formato->verificado }}
                                </span>
                            </h5>
                        </th>
                            <th class="mt-0">
                            <h5 class="mt-1 ml-1">Fecha y firma: </h5>
                        </th>
                        </tr>
                    </thead>
                </table>
            </div>
                <div class="w-100 mt-2">
                    <span class="text-sm">
                        c.c.p. Departamento de Planeación Programación y Presupuestación
                    </span>
                    <br>
                    <span class="text-sm">
                    c.c.p. Área Solicitante.
                </span>
            </div>
            <div class="position-fixed" style="bottom: 3%">
                <span>
                ITPIN-AD-PO-001-03
                </span>
            </div>
        </div>
</body>
</html>
