		<?php
			$res = 0;
			if(count($_POST) && isset($_POST["op"])){
				switch( $_POST["op"]){

					case "soma":
						$res = $_POST["n1"] + $_POST["n2"];
						break;
					case "sub":
						$res = $_POST["n1"] - $_POST["n2"];
						break;						
					case "multi":
						$res = $_POST["n1"] * $_POST["n2"];
						break;
					case "div":
						$res = $_POST["n1"] / $_POST["n2"];
						break;
				}

			}

		?>