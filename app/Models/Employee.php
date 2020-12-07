<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actor;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'office', 'birthday', 'height' ];

    public function rules () {
        return [
            'name' => 'sometimes|required',
            'office' => 'sometimes|required',
            'birthday' => 'sometimes|date',
            'height' => 'sometimes|numeric'
        ];
    }

    public function actor () {
        return $this->hasOne(Actor::class, 'employee_id', 'id');
    }
}
