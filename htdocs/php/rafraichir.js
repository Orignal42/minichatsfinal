function charger(){
 
   $.ajax({
    type:"POST",
    url:'/php/automsg.php', 
    success:  function(data){
            console.log(data);
            $('.messages').html(data); 
        }
    
   });
}

$(document).ready(function(){

    setInterval(charger,5000);
});

function messagers(){    
    $.post('/php/insertmgs.php',{            
        user:$('#users').val(),           
        message:$('#message').val()  
        },function(){          
            document.querySelector('#message').value='';  
            charger();
        })
    }