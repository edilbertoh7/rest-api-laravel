<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    // edy a service has many clients
    public function clients()
    {
        return $this->belongsToMany(Client::class,'clients_services');
    }
}
