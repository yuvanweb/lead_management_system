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

    $('#edit_company_name').val("");
    $('#edit_company_name').val(comp_name);
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



