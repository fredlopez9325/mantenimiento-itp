<?php
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', route('home'));
});
Breadcrumbs::for('departamentos', function ($trail) {
    $trail->parent('home');
    $trail->push('Departamentos', route('departamentos.index'));
});
Breadcrumbs::for('new-departamento', function ($trail) {
    $trail->parent('departamentos');
    $trail->push('Nuevo departamento', route('departamentos.create'));
});
Breadcrumbs::for('edit-departamento', function ($trail, $e) {
    $trail->parent('departamentos');
    $trail->push('Editar departamento', route('departamentos.create', $e->id));
});

Breadcrumbs::for('profiles', function ($trail) {
    $trail->parent('home');
    $trail->push('Perfiles', route('profiles.index'));
});
Breadcrumbs::for('new-profile', function ($trail) {
    $trail->parent('profiles');
    $trail->push('Nuevo perfil', route('profiles.create'));
});
Breadcrumbs::for('edit-profile', function ($trail, $e) {
    $trail->parent('profiles');
    $trail->push('Editar perfil', route('profiles.create', $e->id));
});

Breadcrumbs::for('infraestructura', function ($trail) {
    $trail->parent('home');
    $trail->push('Solicitudes de Infraestructuras', route('infraestructura.index'));
});
Breadcrumbs::for('new-infraestructura', function ($trail) {
    $trail->parent('infraestructura');
    $trail->push('Nuevo formato', route('infraestructura.create'));
});
Breadcrumbs::for('edit-infraestructura', function ($trail, $e) {
    $trail->parent('infraestructura');
    $trail->push('Editar formato', route('infraestructura.create', $e->id));
});


Breadcrumbs::for('correctivo', function ($trail) {
    $trail->parent('home');
    $trail->push('Solicitudes de Manteniemto correctivo', route('correctivo.index'));
});
Breadcrumbs::for('new-correctivo', function ($trail) {
    $trail->parent('correctivo');
    $trail->push('Nuevo formato', route('correctivo.create'));
});
Breadcrumbs::for('edit-correctivo', function ($trail, $e) {
    $trail->parent('correctivo');
    $trail->push('Editar formato', route('correctivo.create', $e->id));
});

Breadcrumbs::for('new-orden', function ($trail, $e) {
    $trail->parent('correctivo');
    $trail->push('Orden de trabajo', route('orden.create', $e->id));
});


Breadcrumbs::for('edit-orden', function ($trail, $e) {
    $trail->parent('correctivo');
    $trail->push('Editar orden de trabajo', route('orden.edit', $e->id));
});



Breadcrumbs::for('preventivo', function ($trail) {
    $trail->parent('home');
    $trail->push('Formatos preventivos', route('preventivo.index'));
});
Breadcrumbs::for('new-preventivo', function ($trail) {
    $trail->parent('preventivo');
    $trail->push('Nuevo formato', route('preventivo.create'));
});
Breadcrumbs::for('edit-preventivo', function ($trail, $e) {
    $trail->parent('preventivo');
    $trail->push('Editar formato', route('preventivo.create', $e->id));
});


Breadcrumbs::for('show-area', function ($trail, $e) {
    $trail->parent('home');
    $trail->push('Detalles', route('area.show', $e->id));
});


Breadcrumbs::for('plan-area', function ($trail, $e) {
    $trail->parent('new-preventivo');
    $trail->push('Detalles de preventivo', route('plan.index', $e->id));
});

Breadcrumbs::for('periodo', function ($trail) {
    $trail->parent('home');
    $trail->push('Periodos', route('periodo.index'));
});
Breadcrumbs::for('new-periodo', function ($trail) {
    $trail->parent('periodo');
    $trail->push('Nuevo Periodo', route('periodo.create'));
});
Breadcrumbs::for('edit-periodo', function ($trail, $e) {
    $trail->parent('periodo');
    $trail->push('Editar periodo', route('periodo.create', $e->id));
});
