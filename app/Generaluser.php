<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generaluser extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'gender' => 'required',
        'birthday' => 'required',
        'area_id' => 'required',
        'station_id' => 'required',
        'people_ind' => 'required',

    );
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    public function board()
    {
        return $this->hasMany('App\Board');
    }

    public function subject()
    {
       return $this->hasOne('App\Subject');
    }

    public function subjects()
    {
       return $this->hasMany ('App\Subject');
    }
 
    use HasFactory;
}
