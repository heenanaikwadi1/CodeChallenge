<?php
    $connecrtion = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'heena');
    
    if(isset($_post)['insert'])
    {
        $Name = $_POST[´Name´];  
        $Email = $_POST[´Email´];        
        $Tel = $_POST[´Tel´]; 
        $Message = $_post['Message']
    }
       
$query = "INSERT INTO 'data' ('Name','Email','Tel','Message') VALUES('$Name','$Email','$Telefon','Message')";
$query_run = mysql_query($connecrtion,$query),

if($query_run)
{
    echo '<script type="text/javascript"> alert("Messege Sent")</script>';
}
else
{
    echo '<script type="text/javascript"> alert("Messege Not Sent")</script>';

}

?>