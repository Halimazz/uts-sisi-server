<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $table = 'categories'; // Menentukan nama tabel jika berbeda dengan konvensi
    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
