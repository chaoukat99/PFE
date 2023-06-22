<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Expert extends  Model implements Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable;
    use \Illuminate\Auth\Authenticatable;


    // use HasFactory;

   protected $guard = "experts";


   protected $fillable=['fullname','email','password'];



    public function users()
    {
        return $this->belongsToMany(User::class,'expert_user')->where('role','client')->withPivot('id','date','status');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function earnings()
    {
        return $this->hasMany(Earning::class);
    }
}
