<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

 

    protected  $fillable =[
        'lead_created_by_name',
        'customer_name',
        'customer_email',
        'customer_contact_no',
        'item_enquired',
        'price_quoted',
        'qty',
        'lead_source',
        'lead_status',
        'status'];



        
}
