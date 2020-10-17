<?php


/*function showdata(){

  global $con;
  $query = "SELECT * FROM `userdata`";
  $run = mysqli_query($con,$query);
  if($run==TRUE){
    ?>
    <table style="background-color: #f2f2f2;margin-top:50px;" width="90%" align="center" >
      <tr>
        <th style="padding : 8px">NAME</th> <th style="padding : 8px">CONTACT</th> <th style="padding : 8px">EMAIL I.D</th> <th style="padding : 8px">MESSAGE</th>
      </tr>
    <?php
    while( $data = mysqli_fetch_assoc($run)){
?>
<tr> 
  <td style="padding : 8px;border-bottom: 1px solid #ddd;"><?php echo $data['name']?></td> 
   <td style="padding : 8px;border-bottom: 1px solid #ddd;"><?php echo $data['contact']?></td> 
    <td style="padding : 8px;border-bottom: 1px solid #ddd;"><?php echo $data['email']?></td> 
     <td style="padding : 8px;border-bottom: 1px solid #ddd;"><?php echo $data['message']?></td>
</tr>

<?php
    }
  ?> </table> <?php
  }
  else{
    echo "error occur";
  }
}
*/

function fetch_data()  
{  
     $output = '';  
     $con = mysqli_connect("sql202.epizy.com","epiz_24538736","tsapics123","epiz_24538736_insertdb");    
     $sql =   "SELECT * FROM `userdata`";
     $result = mysqli_query($con, $sql);  
     while($row = mysqli_fetch_assoc($result))  
     {       
     $output .= '<tr>  
                        <td style="font-weight: bolder;">'.$row["id"].'</td>
                         <td style="font-weight: bolder;">'.$row["name"].'</td>  
                         <td  style="font-weight: bolder;">'.$row["contact"].'</td>  
                         <td  style="font-weight: bolder;">'.$row["email"].'</td>  
                         <td  style="font-weight: bolder;">'.$row["message"].'</td>  
                    </tr>  
                         ';  
     }  
     return $output;  
}  


if(isset($_POST["create_pdf"])){
  require_once("tcpdf/tcpdf.php");
  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT , true ,'UTF-8', false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  $obj_pdf->SetTitle("CLIENT'S INFO");
  $obj_pdf->setHeaderData('','', PDF_HEADER_TITLE , PDF_HEADER_STRING); 
  $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
  $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
  $obj_pdf->SetDefaultMonospacedFont('helvetica');
  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5' ,PDF_MARGIN_RIGHT);
  $obj_pdf->setPrintHeader(false);
  $obj_pdf->setPrintFooter(false);
  $obj_pdf->SetAutoPageBreak(TRUE , 10);
  $obj_pdf->SetFont('helvetica', '' , 12);
  $obj_pdf->AddPage();  
  $content = '';  
  $content .= '  
  <h4 align="center">CLIENTS INFO</h4><br /> 
  <table width="100%"   cellpadding="20" >  
       <tr> 
             <th style="width="10%";" >ID</th>  
            <th style="width="30%";" >NAME</th>  
            <th style="width="30%";">CONTACT</th>  
            <th style="width=50%;">EMAIL</th>  
            <th style="width=50%;">MESSAGE</th>  
       </tr>  
  ';  
  $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);   
 
  $obj_pdf->Output("user_data.pdf" ,"I");
 }

?>

<!DOCTYPE html>
<html>
<title> TSA PHOTOGRAPHY </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php include 'links.php' ?>
    <link  rel="stylesheet" type="text/css" href="data.css">

</head>    
<body>
<nav class="navbar navbar-expand-lg ">
<div id="demo" class="collapse navbar-collapse">
<ul class="navbar-nav ">
    <a class="navbar-brand" href="#"><img src="Logo.jpeg" alt="logo"  class="logo" ></a>
   
      <li class="nav-item">
        <a class="btn-danger" href="logout.php" >LOGOUT</a>
      </li>
     <form method="post">
       <input type="submit" name="create_pdf" class="btn-info" value="DOWNLOAD DATA"> 
     </form>

</ul>      
</div>

</nav>
<h1> CLIENT'S INFO </h1>

<table class="table table-hover table-dark">  
                          <tr>  
                               <th width="10%">ID</th>  
                               <th width="25%">NAME</th>  
                               <th width="25%">CONTACT</th>  
                               <th width="30%">EMAIL</th>  
                               <th width="50%">MESSAGE</th>  
                          </tr>  
                          <?php  
                     echo fetch_data();  
                     ?> 
                     </table> 


</body>
</html>


