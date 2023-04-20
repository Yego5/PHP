<?php

$marks = 80;

if($marks >=80 && $marks <=100)
{
    $grade = "A";
echo "your score of $marks earns you grade:$grade";
}

elseif($marks >=70 && $marks <=79)
{
    $grade = "A-";
echo "your score of $marks earns you grade:$grade";
}
elseif($marks >=60 && $marks <=69)
{
    $grade = "B";
echo "your score of $marks earns you grade:$grade";
}
elseif($marks >=50 && $marks <=59)
{
    $grade = "C";
echo "your score of $marks earns you grade:$grade";
}
elseif($marks >=40 && $marks <=49)
{
    $grade = "D";
echo "your score of $marks earns you grade:$grade";
}

else
{
    $grade = "Fail";
echo "your score of $marks earns you grade:$grade";
}

?>