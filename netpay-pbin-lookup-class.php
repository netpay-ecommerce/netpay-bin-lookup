<?php
class NetPay {
    public $bin;
    function __constructor() {
    }
    function lookup($bin) {
        $this->bin = $bin;
        $bin_list = json_decode(file_get_contents("netpay-pbin-lookup.json"), true);
        if(strlen($this->bin) !=0) {
            if(strlen($this->bin)>=6 && strlen($this->bin)<=9) {
                for($i=0;$i<count($bin_list);$i++){
                    if($bin_list[$i]["bin"]==$this->bin) {
                        return json_encode(array('result'=>'success','message'=>'El bin fue encontrado.','data'=>$bin_list[$i]));
                    }
                }
                return json_encode(array('result'=>'error','message'=>'El bin no fue encontrado.'));
            }
            else{
                return json_encode(array('result'=>'error','message'=>'La cantidad de digitos del bin debe de estar entre 6 y 9.'));
            }
        }
        else{
            return json_encode(array('result'=>'error','message'=>'El bin esta vacio.'));
        }
    }
}
?>