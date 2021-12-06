(function($){
   $(document).ready(function(){



   	$(document).on('click','#logout_id',function(e){
   		e.preventDefault();
   		$('#logout_form').submit();

   	});


   	      $('input#file3').change(function(e){

         let file_url = URL.createObjectURL(e.target.files[0]);
         $('img#uploadedimg').attr('src',file_url);
         }); 



     $(document).on('click','a#del_req_id',function(event){
      event.preventDefault();


      let attr_del_user = $(this).attr('del_appli_attr');


 swal({
  title: "Are you sure?",
  text: "Cancel The Request?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {


         $.ajax({
         url:'delete-applicants/' + attr_del_user,
         success:function(response){

            $('div#applicants').hide();
            location.reload();

   swal("Request Cancelled", {
      icon: "success",
    });


         }
      });



  } else {
    swal("Holded!");
  }
});






     });       



// $(document).on('click','a#hire_req_id',function(event){
//    event.preventDefault();


//      let hire_id_attr = $(this).attr('hire_id_attr');


//  swal({
//   title: "Are you sure?",
//   text: "Cancel The Request?",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// })
// .then((willDelete) => {
//   if (willDelete) {

//               $.ajax({
//          url:'agreement/' + hire_id_attr,
//          success:function(response){
          

          

//    swal("Request Accepted", {
//       icon: "success",
//     });


//          }
//       });



//   } else {
//     swal("Holded!");
//   }
// });











// });





   });

})(jQuery)