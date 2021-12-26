<?php

namespace App\Models;

use CodeIgniter\Model;

class TempatModel extends Model
{
    protected $table                = 'tempat_prod';
    protected $primaryKey           = 'id_tp';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kecamatan', 'kelurahan', 'letak_prod', 'luas_prod', 'kepemilikan', 'status_lahan'];

    // Dates
    protected $useTimestamps        = true;

    public function getTempat($id_tp = false)
    {
        if ($id_tp == false) {
            return $this->db->table('tempat_prod')
                ->join('kecamatan', 'kecamatan.id_kec=tempat_prod.kecamatan')
                ->join('kelurahan', 'kelurahan.id_kel=tempat_prod.kelurahan')
                ->get()->getResultArray();
        }

        return $this->where(['id_tp' => $id_tp])
            ->join('kecamatan', 'kecamatan.id_kec=tempat_prod.kecamatan')
            ->join('kelurahan', 'kelurahan.id_kel=tempat_prod.kelurahan')
            ->first();
    }
}
