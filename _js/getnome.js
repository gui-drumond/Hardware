function teste(id){
         if(    document.getElementById(id).style.display == "none")
         {
                  document.getElementById(id).style.transition = "1s ease";
                  document.getElementById(id).style.display = "block";
                
         }
         else{
            document.getElementById(id).style.transition = "1s ease";
            document.getElementById(id).style.display = "none";
         }

}