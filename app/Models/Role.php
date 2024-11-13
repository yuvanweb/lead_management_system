<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table ="roles";

    protected  $fillable =['role_name','role_management','user_management','lead_management','sales_management','purchase_management','hr_management','customer_management','master_management'];
}
