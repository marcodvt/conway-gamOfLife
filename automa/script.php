<? error_reporting(0);

function router($pattern) {       //restituisce un pattern iniziale
                     $accese=array();
                     
                     switch($pattern) {
                     
                     case 'boat':
                        $accese[20][20]=" alive";
                        $accese[19][21]=" alive";
                        $accese[20][22]=" alive";
                        $accese[21][22]=" alive";  
                        $accese[21][21]=" alive";
                     
                     
                     break;
                      case '':    //default case is behive
                        $accese[15][15]=" alive";
                        $accese[15][16]=" alive";
                        $accese[16][14]=" alive";
                        $accese[17][15]=" alive";  
                        $accese[17][16]=" alive";
                          $accese[16][17]=" alive";
                     
                     
                     break;
                     
                       case 'beacon':    
                        $accese[5][5]=" alive";
                        $accese[5][6]=" alive";
                        $accese[6][5]=" alive";
                        $accese[7][8]=" alive";  
                        $accese[8][8]=" alive";
                          $accese[8][7]=" alive";
                     
                     
                     break;
                     case 'blinker':    
                        $accese[2][2]=" alive";
                        $accese[2][3]=" alive";
                        $accese[2][4]=" alive";
                         
                     
                     break;
                     
                     case 'aliante':
                        $accese[5][1]=" alive";
                        $accese[5][2]=" alive";
                        $accese[6][1]=" alive";  
                        $accese[6][2]=" alive";
                        $accese[5][11]=" alive";  
                        $accese[6][11]=" alive";
                          $accese[7][11]=" alive";
                          $accese[4][12]=" alive";
                          $accese[3][13]=" alive";
                          $accese[3][14]=" alive";
                          $accese[4][16]=" alive"; 
                          $accese[5][17]=" alive"; 
                          $accese[6][17]=" alive";
                          $accese[7][17]=" alive"; 
                          $accese[6][18]=" alive";
                          $accese[7][17]=" alive";
                          $accese[8][16]=" alive";
                          $accese[9][14]=" alive";
                          $accese[9][13]=" alive";
                          $accese[8][12]=" alive";   
                          $accese[6][15]=" alive";
                          $accese[5][21]=" alive"; 
                          $accese[4][21]=" alive";
                          $accese[3][21]=" alive";
                          $accese[5][22]=" alive"; 
                          $accese[2][23]=" alive";
                          $accese[3][22]=" alive";
                          $accese[4][22]=" alive";
                          $accese[1][25]=" alive";
                          $accese[2][25]=" alive";
                          $accese[6][25]=" alive";
                          $accese[7][25]=" alive";
                          $accese[6][23]=" alive";
                          $accese[3][35]=" alive";
                          $accese[3][36]=" alive";
                          $accese[4][35]=" alive";
                          $accese[4][36]=" alive";
                          
                          
                          
                     break;
                     case 'tub':    //default case is behive
                        $accese[5][15]=" alive";
                        $accese[6][14]=" alive";
                        $accese[6][16]=" alive";
                        $accese[7][15]=" alive"; 
                        
                     
                     
                     break;
                }
                return $accese;
                     }