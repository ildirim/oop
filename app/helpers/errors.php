<?php
ob_start('fatal_error_handler');
function fatal_error_handler($buffer){
    $error=error_get_last();
    if($error['type'] == 1){
        // type, message, file, line
        $newBuffer='<html><header><title>Fatal Error </title></header>
                    <style>                 
                    .error_content{                     
                        background: ghostwhite;
                        vertical-align: middle;
                        margin:0 auto;
                        padding:10px;
                        width:50%;                              
                     } 
                     .error_content label{color: red;font-family: Georgia;font-size: 16pt;font-style: italic;}
                     .error_content ul li{ background: none repeat scroll 0 0 FloralWhite;                   
                                border: 1px solid AliceBlue;
                                display: block;
                                font-family: monospace;
                                padding: 2%;
                                text-align: left;
                      }
                    </style>
                    <body style="text-align: center;">  
                      <div class="error_content">
                          <label >Fatal Error </label>
                          <ul>
                            <li><b>Line</b> '.$error['line'].'</li>
                            <li><b>Message</b> '.$error['message'].'</li>
                            <li><b>File</b> '.$error['file'].'</li>                             
                          </ul>

                          <a href="javascript:history.back()"> Back </a>                          
                      </div>
                    </body></html>';

        return $newBuffer;

    }
    return $buffer;
}