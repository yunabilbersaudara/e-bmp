<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tbbm extends Model
{
    use SoftDeletes;

    protected $table = 'ms_tbbm';
    protected $primaryKey = 'tbbm_id';
    public $timestamps = true;
    protected $keyType = 'bigint';
    public $incrementing = false;

    protected $fillable = [
        'tbbm_id',
        'kota_id',
        'plant',
        'depot',
        'pbbkb',
        'ship_to',
    ];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_id', 'kota_id');
    }
}
