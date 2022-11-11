<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionAnatomica extends Model
{
    use HasFactory;

    /**
     * The name of the table
     * 
     * @var string
     */
    protected $table = 'regiones';

    protected $primaryKey = 'region_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'descripcion',
    ];
}
