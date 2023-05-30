<?php
include "includes/db.php";
include "includes/header.php";
include "includes/sidebar.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- ====================== heading ====================== -->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <!-- ====================== cards ====================== -->
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Appointments</h5>
                    <h6 class="m-b-20">Current Week</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>159</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Doctors</h5>
                    <h6 class="m-b-20">Joined this week</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>18</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Staffs</h5>
                    <h6 class="m-b-20">Joined this week</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>42</span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card1 bg-c-blue order-card">
                <div class="card-block">
                    <h5 class="m-b-20">Patients</h5>
                    <h6 class="m-b-20">Currently Admitted</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card1 f-left"></i><span>256</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== appointments table ====================== -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Appointments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display" id="dataTable">
                            <thead>
                                <th>UID</th>
                                <th>Name*</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Add*</th>
                                <th>Mobile</th>
                                <th>DOB*</th>
                                <th>DOJ</th>
                                <th>PAN</th>
                                <th>Aadhar</th>
                                <th>Operations</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM staff NATURAL JOIN category");
                                if (mysqli_num_rows($sql)) {
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        echo '<tr>
                                                    <td>' . $row['uid'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['gender'] . '">' . $row['name'] . '</td>
                                                    <td>' . $row['cat_name'] . '</td>
                                                    <td>' . $row['email'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['address'] . '">View</td>
                                                    <td>' . $row['mobile'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['dob'] . '">View</td>
                                                    <td>' . $row['doj'] . '</td>
                                                    <td>' . $row['pan'] . '</td>
                                                    <td>' . $row['aadhar'] . '</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between">
                                                            <form action="staffEdit.php" method="POST">
                                                                <input type="hidden" value="' . $row['staff_id'] . '" name="staff_id">
                                                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                                            </form>
                                                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                                        <div>
                                                    </td>
                                                </tr>  
                                            ';
                                    }
                                } else {
                                    echo '<tr><td colspan="10">No data found!</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== charts ====================== -->

    <div class="charts row">
        <div class="col d-flex flex-column">
            <h4 class="text-center">Current Ratio</h4>
            <canvas class="chart mt-2" id="myChart" style="max-height:400px;"></canvas>
        </div>
        <div class="col d-flex flex-column">
            <h4 class="text-center">Patients Admission Curve</h4>
            <canvas class="mt-4" id="myChart2" style="max-height:400px;"></canvas>
        </div>
    </div>

    <!-- ====================== doctors list table ====================== -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Doctors</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table display" id="dataTable1">
                            <thead>
                                <th>UID</th>
                                <th>Name*</th>
                                <th>Type</th>
                                <th>Email</th>
                                <th>Add*</th>
                                <th>Mobile</th>
                                <th>DOB*</th>
                                <th>DOJ</th>
                                <th>PAN</th>
                                <th>Aadhar</th>
                                <th>Operations</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM staff NATURAL JOIN category");
                                if (mysqli_num_rows($sql)) {
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        echo '<tr>
                                                    <td>' . $row['uid'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['gender'] . '">' . $row['name'] . '</td>
                                                    <td>' . $row['cat_name'] . '</td>
                                                    <td>' . $row['email'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['address'] . '">View</td>
                                                    <td>' . $row['mobile'] . '</td>
                                                    <td data-bs-toggle="tooltip" data-bs-placement="top" title="' . $row['dob'] . '">View</td>
                                                    <td>' . $row['doj'] . '</td>
                                                    <td>' . $row['pan'] . '</td>
                                                    <td>' . $row['aadhar'] . '</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between">
                                                            <form action="staffEdit.php" method="POST">
                                                                <input type="hidden" value="' . $row['staff_id'] . '" name="staff_id">
                                                                <button type="submit" class="btn btn-success btn-sm" style="font-size: 12px;" name="staffEdit_btn">Edit</button>
                                                            </form>
                                                            <button type="button" class="btn btn-danger btn-sm deleteStaff" style="font-size: 12px;" data-id="' . $row['staff_id'] . '">Del</button>
                                                        <div>
                                                    </td>
                                                </tr>  
                                            ';
                                    }
                                } else {
                                    echo '<tr><td colspan="10">No data found!</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== dashboard ends ====================== -->

</main>
<?php
include("includes/footer.php");
?>