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
                                Nombre del Documento: Formato para Programa de Mantenimiento Código: ITPIN-AD-PO-001-03 Preventivo
                            </h6>
                        </th>
                        <th style="width: 25%">
                            <h6 style="font-size: 14px">Código:ITPIN-AD-PO-001-03</h6>
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
            <h5 class="text-center">Programa de Mantenimiento Preventivo</h5>
        </div>
        
        <div class="w-100 mt-2">
            <table class="w-100">
            <thead>
                <tr class="w-100">
                <th class="w-50">
                    <h6>
                        Nombre:
                        <span class="ml-2">
                            {{ $formato->user->name }}
                        </span>
                    </h6>
                </th>
                <th>
                    <h6>
                        Año:
                        <span class="ml-2">
                            {{ $formato->created_at->format('Y') }}
                        </span>
                    </h6>
                </th>
                </tr>
            </thead>
            </table>
        </div>
        
        <div class="w-100 mt-4">
            <table class="table-bordered w-100">
            <thead class="w-100">
                <tr class="w-100">
                <th style="width: 5%">
                    <h6 class="ml-1 mt-1">NO</h6>
                </th>
                <th style="width: 30%">
                    <h6 class="mt-1 ml-1">
                    NOMBRE
                    </h6>
                </th>
                <th style="width: 7%">
                    <h6 class="mt-1 ml-1">
                    TIPO
                    </h6>
                </th>
                <th style="width: 4%">
                    <h6 class="text-center">
                    E
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    ENE
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    FEB
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    MAR
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    ABR
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    MAY
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    JUN
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    JUL
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    AGO
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    SEPT
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    OCT
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    NOV
                    </h6>
                </th>
                <th>
                    <h6 class="mt-1 ml-1">
                    DIC
                    </h6>
                </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formato->plains as $item)
                    <tr class="w-100">
                        <td>
                            <h6 class="ml-1 mt-1">
                                {{ $item->number }}
                            </h6>
                        </td>
                        <td>
                            <h6 class="ml-1 mt-1">
                                {{ $item->servicio }}
                            </h6>
                        </td>
                        <td>
                            <h6 class="ml-1 mt-1 text-center">
                                {{ $item->tipo }}
                            </h6>
                        </td>
                        <td>
                            <h6 class="ml-1 mt-1 text-center">
                                {{ $item->e }}
                            </h6>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        
        <div class="w-100 mt-2">
            <span class="text-small" style="font-size: 12px;color: #383838">
            NOTA: En la columna de servicio, en caso de requerir mayor espacio anexar información en otra hoja.
            </span>
        </div>
        
        <div class="w-100 mt-4">
            <table class="w-100">
            <thead>
                <tr class="w-100">
                <th class="w-50">
                    <h6>
                        FECHA DE ELABORACIÓN:
                        <span class="ml-2">
                            {{ $formato->created_at->format('d/m/Y') }}
                        </span>
                    </h6>
                </th>
                <th>
                    <h6>
                        ELABORÓ:
                        <span class="ml-2">
                            {{ $formato->user->name }}
                        </span>
                    </h6>
                </th>
                </tr>
                <tr class="w-100 mt-4" style="margin-top: 1em">
                <th class="w-50">
                    <h6>FECHA DE APROBACIÓN:</h6>
                </th>
                <th>
                    <h6>APROBÓ:</h6>
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