<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $primaryKey = 'id_service';
    public $timestamps = false;

    protected $fillable = [
        'id_kendaraan',
        'keluhan',
        'id_mekanik',
        'tgl_masuk',
        'tgl_keluar',
        'id_jns_service',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan');
    }

    public function mekanik()
    {
        return $this->belongsTo(Mekanik::class, 'id_mekanik');
    }

    public function jns_service()
    {
        return $this->belongsTo(JnsService::class, 'id_jns_service');
    }

    public function detail_services()
    {
        return $this->hasMany(DetailService::class, 'id_service');
    }
}
