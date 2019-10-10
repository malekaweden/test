document.getElementsByClassName('tablinks')[0].click()

function openCity(evt, cityName) {
    // Declare all variables
    
    var i, tabcontent, tablinks;
           
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
};

function myFunction1(d) {


  
  Swal.fire({
    title: 'هل انت متاكد من هذا الاجراء ',
    text:'سيتم مسح هذه البيانات بشكل نهائي',
    type: 'warning',
    showCancelButton: true,
    cancelButtonColor: '#3085d6',
    cancelButtonText: 'إلغاء ',
     confirmButtonColor: '#d33',
     confirmButtonText: 'موافق ',
  }).then((result) => {
    if (result.value) {
        
        $.ajax({
            url: "delete.php",
            data: {d},
            type:'POST',
            success:function(){
               $("#delete"+d).fadeOut(600, function(){
               
                  $("#delete"+d).parent("tr").remove();             
             
                // $("delete"+d).parent("td").parent("tr").remove(); 
                
                Swal.fire(
                  'تمت عملية المسح',
                     'تم حذف ملفك.',
                     'success'
                   ) 
                  });
                
              // $("#delete"+d).fadeOut(100, function(){
              //   $("#delete"+d).parent("td").parent("tr").remove(); 
              //   Swal.fire(
              //     'تمت عملية المسح',
              //        'تم حذف ملفك.',
              //        'نجاح الامر ',
              //      ) 
              //     });            
              
             
            } 
                
          })
          
      
    }
       
    
  })
}


