<div class="col-md-4  mb-2 col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center">
                <div>
                    <img src="{{ asset('svg/user.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                </div>
            </div>
            <a href="{{ route('profiles.index') }}" class="btn btn-primary text-white btn-block">
                Usuarios
            </a>
        </div>
    </div>
</div>
<div class="col-md-4  mb-2 col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center">
                <div>
                    <img src="{{ asset('svg/departamento.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                </div>
            </div>
            <a href="{{ route('departamentos.index') }}" class="btn btn-primary text-white btn-block">
            Departamentos 
            </a>
        </div>
    </div>
</div>

<div class="col-md-4  mb-2 col-12">
    <div class="card shadow">
        <div class="card-body">
            <div class="text-center">
                <div>
                    <img src="{{ asset('svg/periodo.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                </div>
            </div>
            <a href="{{ route('periodo.index') }}" class="btn btn-primary text-white btn-block">
                Periodos
            </a>
        </div>
    </div>
</div>