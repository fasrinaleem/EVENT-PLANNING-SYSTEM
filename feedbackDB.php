<?php

if(isset($_POST["cfeedback"]))
{
    $comt=$_POST["cfeedback"];
}
else
{
    echo $comt;
    echo '<label style="color:red">Error</label>';
}

if(isset($_POST["btnSubmit"]))
{
    $insert="INSERT INTO feedback VALUES('$comt')";

    if(!mysqli_query($con,$insert))
    {
        echo '<label style="color:red">Done</label>';
    }
    else
    {
        echo '<label style="color:red">Error</label>';
    }
}

?>s