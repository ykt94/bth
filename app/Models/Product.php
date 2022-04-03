<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['article', 'name', 'status', 'data'];

    public function getStatusAttribute($value) {
        return $value == 'available' ? 'Доступен' : 'Не доступен';
    }

    public function getDataAttribute($value) {
        if (isset($value)) {
            $decoded = json_decode($value);
            return array('Color' => $decoded->{'Color'}, 'Size' => $decoded->{'Size'});
        }
        return array('Color' => '', 'Size' => '');
    }

    public function scopeAvailable($query)
    {
        $query->where('status', 'available');
    }
}
