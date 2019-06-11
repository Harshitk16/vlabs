<?php
// $file = $_SESSION['file'];
$result=mysqli_query($conn,$qry);
if($result){
  echo "<table border=\"1\">";
  while($data=mysqli_fetch_row($result)){
    echo "<tr>";
    foreach($data as $x){
      echo "<th>".$x."</th>";
    }
    echo "</tr>";
  }
while($data=mysqli_fetch_assoc($result)){
  echo "<tr>";
foreach($data as $x){
  echo "<td>".$x."</td>";
}
echo "</tr>";
}
echo "</table>";
}
else{
  echo mysqli_error($conn);
}
// $myfile = fopen("../labs/default\d-".$file.".php","w+") or die("Unable to open file!");
// fwrite($myfile,"<?php\n");
// if (!$result)
// {
  // $php="echo \"".mysqli_error($conn)."\"";
  // fwrite($myfile,$php);
// }
// else
//  {
//   $style="background-color:green";
//   fwrite($myfile,$php);
// }
//   fwrite($myfile,"\n");
//   fclose($myfile);
?>
