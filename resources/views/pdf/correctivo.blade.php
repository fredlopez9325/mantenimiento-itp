<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif">
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
                            Nombre del Documento: Formato para Solicitud de Mantenimiento Correctivo
                        </h6>
                    </th>
                    <th style="width: 25%">
                        <h6 style="font-size: 14px">Código:ITPIN-AD-PO-001-02</h6>
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
        
        <div class="w-100">
            <h5 class="text-center">SOLICITUD DE MANTENIMIENTO CORRECTIVO</h5>
        </div>
        <div class="w-50" style="margin-left: 50%">
            <table class="table-bordered w-100">
            <thead>
                <tr>
                    <td>
                        Recursos materiales y servicios
                    </td>
                    <td class="text-center">
                        @if ($formato->role == 'Recursos Materiales y Servicios')
                            X
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Mantenimiento de equipo
                    </td>
                    <td class="text-center">
                        @if ($formato->role == 'Mantenimiento de Equipo')
                            X
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Centro de computo
                    </td>
                    <td class="text-center" style="width: 20%">
                        @if ($formato->role == 'Centro de Cómputo')
                            X
                        @endif
                    </td>
                </tr>
            </thead>
            </table>
        </div>
        
        <table class="table-bordered w-100 mt-4">
            <thead>
            <tr>
                <th>
                    <h6 class="ml-2 mt-1">Area solicitante: <span class="ml-3">{{ $formato->user->role }}</span></h6>
                </th>
            </tr>
            <tr>
                <th>
                    <h6 class="ml-2 mt-1">Fecha de elaboración: <span class="ml-3">{{ $formato->created_at->format('d/m/Y') }}</span></h6>
                </th>
            </tr>
            <tr>
                <th>
                    <h6 class="ml-2 mt-1">Descripción del servicio solicitado o falla a reparar: </h6>
                </th>
            </tr>
            <tr>
                <th style="height: 200px">
                    <p class="p-4" style="font-weight: 400">
                        {{ $formato->descripcion }}
                    </p>
                </th>
            </tr>
            </thead>
        </table>
        
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