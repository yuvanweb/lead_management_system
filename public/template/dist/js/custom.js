$('.edit_comp').click(function (e) { 
 // e.preventDefault();

var value = $(this).val();
var request = $.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
  url: "/get-company",
  type: "POST",
  data: {
        "id": value
},
 // dataType: "application/json",
  success: function(data){
    var returnedData = JSON.parse(data);
   // console.log
    var comp_name = returnedData[0].company_name;
    var company_code = returnedData[0].company_code;

    $('#edit_company_name').val("");
    $('#edit_company_name').val(comp_name);
    $('#edit_company_code').val("");
    $('#edit_company_code').val(company_code);
    $('#ed_id').val("");
    $('#ed_id').val(value);
    $('#edit_comp').modal('show');

 }
});
});


$('.delete_comp').click(function (e) { 
  //e.preventDefault();
  if (confirm("Are you sure you want to delete?")) {
    // User clicked OK
    return true;

} else {
    // User clicked Cancel
   return false;
}

});



$('.edit_plant').click(function (e) { 
 // e.preventDefault();

var value = $(this).val();
var request = $.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
  url: "/get-plant",
  type: "POST",
  data: {
        "id": value
},
 // dataType: "application/json",
  success: function(data){
    var returnedData = JSON.parse(data);
   // console.log
    var comp_name = returnedData[0].plant_name;

    $('#edit_plant_name').val("");
    $('#edit_plant_name').val(comp_name);
    $('#ed_id').val("");
    $('#ed_id').val(value);
    $('#edit_plant').modal('show');

 }
});
});


$('.delete_plant').click(function (e) { 
  //e.preventDefault();
  if (confirm("Are you sure you want to delete?")) {
    // User clicked OK
    return true;

} else {
    // User clicked Cancel
   return false;
}

});
$('.edit_color').click(function (e) { 
 // e.preventDefault();

var value = $(this).val();
var request = $.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
  url: "/get-colors",
  type: "POST",
  data: {
        "id": value
},

  success: function(data){
    var returnedData = JSON.parse(data);

    var comp_name = returnedData[0].color_name;

    $('#edit_color_name').val("");
    $('#edit_color_name').val(comp_name);
    $('#ed_id').val("");
    $('#ed_id').val(value);
    $('#edit_plant').modal('show');

 }
});
});


$('.delete_color').click(function (e) { 
  if (confirm("Are you sure you want to delete?")) {
    return true;
} else {
    return false;
}

});


$('.edit_brand').click(function (e) { 
 // e.preventDefault();

var value = $(this).val();
var request = $.ajax({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
  url: "/get-brand",
  type: "POST",
  data: {
        "id": value
},

  success: function(data){
    var returnedData = JSON.parse(data);

    var comp_name = returnedData[0].brand_name;

    $('#edit_brand_name').val("");
    $('#edit_brand_name').val(comp_name);
    $('#ed_id').val("");
    $('#ed_id').val(value);
    $('#edit_plant').modal('show');

 }
});
});


$('.delete_brand').click(function (e) { 
  if (confirm("Are you sure you want to delete?")) {
    return true;
} else {
    return false;
}

});



$('.edit_form').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-form",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].form_name;
 
     $('#edit_form_name').val("");
     $('#edit_form_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_plant').modal('show');
 
  }
 });
 });
 
 
 $('.delete_form').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });

$('.edit_type').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-type",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].type_name;
 
     $('#edit_type_name').val("");
     $('#edit_type_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_type').modal('show');
 
  }
 });
 });
 
 
 $('.delete_type').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });
$('.edit_product').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-product",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].product_name;
 
     $('#edit_product_name').val("");
     $('#edit_product_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_plant').modal('show');
 
  }
 });
 });
 
 
 $('.delete_product').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });

$('.edit_unit').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-unit",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].unit_name;
 
     $('#edit_unit_name').val("");
     $('#edit_unit_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_plant').modal('show');
 
  }
 });
 });
 
 
 $('.delete_unit').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });

