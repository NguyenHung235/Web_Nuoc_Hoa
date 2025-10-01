<?php
include'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Export</title> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>CHI TIET HOA DON</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>MA HOA DON</th>
                            <th>TÊN KHÁCH HÀNG</th>
                            <th>ĐỊA CHỈ</th>
                            <th>EMAIL</th>
                            <th>SDT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sn=1;
                        $order_detail_qry = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
                        $order_detail_res = mysqli_query($con,$order_detail_qry);
                        while($order_detail_data=mysqli_fetch_assoc($order_detail_res))
                        {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $order_detail_data['code_cart']; ?> </td>
                                <td><?php echo $order_detail_data['tenkhachhang']; ?> </td>
                                <td><?php echo $order_detail_data['diachi']; ?> </td>
                                <td><?php echo $order_detail_data['email']; ?> </td>
                                <td><?php echo $order_detail_data['dienthoai']; ?> </td>
                            </tr>
                            <?php
                            $sn++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="./order_detail_data_dowload.php" class="btn btn-primary" target="_blank">Data Export</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>