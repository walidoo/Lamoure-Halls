<?php require_once '../includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of enter
 *
 * @author walid
 */
class enter {

    public $reserve_name;
    public $groom_name;
    public $bride_name;
    public $date;
    public $desc;
    public $hall_name;
    public $hall_id;

    public function enter_data() {

        global $conn;
        $conn->set_charset("utf8");
        $sqlone="select id  from halls where hall_name= '".$this->hall_name."'";
        $result=$conn->query($sqlone);
        $row=$result->fetch_assoc();
//        $hall_name=  $this->hall_name;
        $hall_id=$row["id"];
        $sql = "insert into reserve_hall (name_hall , reserve_name , groom_name , bride_name , reserve_date , description , hall_id) values ('$this->hall_name'  , '$this->reserve_name' , '$this->groom_name' , '$this->bride_name' , '$this->date' , '$this->desc' , '$hall_id' )";
        $sql_stmt = $conn->query($sql);
        if ($sql_stmt === TRUE) {
                $sqltwo="update halls set reserved = 'yes' where id ='".$hall_id."'";
                $result=$conn->query($sqltwo);
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    
    public function selectdb($varid) {
        
        global $conn;
        $sql="select * from data where id=".$varid;
        $sql_stmt=$conn->query($sql);
        $row=$sql_stmt->fetch_assoc();
        return $row["id"];
    
    }

}

