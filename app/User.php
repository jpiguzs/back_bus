<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'email', 
    'password',
	"first_name",
	"last_name" ,
	"phone_number",
	"picture",
	"email",
	"password",
	"remember_token",
	"last_online",
	"verification_code",
	"new_email",
	"status",
	"first",
	"last_accept_date",
	"created",
	"modified" ,
	"company_contact",
	"credits",
	"first_trip",
	"incomplete_profile",
	"phone_verify",
	"token_auto_login",
	"user_vertical" ,
	"language_id",
	"no_registered",
	 
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	public function UserPlan(){
		return $this->hasOne(UserPlan::class);
	}
}
