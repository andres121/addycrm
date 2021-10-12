<?php

return [
    'cache_management' => 'Gestión de la caché',
    'cache_commands' => 'Borrar comandos de la caché',
    'comandos' => [
        'clear_cms_cache' => [
            'title' => 'Borrar toda la caché del CMS',
            'description' => 'Borrar la caché del CMS: caché de base de datos, bloques estáticos... Ejecute este comando cuando no vea los cambios después de actualizar los datos',
            'success_msg' => 'Caché limpiada',
        ],
        'refresh_compiled_views' => [
            'title' => 'Refrescar vistas compiladas',
            'description' => 'Limpiar las vistas compiladas para actualizarlas',
            'success_msg' => 'Vista de la caché refrescada',
        ],
        'clear_config_cache' => [
            'title' => 'Borrar caché de configuración',
            'description' => 'Puede que necesites refrescar la caché de configuración cuando cambies algo en el entorno de producción',
            'success_msg' => 'Config cache cleaned',
        ],
        'clear_route_cache' => [
            'title' => 'Limpiar caché de rutas',
            'description' => 'Limpiar caché de rutas',
            'success_msg' => 'La caché de rutas ha sido limpiada',
        ],
        'clear_log' => [
            'title' => 'Borrar registro',
            'description' => 'Borrar archivos de registro del sistema',
            'success_msg' => 'El registro del sistema ha sido limpiado',
        ],
    ],
];
