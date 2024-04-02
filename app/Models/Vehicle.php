<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model 
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'vehicles_name',
        'fipe_code',
        'price'
    ];
    
    protected $dates = ['deleted_at']; // marca a coluna como uma data 
    public $incrementing = false; 
    protected function setUUID()
    {
        $this->id = preg_replace('/\./', '', uniqid('bpm', true));
    }

    public function getAllVehicles(){
    	return self::get();
    }

    public function getVehicleById($id){
    	return self::where('id', $id)->first();
    }

    public function insert($data){
    	return self::create($data);
    }

    public function updateVehicleById($id, $data){
    	return self::where('id', $id)->update($data);
    }

    public function deleteVehicleById($id){
    	return self::where('id', $id)->delete();
    }
}
