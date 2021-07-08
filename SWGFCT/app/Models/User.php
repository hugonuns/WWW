<?php

namespace App\Models;

use App\Http\Controllers\AlunoController;
use Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndAbilities;

    public function show($id)
    {
        return view('pagAluno', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function aluno()
    {
        return $this->hasOne(Aluno::class,'u_id');
    }

    public function orientador()
    {
        return $this->hasOne(Orientador::class,'u_id');
    }

    public function guardarSeNaoExistir()
    {
        $colDeU = User::where('email',$this->email)->get();

        $existe = $colDeU->count();

        if(!$existe){
            $this->save();
        }

        return $existe;
    }

    public function import($rowdata, &$importData_arr, $i)
    {
        $num = count($rowdata);

        if ($num == 3) {
            $data = array(
                "name"=>$rowdata[0],
                "email"=>$rowdata[1],
                "password"=>Hash::make($rowdata[2])
            );

            // Insert to MySQL database
            $user = new User();
            $user->fill($data);
            $existe = $user->guardarSeNaoExistir();
            $user->assign('aluno');
            $importData_arr[$i] = [
                'existe' => $existe,
                'elem' => $user
            ];
        }
    }

    public function toHtml()
    {
        return sprintf("<p><span>%s</span><br/><span>%s</span><br/><span>%s</span></p>",
            $this->name,
            $this->email,
            $this->password
        );
    }
}
