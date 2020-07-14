<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doctor_id',
        'appointment_status',
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
        'doctor_id' => 'required',
        'appointment_status' => 'required',
    ];

    /**
     * Get the user that owns the address.
     */
    public function doctor(){
        return $this->belongsTo('App\Models\Doctor', 'doctor_id', 'id');
    }
}