$('.edit_lead_source').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-leadsource",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].l_source_name;
 
     $('#edit_lead_source_name').val("");
     $('#edit_lead_source_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_plant').modal('show');
 
  }
 });
 });
 
 
 $('.delete_lead_source').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });
 
 $('.edit_role').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-role",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var comp_name = returnedData[0].role_name;
 
     $('#edit_role').val("");
     $('#edit_role').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_plant').modal('show');
 
  }
 });
 });

 
 $('.delete_role').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });




 $('.all_mod').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-role",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
   
    var returnedData = JSON.parse(data);
 
     var role_management = returnedData[0].role_management;
     var user_management = returnedData[0].user_management;
     var lead_management = returnedData[0].lead_management;
     var sales_management = returnedData[0].sales_management;
     var purchase_management = returnedData[0].purchase_management;
     var hr_management = returnedData[0].hr_management;
     var customer_management = returnedData[0].customer_management;
     var master_management = returnedData[0].master_management;

     $('#role_id').val(value);
     $('#role_management').prop("checked",role_management?true:false);
     $('#user_management').prop("checked",user_management?true:false);
     $('#lead_management').prop("checked",lead_management?true:false);
     $('#sales_management').prop("checked",sales_management?true:false);
     $('#purchase_management').prop("checked",purchase_management?true:false);
     $('#hr_management').prop("checked",hr_management?true:false);
     $('#customer_management').prop("checked",customer_management?true:false);
     $('#master_management').prop("checked",master_management?true:false);

 
 
  }
 });
 });
  $('.edit_user').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-user",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var name = returnedData[0].name;
     var email = returnedData[0].email;
     var mobile = returnedData[0].mobile;
     var role = returnedData[0].role;
     var company_id = returnedData[0].company_id;
     var location_id = returnedData[0].location_id;
     var employee_id = returnedData[0].employee_id;
     var id = returnedData[0].id;
 
     $('#name').val("");
     $('#name').val(name);
     $('#email').val("");
     $('#email').val(email);
     $('#mobile').val("");
     $('#mobile').val(mobile); 
    
     $('#role').val("");
     $('#role').val(role); 


     $('#company').val("");
     $('#company').val(company_id); 


     $('#location').val("");
     $('#location').val(location_id);

     $('#employee').val("");
     $('#employee').val(employee_id); 
     $('#ed_id').val(""); 
     $('#ed_id').val(id); 





     $('#edit_plant').modal('show');
 
  }
 });
 });
 
 
 $('.delete_user').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });

 $('.decimal').keyup(function(){
  var val = $(this).val();
  if(isNaN(val)){
       val = val.replace(/[^0-9\.]/g,'');
       if(val.split('.').length>2) 
           val =val.replace(/\.+$/,"");
  }
  $(this).val(val); 
});



$('.edit_lead').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-lead",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var date_enquires = returnedData[0].date_enquires;
     var lead_created_by_name = returnedData[0].lead_created_by_name;
     var customer_name = returnedData[0].customer_name;
     var customer_email = returnedData[0].customer_email;
     var customer_contact_no = returnedData[0].customer_contact_no;
     var item_enquired = returnedData[0].item_enquired;
     var price_quoted = returnedData[0].price_quoted;
     var qty = returnedData[0].qty;
     var lead_source = returnedData[0].lead_source;
     var lead_status = returnedData[0].lead_status;
     var ereason = returnedData[0].reason;
     var id = returnedData[0].id;

     if(lead_status !=3){
      $('#ereason').attr("readonly", true);
     }else{
      $('#ereason').attr("readonly", false);

     }
 
     $('#edate_enquires').val(date_enquires);
     $('#elead_created_by_name').val(lead_created_by_name);
     $('#ecustomer_name').val(customer_name);
     $('#ecustomer_email').val(customer_email);
     $('#ecustomer_contact_no').val(customer_contact_no);
     $('#eitem_enquired').val(item_enquired);
     $('#eprice_quoted').val(price_quoted);
     $('#eqty').val(qty);
     $('#elead_source').val(lead_source);
     $('#elead_status').val(lead_status);
     $('#ereason').text(ereason);
     $('#c_id').val(id);
    
     $('#edit_plant').modal('show');
 
  }
 });
 });
 $('#elead_status').change(function (e) { 

var val = $(this).val();
//alert(val);
if(val == 3){
 // $('#edit_res').css("display","block");

  $('#ereason').attr("required", true);
  $('#ereason').attr("readonly", false);

}else{

  //$('#edit_res').css("display","none");
  $('#ereason').val("");
  $('#ereason').attr("required", false);
  $('#ereason').attr("readonly", true);
}


 })
 $('.delete_lead').click(function (e) { 
  if (confirm("Are you sure you want to delete?")) {
    return true;
} else {
    return false;
}

});

