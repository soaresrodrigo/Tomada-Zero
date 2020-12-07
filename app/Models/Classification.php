<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Classification extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description' ];

    public function rules () {
        return [
            'name' => 'sometimes|required',
            'description' => 'sometimes'
        ];
    }

    public function movie () {
        return $this->hasMany(Movie::class, 'classification_id', 'id');
    }
}
