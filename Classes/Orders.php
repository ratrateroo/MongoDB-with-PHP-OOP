<?php 
class Orders {
    protected $collection_orders;
    public function __construct($collection_orders) {

        $this->collection_orders = $collection_orders;

    }

    public function getTotals($price, $quantity) {
        return (int)$price * (int)$quantity;
    }

    public function removeBook(&$array, $id) {

        foreach ($array as $key=>$value) {
            
            //if(in_array($id, $value)) 
            if($id == $value[0])
            {
                //if($id == $value[0])
                unset($array[$key]);
                $_SESSION = array();
                break;
            }
        }
    }
}
