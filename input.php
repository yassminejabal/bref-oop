<?php
class input {
    public function input($label){
        echo $label ." : ";
       return trim(fgets(STDIN)) ;
    }
}