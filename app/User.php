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
        'name', 'email','user_id', 'password','password1','userType','mobile_no','dob','sex','joined_as','date_of_joining','marital_status','uid','whatsapp_no','guardian_type','guardian_name','guardian_mobile_no1','guardian_mobile_no2','guardian_whatsapp_no','guardian_uid','local_guardian_uid','permanent_address','local_guardian_name','local_guardian_mobile_no1','local_guardian_mobile_no2','local_guardian_whatsapp_no','local_guardian_address','hostel_fee','reciept_no','date_of_reciept','session','status','agree_terms','profileCompleted','documentsCompleted','formSubmitted' ,'start_date','end_date'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function document()
    {
        return $this->hasOne('App\Documents');
    }
    public function userHostel()
    {
        return $this->hasMany('App\UserHostel');
    }

    public function hostelChangeRequest()
    {
        return $this->hasMany('App\HostelChangeRequest');
    }

    public function hostelSuperintendent()
    {
        return $this->hasMany('App\HostelSuperintendent');
    }
}
