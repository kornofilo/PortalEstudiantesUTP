<?php

namespace App;
use App\Notifications\UserResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'nombre', 'apellido','sede','facultad','carrera','sexo','password','imagen',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','estado'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * The attributes that are mass assignable.
     *
     *
     * @param
     * @return
     */
    public function sendPasswordResetNotification($token)
  {
    $this->notify(new UserResetPassword($token));
  }

  //Función que devuelve el rol del usuario
  public function roles(){
    return $this->belongsToMany('App\Role');
  }

  public function hasAnyRole($role){
    return null !== $this->roles()->where('name', $role)->first();
  }

  public function getUserInfo($email){
    $user = App\User::where('email', $email)->first();
    return $user;
  }

  public function compraventa(){
    return $this->belongsToMany('App\Compraventa','email','email');
  }

}