$('.edit_category').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-category",
   type: "POST",
   data: {
         "id": value
 },
  // dataType: "application/json",
   success: function(data){
     var returnedData = JSON.parse(data);
    // console.log
     var comp_name = returnedData[0].categorie_name;
 
     $('#categorie_name').val("");
     $('#categorie_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_comp').modal('show');
 
  }
 });
 });
 
 
 $('.delete_category').click(function (e) { 
   //e.preventDefault();
   if (confirm("Are you sure you want to delete?")) {
     // User clicked OK
     return true;
 
 } else {
     // User clicked Cancel
    return false;
 }
 
 });
 
 
 $('.edit_location').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-location",
   type: "POST",
   data: {
         "id": value
 },
  // dataType: "application/json",
   success: function(data){
     var returnedData = JSON.parse(data);
    // console.log
     var comp_name = returnedData[0].location_name;
 
     $('#location_name').val("");
     $('#location_name').val(comp_name);
     $('#ed_id').val("");
     $('#ed_id').val(value);
     $('#edit_comp').modal('show');
 
  }
 });
 });
 
 
 $('.delete_location').click(function (e) { 
   //e.preventDefault();
   if (confirm("Are you sure you want to delete?")) {
     // User clicked OK
     return true;
 
 } else {
     // User clicked Cancel
    return false;
 }
 
 });
 $('.gst').keypress(function (e) { 
 // alert();
var thiss = $(this);
  var value = thiss.val();

  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
    url: "/get-gst",
    type: "GET",
    data: {
          "id": value
  },
  
    success: function(data){

      if(data==0){
        thiss.css("box-shadow", "0 0 3px green");
      }else{
        thiss.css("box-shadow", "0 0 3px red")
      }
     
   }
  });

 });
 $('.edit_customer').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-customer",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var customer_name = returnedData[0].customer_name;
     var customer_email = returnedData[0].customer_email;
     var gst_number = returnedData[0].gst_number;
     var customer_contact_no = returnedData[0].customer_contact_no;
     var customer_contact_no_2 = returnedData[0].customer_contact_no_2;
     var customer_name_2 = returnedData[0].customer_name_2;
     var customer_contact_no_3 = returnedData[0].customer_contact_no_3;
     var customer_name_3 = returnedData[0].customer_name_3;
     var customer_categoty = returnedData[0].customer_categoty;
     var customer_unique_code = returnedData[0].customer_unique_code;
   
     var id = returnedData[0].id;
  
  
     $('#customer_name').val("");
     $('#customer_name').val(customer_name);
     $('#customer_email').val("");
     $('#customer_email').val(customer_email); 
     $('#gst_number').val("");
     $('#gst_number').val(gst_number);
     $('#customer_contact_no').val("");
     $('#customer_contact_no').val(customer_contact_no); 
    
     $('#customer_contact_no_2').val("");
     $('#customer_contact_no_2').val(customer_contact_no_2); 


     $('#customer_name_2').val("");
     $('#customer_name_2').val(customer_name_2); 


     $('#customer_contact_no_3').val("");
     $('#customer_contact_no_3').val(customer_contact_no_3);

    
     $('#customer_name_3').val("");
     $('#customer_name_3').val(customer_name_3);

    
     $('#customer_categoty').val("");
     $('#customer_categoty').val(customer_categoty);

    
     $('#customer_unique_code').val("");
     $('#customer_unique_code').val(customer_unique_code);

     $('#ed_id').val(""); 
     $('#ed_id').val(id); 
  }
 });
 });
 
 
 $('.delete_customer').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 }); 
 $('.edit_sales').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-sales",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var customer_name = returnedData[0].customer_name;
     var customer_email = returnedData[0].customer_email;
     var customer_contact_no = returnedData[0].customer_contact_no;
     var customer_contact_no_2 = returnedData[0].customer_contact_no_2;
     var customer_name_2 = returnedData[0].customer_name_2;
     var customer_contact_no_3 = returnedData[0].customer_contact_no_3;
     var customer_name_3 = returnedData[0].customer_name_3;
     var customer_categoty = returnedData[0].customer_categoty;
     var customer_unique_code = returnedData[0].customer_unique_code;
   
     var id = returnedData[0].id;
  
  
     $('#customer_name').val("");
     $('#customer_name').val(customer_name);
     $('#customer_email').val("");
     $('#customer_email').val(customer_email);
     $('#customer_contact_no').val("");
     $('#customer_contact_no').val(customer_contact_no); 
    
     $('#customer_contact_no_2').val("");
     $('#customer_contact_no_2').val(customer_contact_no_2); 


     $('#customer_name_2').val("");
     $('#customer_name_2').val(customer_name_2); 


     $('#customer_contact_no_3').val("");
     $('#customer_contact_no_3').val(customer_contact_no_3);

    
     $('#customer_name_3').val("");
     $('#customer_name_3').val(customer_name_3);

    
     $('#customer_categoty').val("");
     $('#customer_categoty').val(customer_categoty);

    
     $('#customer_unique_code').val("");
     $('#customer_unique_code').val(customer_unique_code);

     $('#ed_id').val(""); 
     $('#ed_id').val(id); 
  }
 });
 });
 
 
 $('.delete_sales').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 });  
  

 $('.edit_purchase').click(function (e) { 
  // e.preventDefault();
 
 var value = $(this).val();
 var request = $.ajax({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
   url: "/get-purchase",
   type: "POST",
   data: {
         "id": value
 },
 
   success: function(data){
     var returnedData = JSON.parse(data);
 
     var purchase_date = returnedData[0].purchase_date;
     var company = returnedData[0].company;
     var plant = returnedData[0].plant;
     var unit = returnedData[0].unit;
     var product = returnedData[0].product;
     var type = returnedData[0].type;
     var brand = returnedData[0].brand;
     var qnt = returnedData[0].qnt;
    // var customer_unique_code = returnedData[0].customer_unique_code;
   
     var id = returnedData[0].id;
  
  
     $('#purchase_date').val("");
     $('#purchase_date').val(purchase_date);
     $('#company').val("");
     $('#company').val(company);
     $('#plant').val("");
     $('#plant').val(plant); 
    
     $('#unit').val("");
     $('#unit').val(unit); 


     $('#product').val("");
     $('#product').val(product); 


     $('#type').val("");
     $('#type').val(type);

    
     $('#brand').val("");
     $('#brand').val(brand);

    
     $('#qnt').val("");
     $('#qnt').val(qnt);

    


     $('#ed_id').val(""); 
     $('#ed_id').val(id); 
  }
 });
 });
 
 
 $('.delete_purchase').click(function (e) { 
   if (confirm("Are you sure you want to delete?")) {
     return true;
 } else {
     return false;
 }
 
 }); 
 $('.delete_holiday').click(function (e) { 
  if (confirm("Are you sure you want to delete?")) {
    return true;
} else {
    return false;
}

}); 

