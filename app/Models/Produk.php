<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produk';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_produk';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_merchant',
        'id_kategori',
        'kode_produk',
        'nama_produk',
        'deskripsi',
        'harga',
        'harga_acuan',
        'harga_beli',
        'harga_coret',
        'jumlah',
        'satuan',
        'banner_app',
        'quantity',
        'is_publish',
        'is_delete',
        'date_input',
        'date_update',
        'date_delete',
        'id_supplier',
        'is_promo',
        'is_featured',
        'is_soldout',
        'is_merchant',
        'max_purchase'
    ];
}
