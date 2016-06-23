<?php
	include '../source/connect.php';
	$sql = "SELECT * FROM food ORDER BY ID DESC LIMIT 3";
	$result = mysqli_query($link, $sql);

	if(mysqli_num_rows($result)!=0){
		while($row = mysqli_fetch_assoc($result)){
			$des = $row['Description'];
			if(strlen($des)>50){
				$dex = substr($des, 0, 50);
				$dex .= "...";
			}
			echo '<li>
                            <img src="../images/'.$row['Image'].'" width = "50px" />
                            <div class="slider-caption">
                                <h2><a href="#">'.$row['Name'].'</a></h2>
                                <p>'.$des.'</p>
                            </div>
                        </li>';
		}
	}
?>