<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'doctors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'status',
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i|after:start_time'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $updateRules = [
        'name' => 'required',
        'start_time' => 'required|date_format:H:i:s',
        'end_time' => 'required|date_format:H:i:s|after:start_time'
    ];
}
