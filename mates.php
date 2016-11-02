<?php

    

    function calcular ( $res)
    {
        
    if (isset ($_GET['op']))
{
  echo  $op=$_GET['op'];
    $res=0;
    $num=0;
    if(strstr($op,'+'))
    {
        //suna
        $operacion=explode('+',$op);
        for($i=0;$i<count($operacion);$i++)
            {

             $num=intval($operacion[$i]);

            $res=$num+$res;
            }
    }
    else{
        // resta
        $operacion=explode('-',$op);
            $res=intval($operacion[0]);
          for($i=1;$i<count($operacion);$i++)
            {

             $num=intval($operacion[$i]);
            $res=$res-$num;
            }
    }

    return $res;
}
    }


    ?>