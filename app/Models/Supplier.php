<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers'; // Specify the table name if different from convention

    public function creator()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
