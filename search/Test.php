<?php
include 'connec.php';
// $str;

if (isset($_POST['brand'])) {
    $brand = $_POST['brand'];
} else {
    $brand = null;
}

if (isset($_POST['tyre_1'])) {
    $tyre_1 = $_POST['tyre_1'];
} else {
    $tyre_1 = null;
}

if (isset($_POST['tyre_2'])) {
    $tyre_2 = $_POST['tyre_2'];
} else {
    $tyre_2 = null;
}

if (isset($_POST['tyre_3'])) {
    $tyre_3 = $_POST['tyre_3'];
    // if ($brand != null || $tyre_1 != null || $tyre_2 != null) {
    //     $str =  "$str" . "AND tyre_3 IN ('" . implode("','", $tyre_3) . "') ";
    // }else if ($brand != null || $tyre_1 != null || $tyre_2 != null) {
    //         $str = "where tyre_3 IN ('" . implode("','", $tyre_3) . "') ";
    // }
} else {
    $tyre_3 = null;
}
if (isset($_POST['reset'])) {
    $sql = "SELECT * FROM product";
} else {
    $sql = " SELECT * FROM product WHERE true ";
    $sql .= !empty($_POST['brand']) ? " AND  brand IN ('" . implode("','", $brand) . "') " : "";
    $sql .= !empty($_POST['tyre_1']) ? " AND  tyre_1 IN ('" . implode("','", $tyre_1) . "') " : "";
    $sql .= !empty($_POST['tyre_2']) ? " AND  tyre_2 IN ('" . implode("','", $tyre_2) . "') " : "";
    $sql .= !empty($_POST['tyre_3']) ? " AND  tyre_3 IN ('" . implode("','", $tyre_3) . "') " : "";
}


$query = mysqli_query($conn, $sql);

// echo $sql;
?>
<div class="col-md-12">
    <table id="table" class="table table-bordered table-hover col-12">
        <thead class="thead-dark  ">
            <tr style="height:100%;">
                <th class="text-center" >ลำดับ</th>
                <th class="text-center" >รหัสสินค้า</th>
                <th class="text-center"  onclick="sortTable(1)">หน้ากว้างยาว</th>
                <th class="text-center"  onclick="sortTable(2)">แก้มยางสูง</th>
                <th class="text-center" >เส้นผ่านศูนย์กลางกระทะล้อ</th>
                <th class="text-center"  onclick="sortTable(0)">ยี่ห้อ</th>
                <th class="text-center"  >รุ่นยาง</th>
             
                <th class="text-center" >ราคาสินค้าต่อเส้น</th>
                <th class="text-center" >หมายเหตุ</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            while ($result = mysqli_fetch_array($query)) { ?>
                <tr class="text-center">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result['id_tyre']; ?></td>
                    <td><?php echo $result['tyre_1']; ?></td>
                    <td><?php echo $result['tyre_2']; ?></td>
                    <td><?php echo $result['tyre_3']; ?></td>
                    <td><?php echo $result['brand']; ?></td>
                    <td><?php echo $result['tyre_Gen']; ?></td>
                   
                    <td><?php echo $result['someprice']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#centralModalInfo">
                            <i class="fas fa-info-circle  fa-lg "></i>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-shopping-cart fa-lg "></i>
                        </button>
                    </td>

                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>
</div>


