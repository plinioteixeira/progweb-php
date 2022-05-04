<?php //recursos.php
 const ESCOLA = "senac";
 $curso = "Programador web";
 $tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

 function verificaIdade(int $valor):string {
     if ($valor >= 18) {
         return "maior";
     } else {
         return "menor";
     }
     
 }