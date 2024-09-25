<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table ="companies";

    protected  $fillable =['c_id','company_name','status'];


   /*  public function getCompany_nameAttribute(){

        return ucfirst($this->attributes['company_name']);
    } */
    
    /* public function setcompany_nameAttribute($value){
       $this->attributes['company_name'] = ucfirst($value);
    } */
}
