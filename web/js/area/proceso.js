$(document).ready(function() {
    if($('#proceso-presupuesto').val()!=""){
        obtdivisadolar();         
    } 
});

$('#proceso-presupuesto').number( true, 2 );

$("#btn_mostrardolarr").on('click',function(){  
    obtdivisadolar();    
});

function obtdivisadolar(){
    
    var procesoPresupuesto=$("#proceso-presupuesto").val();
    
    if(procesoPresupuesto==""){      
        return false;
    }
    
    $.ajax({
            type: "POST",
            url: '?r=proceso/obtdivisadolar',
            dataType: "json",
            data: {divisa1:1,divisa2:2,procesoPresupuesto:procesoPresupuesto
            },
            beforeSend: function (xhr) {              
            }
        }).fail(function () {
      
//                                                alert("error en el servidor");
        }).done(function (data) {      
            if (data["codigo"] == 1) {
                $("#input_mostrardolar").val(data["mensaje"]);
               
            } else {             
                
            }
        });
    
    
}




