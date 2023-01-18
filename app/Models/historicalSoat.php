<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicalSoat extends Model
{
    use HasFactory;

        //relación uno a muchos polimorfica
        public function documents(){
            return $this->morphMany('App\Models\document', 'documentable');
        }
    
        //relación uno a muchos inversa
        public function vehicle(){
            return $this->belongsTo('App\Models\vehicle');
        }

        protected $fillable = [

            'vehicle_id',
			'secure_end_date',
			'number_accreditation_soat',
        ];    
}
