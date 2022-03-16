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
            //$date = isset ($_REQUEST['date']) ? $_REQUEST['date'] : '';
            if(!empty($_REQUEST['date'])){
                $date=$_REQUEST['date'];
                $date=strtotime($date);
                $date= date('d/m/Y', $date);
            }

            $this->view("result",[
                'date' => $date,
                'name' => $name,
                
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