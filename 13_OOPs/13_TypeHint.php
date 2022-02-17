<?php  
      
    class Test1  
    {  
        public $var= "Hello RiyaJoshi from Simform!";  
    }  
    //create function with class name argument  
    function typehint(Test1 $t1)  
    {  
        //call variable  
        echo $t1->var;  
    }  
    //call function with call name as a argument  
    typehint(new Test1());  
?>  