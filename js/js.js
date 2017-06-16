$(document).ready(function() {
    load_data();
    $('#action').val('Insert');
    function load_data()
    {
         var action = "Load";
         $.ajax({
             url: "action.php",
             method: "POST",
             data: {action: action},
             success: function(data)
             {
                 $("#table").html(data);
             }
         });
    }
    
    $("#add-form").on('submit', function(event)
    {
        event.preventDefault();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var middlename = $("#middlename").val();
        var birthdate = $("#birthdate").val();
        var sex = $("#sex").val();
        var extension = $('#photo').val().split('.').pop().toLowerCase();
        
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
            {
                alert('Данный тип файлов не поддерживается выберите другой файл');
                $("#photo").val('');
                return false;
            }
        }
        
        /*
         * 
        var fileSize = $('#photo').get(0).files[0].size;

        if(fileSize>0)
        {
           if(fileSize>0)
           {
                           $("#alert2").text('Макс размер фото 200 кБ' );
            return false;
           }

        }  */

        
        
        if( firstname != '' && lastname != '' && birthdate !='' && sex != ''  )
        {
             $.ajax({
                 url: "action.php",
                 method: "POST",
                 data: new FormData(this),
                 contentType: false,
                 processData: false,
                 success: function(data)
                 {
                     window.location.replace("http://y92573p9.beget.tech/");
                 }
             });          
        }
        else
        {   
            $('.alert').css('display', 'inline-block');
        }
    });
    $('#add-form input[type="reset"]').click(function(){
                     window.location.replace("http://y92573p9.beget.tech/");
    });

    $("#search-form").on('submit', function()
    {
        event.preventDefault();
        var search = $("#search").val();
       var man = $("#man").prop('checked');
       var woman = $("#woman").prop('checked');
       var from = $("#from").val();
       var to = $("#to").val();
       datasearch = [search, man, woman, from, to];
       $.ajax({
           type: 'POST',
           url: "action.php",
           data: {datasearch},
           success: function(data)
           {
                 $("#table").html(data);
           }   
       });
    });
    
    $(".delete").click(function()
    {
        id = $(this).attr('id').val();
        event.preventDefault();
        alert("dfgksd");
        if(comfirm("удаление безвозвратно"))
        {
            $.ajax({
                type: 'POST',
                url: "action.php",
                data: {id},
                success: function(data)
                {
                 alert ('выполнено');
                }  
            });
        }
    });
/*
 * $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
           
    */       
});
