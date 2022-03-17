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
        public function select(){
            // $sql = "SELECT mota FROM `sochudao` WHERE id = '2'";
            //     $reslut = mysqli_query($this->conn,$sql);

            //     if(mysqli_num_rows($reslut)>0){
            //         while($row = mysqli_fetch_assoc($reslut)){
            //             echo $row['mota'];
            //         }
            //     }else{
            //         echo"Khong co du lieu";
            //     }
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
                
                $sql = "SELECT mota FROM `sochudao` WHERE id = $tong";
                $reslut = mysqli_query($this->conn,$sql);

                if(mysqli_num_rows($reslut)>0){
                    while($row = mysqli_fetch_assoc($reslut)){
                        return $row;    
                    }
                }else{
                    echo"Khong co du lieu";
                }
            }else{
                
                $sql = "SELECT mota FROM `sochudao` WHERE id = $tong2";
                $reslut = mysqli_query($this->conn,$sql);

                if(mysqli_num_rows($reslut)>0){
                    while($row = mysqli_fetch_assoc($reslut)){
                        return $row;    
                    }
                }else{
                    echo"Khong co du lieu";
                }
            }  
        }
    }
?>