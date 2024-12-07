<?php

namespace App\Imports;

use App\Http\Controllers\MasterController;
use App\Models\Company;
use App\Models\Sales;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class SalesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {

     
      
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
  
    $clt =  $arr->colorArray();
    $cltn =  array_flip($clt);



    $ctat =  $arr->customerArray();
    $ctatn =  array_flip($ctat);
   // echo"<pre>";

/*  echo"<pre>";
print_r($pn); 
print_r($tn); 
print_r($ctatn); 
print_r($fn); 

exit; */
 
$i=0;
        foreach ($rows as $row) 
        {
            if($i>1){

               /*  echo $pn[$row[4]];
                echo $pn[$row[5]];
                echo "------"."<br>"; */

            $excel_date = (int)$row[0];
         $unix_date = ($excel_date - 25569) * 86400;
$excel_date = 25569 + ($unix_date / 86400);
$unix_date = ($excel_date - 25569) * 86400;
 //echo gmdate("Y-m-d", $unix_date);



 $wordlist = Sales::where('sales_date',gmdate("Y-m-d", $unix_date))->where('company',$cn[$row[1]])->where('product',$pn[$row[3]])
->where('unit',$un[$row[2]])->where('type',$tn[$row[4]])->where('brand',$bn[$row[5]])->where('color',$cltn[$row[6]])->where('form',$fn[$row[7]])->where('customer',$ctatn[$row[8]])->where('qnt',$row[9])->get();
  


$wordCount = $wordlist->count();
//$wordCount = 0;

if($wordCount == 0 ){


         $array =array(
                'sales_date' => gmdate("Y-m-d", $unix_date),
                'company' => $cn[$row[1]],
                'product' => $pn[$row[3]],
                'unit' => $un[$row[2]],
                'type' => $tn[$row[4]],
                'brand' => $bn[$row[5]],
                'color' => $cltn[$row[6]],
                'form' => $fn[$row[7]],
                'customer' => $ctatn[$row[8]],
                'qnt' => $row[9],
                'created_at' => gmdate("Y-m-d", $unix_date),
                'updated_at' => gmdate("Y-m-d", $unix_date),
            );
            DB::table('sales')->insert($array);
           // print_r($array); 
}        
        }
        $i++;
    }

   // exit;
    }
}
