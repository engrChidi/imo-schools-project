<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'avatar','usertype','phone_number', 'reg_completed','first_name', 'last_name',
        'avatar_original','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Get the school associated with a particular user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function school()
    {
        return $this->hasOne('App\School');
    }

    /**
     * Get the teacher account associated with a partcular user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }

    /**
     * Get the business associated to a particular user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function business()
    {
        return $this->hasOne('App\Business');
    }


    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function social()
    {
        return $this->hasMany('App\SocialLogin');
    }

    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }

        return false;
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }

    public function full_name()
    {
        return $this->first_name. ' ' . $this->last_name;
    }

    public function getUserRole($id)
    {
        $userRoleId = DB::table('role_user')->where('user_id', $id)->pluck('role_id');

        $userRole = DB::table('roles')->where('id', $userRoleId)->pluck('name');

        foreach($userRole as $role){
            return $role;
        }

    }
}
