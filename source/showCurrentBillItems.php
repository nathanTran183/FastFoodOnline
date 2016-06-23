<?php
include '/connect.php';
$itemID = $_SESSION['itemID'];
$quantity = $_SESSION['quantity'];
function htmlize($ids, $quantities){
    global $link;
    $id = explode(',', $ids);
    $quantity = explode(',', $quantities);
    $html = '';
    $totalMoney = 0;
    for ($i=0; $i < count($id); $i++) { 
        $sql = "select * from food where ID = '".$id[$i]."';";
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result)!=0){
            while($row = mysqli_fetch_assoc($result)){

                $name = $row['Name'];
                $totalMoney += $quantity[$i]*$row['Price'];
                if(strlen($name)>15){
                    $name = substr($name, 0,15);
                    $name .= "...";
                }
                $html .= '<div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="../images/'.$row['Image'].'" alt="'.$row['Name'].'" />
                        </div> 
                        <div class="prof-details">
                            <h5 class="prof-name-list">'.$name.'</h5>
                            <p class="small-text">'.$row['Price'].'</p>
                        </div>
                        <div>
                            Số lượng: 
                            <input disabled type="number" class="quantity" min="1" name="txtSoLuong" value = "'.$quantity[$i].'" style="widgth: 20%; border: 1px solid #428BCA;"/> 
                            <!--<button type="button" class="btn btn-primary" style="width: 60px; height: 30px;">Xóa</button>  --> 
                        </div>
                    </div>';
            }
        }
    }
    if($ids!=''){
            $html .= '<div class="blog-list-post clearfix">
                    <div class="medium-text">Tổng tiền: '.$totalMoney.'</div>
                    <form action="../source/cancelOrder.php" method="post">
                        <button type="submit" class="btn btn-warning" style="width: 100px; height: 30px;">Hủy</button>
                    </form>
                    <form action="../source/confirmOrder.php" method="post">
                        <button type="submit" class="btn btn-primary" style="width: 100px; height: 30px;">Xác nhận</button>
                    </form>
                    </div>';
        }
        $_SESSION['totalMoney'] = $totalMoney;
    return  $html;
}

echo htmlize($itemID, $quantity);
?>