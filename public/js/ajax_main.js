(function(){
   
 var form = document.getElementById('formsid');
 var url = form.getAttribute("action");
 var _token = document.getElementsByTagName('input')[0].value;
 var result = document.getElementById('search_result');

 var search1="";
 var page=1;


  $('form').submit(function(e) {
     e.preventDefault();
     var search = document.getElementsByTagName('input')[1].value;
     if(search!=""){
      search1 = search;
       load_data(page,search);
     }
  });


 function load_data(page,search){
     $.ajax({
         url: url,
         method:"POST",
         data:{
              search:search,
              page:page,
              _token:_token
         },
         success: function(data){
            result.innerHTML = data;
         }
  })
}


  /*****  Pagination Link Function End  *******/


  /*****  Pagination Link Function Start  *******/
  $(document).on( "click", ".ac a", function (e){
    e.preventDefault();
    var page = $(this).attr("data-page"); 
    load_data(page,search1);
  });
  /*****  Pagination Link Function End  *******/
 
})();