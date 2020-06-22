$("#category").on ("change", function()
{
   var idCategory = $("#category").val();
   
   $.ajax({
        url:'pega_category',
        type:'POST',
        data:{id:idCategory},
        beforeSend: function(){
            $("#memory").css({'display':'block'});
        }

   })
});