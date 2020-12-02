<?php include "includes/header-admin.php" ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DANH SÁCH KHÁCH HÀNG
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
                        "paging": {
                        "enabled": true
                        },
                        "filtering": {
                        "enabled": true
                        },
                        "sorting": {
                        "enabled": true
                        }}'>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <td>UserName</td>
                            <td>Password</td>
                            <td>Createdate</td>
                        </tr>
                        <?php include "includes/connection.php";
                        $result = mysqli_query($conn, "SELECT * FROM customers");
                        $row = mysqli_fetch_assoc($result);
                        foreach ($result as $row) { ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Address']; ?></td>
                                <td><?php echo $row['Phone']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['UserName']; ?></td>
                                <td><?php echo $row['Password']; ?></td>
                                <td><?php echo $row['Createdate']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

        <?php include "includes/footer-admin.php" ?>