<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address', 'pobox', 'fax', 'email', 'about'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
