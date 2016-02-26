<?php

	$languageID=$_POST["language"];
	
		switch($languageID)
			{
				case "c":
				{
					include("../alpha/compilers/c.php");
					break;
				}
				case "glib":
				{
					include("../alpha/compilers/glib.php");
					break;
				}
				case "nvcc":
				{
					include("../alpha/compilers/nvcc.php");
					break;
				}

				case "cpp":
				{
					include("../alpha/compilers/cpp.php");
					break;
				}
				case "java":
				{	
					include("../alpha/compilers/java.php");
					break;
				}
			
			}
?>
