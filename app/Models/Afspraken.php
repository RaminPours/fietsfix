<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afspraken extends Model
{
    protected $table = 'afspraken';
    protected $fillable = [
        'naam',
        'email',
        'telefoonnummer',
        'fietstype',
        'fietsmerk',
        'probleem',
        'datum',
        'tijd',
    ];
}
