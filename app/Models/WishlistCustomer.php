<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistCustomer extends Model
{
    use HasFactory;
    public $table = 'wishlist_customer';
    public $primaryKey = 'id_wishlist';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_wishlist','id_users', 'id_barang','status_wishlist'];

    function insert_wishlist($id_users, $id_barang) {
        WishlistCustomer::create([
            'id_wishlist' => 0,
            'id_users' => $id_users,
            'id_barang' => $id_barang,
            'status_wishlist' => 1,
        ]);
    }

}
