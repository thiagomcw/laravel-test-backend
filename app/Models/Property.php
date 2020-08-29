<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $table = 'properties';

    protected $fillable = [
        'email',
        'street',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
    ];

    public function getAddressAttribute()
    {
        $address = "{$this->street}, {$this->number}";

        if ($this->complement) {
            $address .= ", {$this->complement}";
        }

        return "$address, Bairro {$this->neighborhood}, {$this->city} - {$this->state}";
    }
}
