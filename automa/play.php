<html>
<? include("script.php");
$row=50;
$col=40; ?>
<head>
<script src="./js/jquery.last.js"      ></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/index.js" type="text/javascript"></script>   
<link rel="stylesheet" href="./css/bootstrap.min.css"> 
<link rel="stylesheet" href="./css/index.css"> 
<script>       
      <? if($_GET["pattern"]!="custom") { ?>
    var timer=window.setInterval(function() {core(<? echo $col ?>,<? echo $row; ?>);},200);
                                     <?    } ?>
    
     function startInterval() {
        var timer=setInterval(function() {core(<? echo $col ?>,<? echo $row; ?>);},200);
   
    
    }
</script>
                <title>Conway Game of life- Developed by MDV</title>     
                     
                     
                    </head>
                     <body>  
                     <div class="container">
                     
                            <div class="row ">
                                <h3>Il gioco della vita </h3>
                            </div>
                      <div class="row">
                            <div class="col">
                            <div class="card" >
                                  <div class="card-header">
                                    Scegli pattern
                                  </div>
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="./play.php?pattern=boat">Boat Pattern</a></li>
                                    <li class="list-group-item"><a href="./play.php">Beehive Pattern</a></li>
                                    <li class="list-group-item"><a href="./play.php?pattern=tub">Tub Pattern</a></li>
                                    <li class="list-group-item"><a href="./play.php?pattern=blinker">Blinker Pattern</a></li>
                                    <li class="list-group-item"><a href="./play.php?pattern=aliante">Cannoni di gosper</a></li>   
                                    <li class="list-group-item"><a href="./play.php?pattern=beacon">Beacon Pattern</a></li>   
                                    <li class="list-group-item"><a href="play.php?pattern=custom">Disegna Pattern</a></li> 
                                  </ul>
                                </div> 
                                <? if($_GET["pattern"]=="custom") { ?>
                       
                                <button class="btn btn-lg btn-success" onclick="javascript: startInterval()">START</button >
                                <button class="btn btn-lg btn-success" onclick="javascript: location.href='play.php?pattern=custom'">CLEAR</button >
                                                     <?  } ?>
                            
                            </div>
                       <div class="col">
                     
                     
<?
$accese=router($_GET["pattern"]); 
                    
                     for($y=0;$y<$col;$y++) { ?>
                     <div class="cellHor">
                     <? for($i=0;$i<$row;$i++) {?>
                      
                        <div class="cell<? echo $accese[$y][$i] ?>" id="cell_<? echo $y ?>_<? echo $i ?>"></div>
                         <? } ?>    
                      </div>
                      <? } ?>
                      </div> 
                      
                      
                      
                     
                       </div>              
                    
            </div>
                         
                     </body>
                     </html>