<?php
class campaign {
    public $id;
    public $name;
    public $goalprice;
    public $code;
    public $description;
    public $isdeleted;
    public $createdat;
    public $updatedat;
    function __construct($id)
    {
     $con = mysqli_connect('localhost','root','','charityfunding');
     $sql="select * from campaign where id=$id";
     $campdataset = mysqli_query($con,$sql);
     if($row =mysqli_fetch_array($campdataset))
     {
         $this->name=$row["name"];
         $this->goalprice=$row["goalprice"];
         $this->code=$row["code"];
         $this->description=$row["description"];
         $this->isdeleted=$row["isdeleted"];
         $this->createdat=$row["createdat"];
         $this->updatedat=$row["updatedat"];
     }
    }

    function dlt($id)
{
    $timestamp = date('Y-m-d H:i:s');
    $con = mysqli_connect('localhost','root','','charityfunding');   
    $mysqli_query_statement = "UPDATE campaign SET isdeleted=1,updatedat='$timestamp' WHERE id=$id";
    if ($con->query($mysqli_query_statement) === TRUE) {
        echo "Record deleted successfully.";
    }
    else{
        echo "erororororroo". mysqli_error($con);;
    }
}

}