$(".mark_submit").click(function(){
  var value = $('#date_of_holiday').val();
  if(value!="" && value!=null){
  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
    url: "/get-attendance",
    type: "POST",
    data: {
          "date": value
  },   success: function(data){
$("#atten").html(data);

  }
});
}else{

alert("Please select the date");
}
});

$(".add").keyup(function(){
var sum = 0;
var tot = 0;
$('.add').each(function(){

    sum += parseFloat(this.value);
    console.log("Type of number is:" ,typeof sum);   
   
});
var sub = 0;
$('.sub').each(function(){

  sub += parseFloat(this.value);
  
});


var sub_tot = $(this).parents('fieldset').find('.sub_tot').val(sum);
var sub_min = $(this).parents('fieldset').find('.sub_min').val(sub);
var tot = sum - sub;
/* var final = total(sub_tot,sub_min)
alert(final) */
$(this).parents('fieldset').find('.total').val(tot);


})


$(".sub").keyup(function(){
  var sum = 0;
  var tot = 0;
  $('.add').each(function(){
  
      sum += parseFloat(this.value);
      console.log("Type of number is:" ,typeof sum);   
     
  });
  var sub = 0;
  $('.sub').each(function(){
  
    sub += parseFloat(this.value);
    
  });


var sub_tot = $(this).parents('fieldset').find('.sub_tot').val(sum);
var sub_min = $(this).parents('fieldset').find('.sub_min').val(sub);
var tot = sum - sub;
/* var final = total(sub_tot,sub_min)
alert(final) */
$(this).parents('fieldset').find('.total').val(tot);
})


function total(add,minus){

  return parseFloat(add) - parseFloat(minus);


}

$('#first-datepicker').datepicker({
  changeMonth: true, 
    changeYear: true, 
    dateFormat: "dd/mm/yy",
    yearRange: "-90:+00"
});

$("#gen_pay_slip").click(function(){
  var value = $('#month_year').val();
if(value ==  "" ){

  alert("Please Select the date");
}else{
  alert(value);
  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
   dataType : 'html',
    url: "/generate-payslip",
    type: "POST",
    data: {
          "date": value
  },   success: function(data){


    $('#att').html(data);
console.log(data);
  }
});
}
});

$("#payslippdf").click(function(){
  var value = $('#date').val();

  if(value ==  "" ){
    alert("Please Select the date");
  }else{
  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
   dataType : 'html',
    url: "/generate-payslip-pdf",
    type: "POST",
    data: {
          "date": value
  },   success: function(data){


    $('#att').html(data);
console.log(data);
  }
});
}
});
$("#lead_dash").click(function(){
  var value = $('#lead_d').val();

  if(value ==  "" ){
    alert("Please Select the date");
  }else{

$(this).prop("disabled", true);

  var request = $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
   dataType : 'html',
    url: "/lead-dashboard-data",
    type: "POST",
    data: {
          "date": value
  },   success: function(data){

    var returnedData = JSON.parse(data);

    $('#cmt').text(returnedData.month_name+" Month Lead");
    $('#clc').text(returnedData.c_month);
    $('#elc').text(returnedData.exe);
    $('#nlc').text(returnedData.new);
    $('#lead_dash').removeAttr("disabled");
   
  }
});
}
});
