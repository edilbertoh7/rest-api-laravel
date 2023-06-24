<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    // edy a client has many services
    public function services()
    {
        return $this->belongsToMany(Service::class,'clients_services');
    }
}
