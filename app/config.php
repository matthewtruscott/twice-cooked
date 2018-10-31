<?php

 $devMode = true;

 function cacheBuster(){
   global $devMode;
   if ($devMode) {
     echo "?v=".time();
   }
 }
