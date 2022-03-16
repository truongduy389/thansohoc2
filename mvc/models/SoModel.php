<?php
    class SoModel extends DB{
        public function insert(){
            $ten = isset ($_REQUEST['user']) ? $_REQUEST['user'] : '';
            $sql = "INSERT INTO khachhang(`hoten`) VALUES ('$ten')";
            if(mysqli_query($this->conn, $sql)){
                return true;
            }else{
                return false;
            }
        }
        public function tongSo(){
            $date = isset ($_REQUEST['date']) ? $_REQUEST['date'] : '';
    
            $kq = explode('-',$date);// chuyển chuỗi thành mảng bởi dấu /
            
            $aaa = implode('',$kq);//chuyển mảng thành chuỗi không còn dấu /
            
            $b = str_split($aaa);//tách từng kí tự chuỗi -> phtu mảng

            // $c = count($b);
            $tong = 0;
            for ($i = 0 ; $i < count($b); $i++){
                $tong += $b[$i];
                if ($tong >= 10){
                    $c = str_split($tong);
                    $tong2 = 0;
                    for($j = 0 ; $j<count($c); $j++){
                        $tong2 += $c[$j];
                    }
                }
            }
            if($tong<=10){
                return $tong;
            }else{
                return $tong2;
            }
           
        }
    }
?>