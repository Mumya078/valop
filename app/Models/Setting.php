<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public static function getSetting()
    {
        $data = Setting::first();
        if($data===null)
        {
            $data = new Setting();
            $data->save();
        }
        return $data;
    }
}
