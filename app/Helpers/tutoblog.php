<?php
    use Illuminate\Support\Facades\Session;

    if (!function_exists('isSuperAdmin')) {
        function isSuperadmin()
        {
            return Session::get('rol_slug') == 'super-administrador';
        }
    }
