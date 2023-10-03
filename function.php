<?php
 $mysql = new   mysqli("localhost","root","","practice-database-1");
 $con = $_GET['call'];
 $con();
 function insert(){
global $mysql;
 $name = $_GET['name'];
 $email = $_GET['email'];
 $phone = $_GET['phone'];
 $status = $_GET['status'];
 if(empty($name)){
    echo "<div class=' alert alert-success'><strong>Message: </strong>Name Feild Required</div>";
 }
 else if(empty($phone)){
    echo "<div class=' alert alert-success'><strong>Message: </strong>Phone Feild Required</div>";
 }
 else if(empty($email)){
    echo "<div class=' alert alert-success'><strong>Message: </strong>Email Feild Required</div>";
 }
 else if(empty($status)){
    echo "<div class=' alert alert-success'><strong>Message: </strong>Status Feild Required</div>";
 }

 else{
    $check = $mysql->query("INSERT INTO my_table(name, phone, email, status)
      VALUES (' $name',' $phone',' $email',' $status')");
      if($check){
        echo "Data Inserted";
      }
      else{
        echo "insert Failed";
      }
 }
}

 //Data Show method

 function show(){
    global $mysql;
    $show = $mysql->query("SELECT * FROM my_table");
    $shows =  $show;
     if($shows->num_rows>0){
        $sl = 1;
        while($adata = $shows->fetch_assoc()){
            if($adata['status'] == 1){
                $status = "<button  id ='activeid' class='btn btn-success activeid'>Active</button>";
            }
            else{
                $status = "<button class='btn btn-warning inactiveid'>Inctive</button>";
            }
            echo "<tr>
            <td>".$sl++."</td>
            <td>".$adata['name']."</td>
            <td>".$adata['phone']."</td>
            <td>".$adata['email']."</td>
            <td>".$status ."</td>
             </tr>";
        }
     }
     else{
        echo "<tr>
        <td colspan='6' class='text-center bg-warning text-white'>No Data Nvailable </td>
        </tr>";
     }
 }


?>