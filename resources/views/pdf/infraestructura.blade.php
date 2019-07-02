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
                            Nombre del Documento: Formato para la Lista de Verificación de Infraestructura y equipo
                        </h6>
                        
                    </th>
                    <th style="width: 25%">
                        <h6 style="font-size: 14px">Código: ITPIN-AD-PO-001-01</h6>
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
        <h5 class="mt-1">
            <strong>Anexo 9.1</strong>
        </h5>
        <div class="w-100 mt-2">
            <table class="table-bordered w-100">
            <thead>
                <tr>
                <th class="ml-2 w-50">
                    <h6 class="ml-1 mt-1">
                    JEFE DE DEPARTAMENTO DE
                    </h6>
                </th>
                <th class="ml-2 w-50">
                    <h6 class="ml-1 mt-1">
                        {{ utf8_decode($formato->role) }}
                    </h6>
                </th>
                </tr>
                <tr class="w-100">
                    <th class="ml-2">
                        <h6 class="ml-1 mt-1">
                        JEFE DEL ÁREA VERIFICADA
                        </h6>
                    </th>
                    <th class="ml-2">
                        <h6>
                            {{ utf8_decode($formato->user->role) }}
                        </h6>
                    </th>
                </tr>
            </thead>
            </table>
        </div>
        
        <div class="w-100 mt-2">
            <table class="table-bordered w-100">
            <thead>
                <tr class="w-100">
                <th rowspan="2" style="width: 30%">
                    <h6 class="ml-1 mt-1 text-center">
                    ESPACIO REVISADO
                    </h6>
                </th>
                    <th rowspan="2" style="width: 55%">
                    <h6 class="ml-1 mt-1 text-center">
                    HALLAZGO
                    </h6>
                </th>
                <th colspan="2" style="width: 15%;">
                    <h6 class="ml-1 mt-1 text-center">
                    ATENDIDO
                    </h6>
                </th>
                </tr>
                <tr>
                <th >
                    <h6 class="text-center">
                    SI
                    </h6>
                </th >
                <th>
                    <h6 class="text-center">
                        NO
                    </h6>
                </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formato->area as $item)
                    <tr>
                        <td>{{ utf8_decode($item->espacio_revizado) }}</td>
                        <td>{{ utf8_decode($item->hallazgo) }}</td>
                        <td>
                            <div class="text-center">
                                @if ($item->atendido == 'Si')
                                    X
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                                @if ($item->atendido == 'No')
                                    X
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="w-100 mt-2">
            <h6>Realizó:</h6>
        </div>
        <div class="w-100 mt-2">
            <table class="w-100 mt-1 table-bordered">
            <thead>
                <tr class="w-100">
                <th class="w-50">
                    <h6 class="ml-1 mt-1">
                    DEPTO. DE RECURSOS MATERIALES Y SERVICIOS O MANTENIMIENTO DE EQUIPO O CENTRO DE CÓMPUTO
                    </h6>
                </th>
                <th class="w-50"></th>
                </tr>
                <tr>
                <th class="w-50">
                    <h6 class="mt-1 ml-1">
                    JEFE DEL ÁREA VERIFICADA
                    </h6>
                </th>
                <th class="w-50">
                    
                </th>
                </tr>
            </thead>
            </table>
        </div>
        
        <div class="position-fixed" style="bottom: 3%">
            <span>
            ITPIN-AD-PO-001-03
            </span>
        </div>
    </div>
</body>
</html>