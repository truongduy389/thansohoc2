<?php
    class Home extends Controller{

         function SayHi(){
            $this->view('index'); 
        }

        function showSo(){

            $so = $this->model("SoModel");
            $tong = $so->tongSo();
            
            $ten = $this->model("SoModel");
            $name= isset ($_REQUEST['user']) ? $_REQUEST['user'] : '';
            
            $select=$this->model("SoModel");
            $query=implode('',$select->select());
            //var_dump($query);

            //$date = isset ($_REQUEST['date']) ? $_REQUEST['date'] : '';
            if(!empty($_REQUEST['date'])){
                $date=$_REQUEST['date'];
                $date=strtotime($date);
                $date= date('d/m/Y', $date);
            }

            $this->view("result",[
                'date' => $date,
                'name' => $name,
                'query' => $query,
                'so' => $tong,
                'ten' => $ten->insert()
            ]);
        }
        
        //  function Show($id){
        //      //model
        //      $id=$this->model("SoModel");
        //      if($tong){
        //          $id=$tong;
        //      }else{
        //          $id=$tong2;
        //      }
        //      $result= $id->select($id);
        //      //view
        //     $this->view("result",[
        //         'id' => $result
        //     ]);
        // }
    }
?>