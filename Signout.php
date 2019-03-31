<?php
session_start();
if(session_destroy())
{
    header( "Location:NEW HOMEPAGE 1.php");
}