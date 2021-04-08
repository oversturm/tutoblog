<?php

namespace App\Console\Commands;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Instalador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tutoblog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Instalador inical del Proyecto';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!$this->verificar()) {
            $rol = $this->crearRolSuperAdmin();
            $usuario = $this->crearUsuarioSuperAdmin();
            $usuario->roles()->attach($rol);
            $this->line('El rol y el Usuario Administrador se instalaron correctamente');

       }else{
           $this->error('No se puede ejecutar el instalador, porque ya hay un rol creado');
       }

    }

    private function verificar(){

       return Rol::find(1);

    }

    private function crearRolSuperAdmin(){

        $rol = "Super Administrador";
        Rol::create([
            'nombre' => $rol,
            'slug'=> Str::slug($rol, '-')
        ]);
    }

    private function crearUsuarioSuperAdmin(){

       return Usuario::create([
            'nombre'=>'tuto_admin',
            'email'=>'cjnavia@hotmail.com',
            'password'=> Hash::make('123456'),
            'estado'=> 1
            ]);

    }
}
