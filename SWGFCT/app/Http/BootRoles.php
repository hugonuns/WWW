<?php


namespace App\Http;

use Bouncer;

class BootRoles
{
    private static $inst = null;

    public static function instance()
    {
        if (!static::$inst) static::$inst = new BootRoles();
        return static::$inst;
    }

    protected function __construct()
    {
        $this->criarGrupos();
        $this->criarAbilidades();
    }

    protected function criarGrupos()
    {
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrador'
        ]);
        $prof = Bouncer::role()->firstOrCreate([
            'name' => 'prof',
            'title' => 'Professor'
        ]);
        $aluno = Bouncer::role()->firstOrCreate([
            'name' => 'aluno',
            'title' => 'Aluno'
        ]);
    }

    private function criarAbilidades()
    {
        $ban = Bouncer::ability()->firstOrCreate([
            'name' => 'ban-users',
            'title' => 'Ban users'
        ]);
    }
}
