<!DOCTYPE html>
<html>
<body>

<h1>PHP RUNNER...</h1>

<?php 

function finalGrade($exam, $projects) {
// write your answer here
echo "exam: $exam , projects : $projects <br><br>";
  if($exam > 90 || $projects > 10){ 
    echo 100;
    return 100;
  }else if($exam > 75 || $projects > 4){
    echo 90;
    return 90;
  } else if($exam > 50 || $projects > 1){
    echo 75;
    return 75;
  } else{
    echo 0;
    return 0;
  };
}
finalGrade(0,1);


?>

<script>


</script>
</body>
</html>