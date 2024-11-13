<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table ="sales";

    protected  $fillable =['sales_date','company','product','unit','type','brand','color','form','customer','qnt','status'];
   /*  public function company_name(){

       return $this->hasMany(Company::class);
    } */
}
