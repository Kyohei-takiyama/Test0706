<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people_test';
    protected $guarded = array ('id');

    public static $rules = array (
        'name' => 'required',
        'mail' => 'required',
    );

    public function getData()
    {
        $txt = '<ID> : '.$this->id . '  <Name> : ' . $this->name . '  <Mail> : ' . $this->mail ;
        return $txt;
    }
}
