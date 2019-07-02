{{-- infraestructura --}}
@if (Auth::user()->hasPermissionTo('Solicitar formato infraestructura'))
    <div class="col-md-4  mb-2 col-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center">
                    <div>
                        <img src="{{ asset('svg/file.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                    </div>
                </div>
                <a href="{{ route('infraestructura.index') }}" class="btn btn-primary text-white btn-block">
                    Infraestructura
                </a>
            </div>
        </div>
    </div>    
@endif


{{-- preventivo --}}
@if (Auth::user()->hasPermissionTo('Crear preventivo'))
    <div class="col-md-4  mb-2 col-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center">
                    <div>
                        <img src="{{ asset('svg/file.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                    </div>
                </div>
                <a href="{{ route('preventivo.index') }}" class="btn btn-primary text-white btn-block">
                Preventivos 
                </a>
            </div>
        </div>
    </div>    
@endif


{{-- correctivo --}}
@if (Auth::user()->hasPermissionTo('Solicitar formato correctivo'))    
    <div class="col-md-4  mb-2 col-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center">
                    <div>
                        <img src="{{ asset('svg/file.svg') }}" style="width: 160px;margin-bottom: 2em" alt="">
                    </div>
                </div>
                <a href="{{ route('correctivo.index') }}" class="btn btn-primary text-white btn-block">
                Correctivo 
                </a>
            </div>
        </div>
    </div>
@endif