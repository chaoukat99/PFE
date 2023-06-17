<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Expert extends Model implements Authenticatable
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;
    protected $fillable=["nom","email","password"];
    public function getAuthIdentifierName()
    {
        return 'id';
    }
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
}
