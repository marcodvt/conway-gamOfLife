                           
                           
 $(document).ready(function(){
                            $(".cell").click(function() { 
                             
                                if($(this).attr("class")=="cell alive") {
                                        $(this).removeClass("alive");
                                        

                                    }


                                else {
                                     
                                      $(this).addClass("alive");
                                
                                        }
                            
                            })
                                
                            
                    })
                    
                    
                    
                    
                    
                    
function getStatus(y,i) {        //return 1 if need to born and 0 if need to die
                        var ReturnValue=0;
                        var me= $("#cell_"+y+"_"+i).attr("class"); 
                        var divLeftTop=$("#cell_"+(y-1)+"_"+(i-1)).attr("class");
                        var divRightTop=$("#cell_"+(y-1)+"_"+(i+1)).attr("class");
                        var divTop=$("#cell_"+(y-1)+"_"+i).attr("class");
                        var divLeft=$("#cell_"+y+"_"+(i-1)).attr("class");
                        var divRight= $("#cell_"+y+"_"+(i+1)).attr("class");
                        var divLeftBottom=$("#cell_"+(y+1)+"_"+(i-1)).attr("class");
                        var divRightBottom=$("#cell_"+(y+1)+"_"+(i+1)).attr("class");
                        var divBottom= $("#cell_"+(y+1)+"_"+i).attr("class");
                        var occurrence=divLeftBottom+""+divRightBottom+""+divBottom+""+divTop+""+divLeftTop+""+divRightTop+""+divRight+""+divLeft;
                        occurrence=(occurrence.split("alive").length-1);
                        if(me=="cell"){      //se sono spento
                                             
                                                                
                                      if(occurrence==3) {    //dovrò accendermi se ho 3 vicini                 
                                               
                                                        ReturnValue=1;   
                                                          
                                                          
                                                       } //end if
                                      else {
                                                                     
                                                        ReturnValue=0;
                                                        
                                                     }     
                                                         
                                      }
                                    
                      if(me=="cell alive") { //se sono acceso
                                              
                                     if(occurrence<2||occurrence>3) {      //dovrò spegnermi se in sovrappopolazione o in sottopopo lazione
                      
                                                       ReturnValue=0;
                                                             
                                                                                              }
                                     else {
                                                                
                                                        ReturnValue=1;
                       
                       
                                                                    }
                                             }  
                                                                 
                      return ReturnValue ;                                                                                                                                            
                        
                         }
                    
                    
                   
function updateStatus(y,i,status) {
                    if(status==1) {
                            $("#cell_"+y+"_"+i).removeClass("alive");
                            $("#cell_"+y+"_"+i).addClass("alive");
                                  }
                    else {
                            $("#cell_"+y+"_"+i).removeClass("alive"); 
                                
                    
                    }
                    
                    
                    }
                   
                    
                    function core(hor,ver) {
                    var collectInfo=[];
                    for(y=0;y<ver;y++) { 
                        collectInfo[y]=new Array();     
                         for(i=0;i<hor;i++) {
                                                          
                               collectInfo[y][i]=getStatus(y,i);
                               
                                             }   
                                        }
                                              
                        
                    //scrive gli stati
                    for(y=0;y<ver;y++) {       
                         for(i=0;i<hor;i++) {
                                                          
                               updateStatus(y,i,collectInfo[y][i])
                                             }   
                                                        }  
                                                        
                        
                    
                     }
                    
                  