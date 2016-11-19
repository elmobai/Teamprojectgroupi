<?php

if(!mysql_connect("localhost","elmobai",""))
{
     die('connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("c9"))
{
     die('database selection problem ! --> '.mysql_error());
} 
?> 
