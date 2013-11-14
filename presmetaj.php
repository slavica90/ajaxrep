<?php
 if (isset($_POST["prv"])&&isset($_POST["op"])&&isset($_POST["vtor"])){
   $prvOperand = $_POST["prv"];
   $vtorOperand = $_POST["vtor"];
   $operator = $_POST["op"];
   $rezultat = "0";
   switch ($operator)
   {
     case '+': $rezultat= $prvOperand + $vtorOperand;
       break;
     case '-': $rezultat= $prvOperand - $vtorOperand;
       break;
     case '*': $rezultat= $prvOperand * $vtorOperand;
       break;
     case '/': $rezultat= $prvOperand / $vtorOperand;
       break;
     default: $rezultat="ERROR";
   }
   
   echo json_encode($rezultat);
   
 }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>