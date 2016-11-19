<?php

if(!mysql_connect("localhost", "elmobai", "")) 
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("c9"))
{
     die('oops database selection problem ! --> '.mysql_error());
} 
?> 
