


    function mychoose(choose,last=0) {
                                   var slideattiva=parseInt($("#slideActive").val());
                                   
           
    	var choice = choose; 
    	        $('#loadbar_'+slideattiva).show();
    	        $('#quiz_'+slideattiva).fadeOut();
             $ans = parseInt($("#correct_"+slideattiva).val());
        var esito='';
            if (choice != $ans) {
                     var actual=parseInt(localStorage.getItem("errate"));
                     localStorage.setItem('errate',actual+1); 
            esito= '<div class=" alert alert-danger" role="alert">Errato</div>';
        }


        else {
            var actual=parseInt(localStorage.getItem("giuste"));
            localStorage.setItem('giuste',actual+1);                 
            esito = '<div class="alert alert-success" role="alert">Giusto</div>';
            }
                   $( "#answer_"+slideattiva ).html(esito);
                    $("#quiz_"+slideattiva).show();
                   $('#loadbar_'+slideattiva).fadeOut();
                    setTimeout(function() {swip($("#slideActive").val(),last)},1500); 
            
        
                    

         
    };
 $(document).ready( function(){
             $("label.btn-block").click(function() 
             {   
              
              var html=$(this).html();
              var index=html.indexOf('value="')+7; 
             
              var idAnswer=html.substring(index,index+1);
              var slideActive=parseInt($("#slideActive").val());
              
              if(parseInt(idAnswer)==parseInt($("#correct_"+slideActive).val())) {
                              $(this).css("background-color","green");
             
             }         
             else {
                   $(this).css("background-color","red");
             
             }
             
             
             
             
             })
    });



        function begin() {

            localStorage.setItem('errate',0);
            localStorage.setItem('giuste',0);
        $("#welcome").removeClass("active");
            $("#welcome").hide("slow");
        $("#welcome").addClass("inactive");
        $("#slide_1").addClass("active");
        $("#slide_1").removeClass("inactive");
        $("#slide_1").show("slow")
        $("#slideActive").val(1);

        }
function swip(id, isLast=0) { 
           if(isLast==0)
           {
              $(".modal-body").css("background","white");
              var next=parseInt(id)+1;
              $("#slide_"+id).hide("slow");
              $("#slide_"+id).removeClass("active");
              $("#slide_"+id).addClass("inactive");
              $("#slide_"+next).removeClass("inactive");
              $("#slide_"+next).addClass("active");
              $("#slide_"+next).show("slow");
              $("#slideActive").val(next);
            }
            else {
            
                    location.href="./sketchpad/index.html";
                    
            
            }


        }
