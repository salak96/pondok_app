<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pengajar extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function santri():BelongsTo
    {
        return $this->belongsTo(santri::class);
    }
}