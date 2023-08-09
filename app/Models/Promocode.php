<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promocode extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'promocode',
        'description',
        'disount_type',
        'validity',
        'start_date',
        'end_date',
        'type',
        'value',
        'limit',
        'status',
    ];

    protected function promocode(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => strtoupper($value),
        );
    }
}