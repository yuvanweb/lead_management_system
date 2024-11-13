<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Http\Controllers\MasterController;
use App\Models\Company;
use App\Models\Product;
use App\Models\Purchase;

use Illuminate\Support\Facades\DB;


class PurchaseImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        //

           
    $arr = new MasterController;


    $ct =  $arr->companyArray();
    $cn =  array_flip($ct);    
    
    $ut =  $arr->unitArray();
    $un =  array_flip($ut);

    
    $pt =  $arr->productArray();
    $pn =  array_flip($pt);

    
    $tt =  $arr->typeArray();
    $tn =  array_flip($tt);

    
    $bt =  $arr->brandArray();
    $bn =  array_flip($bt);

    
    $ft =  $arr->formArray();
    $fn =  array_flip($ft);
  
  
    $plt =  $arr->plantArray();
    $pln =  array_flip($plt);
  
    $clt =  $arr->colorArray();
    $cltn =  array_flip($clt);

    $ctat =  $arr->customerArray();
    $ctatn =  array_flip($ctat);



    $i=0;
    foreach ($rows as $row) 
    {
        if($i>1){

           /*  echo $pn[$row[4]];
            echo $pn[$row[5]];
            echo "------"."<br>"; */

        $excel_date = (int)$row[2];
     $unix_date = ($excel_date - 25569) * 86400;
$excel_date = 25569 + ($unix_date / 86400);
$unix_date = ($excel_date - 25569) * 86400;
//echo gmdate("Y-m-d", $unix_date);



 $wordlist = Purchase::where('purchase_date',gmdate("Y-m-d", $unix_date))
 ->where('company',$cn[$row[0]])
 ->where('product',$pn[$row[3]])
->where('plant',$pln[$row[1]])
->where('unit',$un[$row[7]])
->where('type',$tn[$row[4]])
->where('brand',$bn[$row[5]])
->where('qnt',$row[6])->get();
 


$wordCount = $wordlist->count();
//$wordCount = 0;

if($wordCount == 0 ){


     $array =array(
        'company' => $cn[$row[0]],
        'plant' => $pln[$row[1]],
            'purchase_date' => gmdate("Y-m-d", $unix_date),
           
            'product' => $pn[$row[3]],
          
            'unit' => $un[$row[7]],
            'type' => $tn[$row[4]],
            'brand' => $bn[$row[5]],
          
            'qnt' => $row[6],
            'created_at' => gmdate("Y-m-d", $unix_date),
            'updated_at' => gmdate("Y-m-d", $unix_date),
        );
        DB::table('purchases')->insert($array);
        //print_r($array); 
}        
    }
    $i++;
}

    
    }
}
