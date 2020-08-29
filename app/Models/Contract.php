<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $table = 'contracts';

    protected $fillable = [
        'property_id',
        'contractor_type',
        'contractor_document',
        'contractor_email',
        'contractor_name',
    ];

    const CONTRACTOR_TYPES = [
        'person'  => 'Pessoa Física',
        'company' => 'Pessoal Jurídica',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
