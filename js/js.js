$(document).ready(function() 
{
      
    $("#create-form").submit(function(event)
    {
        event.preventDefault();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var birthdate = $("#birthdate").val();
        var sex = $("#sex").val();
        var formData = new FormData($(this)[0]);
        
        
        if (firstname != "" && lastname != "" && birthdate != "" && sex != "" )
        {
            $.ajax({
                     url: '/classes/add.php',
                     type: 'POST',
                     data: formData,
                     async: false,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (returndata) {
                      window.location.replace("http://y92573p9.beget.tech"); //alert(returndata);    
                     }
                }); 
                return false; 
        } 
        else
        {
        $(".req").css('display', 'inline-block'); 
        }
 
       
    });      
    
    $("#reset").click(function(){
        window.location.replace("http://y92573p9.beget.tech");
    });
    
    
    $('#image').change(function()
    {
       var size = this.files[0].size;
       if(size > 200000 )
        {
        $(".img").css('display', 'block'); 
        }    
        }); 
  /*
   * 
   * ПОИСК
   */      
 $("#search-form").submit(function(event)
 {
        event.preventDefault();
       
         var formData = new FormData($(this)[0]);
         
        if (search != "" )
        {
            $.ajax({
                     url: '/classes/search.php',
                     type: 'POST',
                     data: formData,
                     async: false,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: function (returndata) {
                     $("#search-output").html(returndata); //alert(returndata);
                     }
                }); 
                return false; 
            }
 });








});




/*
 */