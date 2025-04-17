<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsService extends Model
{
    use HasFactory;

    protected $table = 'jns_service'; 
    protected $primaryKey = 'id_jns_service'; // Primary key yang sesuai
    public $timestamps = false; // Karena di database ada created_at & updated_at

    protected $fillable = [
        'nm_jns_service',
        'keterangan'
    ];

    public function service()
    {
        return $this->hasMany(Service::class, 'id_jns_service');
    }
}
