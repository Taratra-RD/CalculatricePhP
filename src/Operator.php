<?php
namespace app\operator;

class Operator
{
    public $operation;
    public $nbr1;
    public $nbr2;
    public $res;
    public function operator()
    {
        $nbr1 = readline();
        $operation = readline();
        $nbr2 = readline();

        if($operation == "+")
        {
            $res = $nbr1+$nbr2;
            echo "$nbr1 $operation $nbr2 = $res";

            return $res;
        }

        if($operation == "-")
        {
            $res = $nbr1-$nbr2;
            echo "$nbr1 $operation $nbr2 = $res";

            return $res;
        }

        if($operation == "*")
        {
            $res = $nbr1*$nbr2;
            echo "$nbr1 $operation $nbr2 = $res";

            return $res;
        }

        if($operation == "/")
        {
            $res = $nbr1/$nbr2;
            echo "$nbr1 $operation $nbr2 = $res \n";

            return $res;
        }
    }
}
    //echo $op->res;
    //echo "$op->nbr1 $op->operation $op->nbr2 = $op->res";

?>