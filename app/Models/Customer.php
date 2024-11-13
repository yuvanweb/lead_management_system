<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table ="customers";

    protected  $fillable =['customer_name',
    'customer_email',
    'gst_number',
    'customer_contact_no',
    'customer_contact_no_2',
    'customer_name_2',
    'customer_contact_no_3',
    'customer_name_3',
    'customer_categoty',
    'customer_unique_code',
    'converted_lead',
    'status'];

}
