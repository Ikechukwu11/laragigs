<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query,array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags','like', '%'.request('tag').'%');
        }

        if($filters['s'] ?? false) {
            $query->where('title','like', '%'.request('s').'%')
                ->orWhere('description','like', '%'.request('s').'%')
                ->orWhere('tags','like', '%'.request('s').'%');
        }
    }
}
