<?php $page = "booking";
include './components/head.php'; ?>
<title>Booking</title>
</head>


<body class="sb-nav-fixed">
    <?php include './components/nav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include './components/sidebar.php'; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header d-flex justify-content-between px-3">
                    <h4 class="mb-0">
                        <a class="text-dark" style="text-decoration:none" href="./booking">Booking</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Booking</h6>
                            <!-- <a href="./user" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a> -->
                        </div>
                        <div class="card-body pd-sm">
                            <div class="form-box">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Hotel Booking</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Cab Booking</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Puja Booking</button>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mt-2" id="myTable" width="100%"
                                                cellspacing="0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead class="bg-light">
                                                <tbody>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>mk0789</td>
                                                        <td>mkBoss09</td>
                                                        <td>Demo@gmail.com</td>
                                                        <td>1899</td>
                                                        <td class="d-flex justify-content-center" style="gap:4px;">
                                                            <a href="./editHBooking"
                                                                class="btn btn-sm btn-info text-light">Edit</a>
                                                            <a href="#!" class="btn btn-sm btn-danger">Delete</a>
                                                            <a href="#" class="btn btn-sm btn-danger">Block</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mt-2 pt-2" id="myTable1" width="100%"
                                                cellspacing="0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead class="bg-light">
                                                <tbody>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>mk0789</td>
                                                        <td>Bolero</td>
                                                        <td>Demo@gmail.com</td>
                                                        <td>1899</td>
                                                        <td class="d-flex justify-content-center" style="gap:4px;">
                                                            <a href="./editCBooking"
                                                                class="btn btn-sm btn-info text-light">Edit</a>
                                                            <a href="#!" class="btn btn-sm btn-danger">Delete</a>
                                                            <a href="#" class="btn btn-sm btn-danger">Block</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mt-2 pt-2" id="myTable2" width="100%"
                                                cellspacing="0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead class="bg-light">
                                                <tbody>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>mk0789</td>
                                                        <td>Purohit</td>
                                                        <td>Demo@gmail.com</td>
                                                        <td>1899</td>
                                                        <td class="d-flex justify-content-center" style="gap:4px;">
                                                            <a href="./editPBooking"
                                                                class="btn btn-sm btn-info text-light">Edit</a>
                                                            <a href="#!" class="btn btn-sm btn-danger">Delete</a>
                                                            <a href="#" class="btn btn-sm btn-danger">Block</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!--<?php include './components/copy.php'; ?>-->
        </div>
    </div>
    <?php include './components/script.php'; ?>
    <script>
        let table = new DataTable('#myTable', {
            // options
        });
    </script>
    <script>
        let table1 = new DataTable('#myTable1', {
            // options
        });
    </script>
    <script>
        let table2 = new DataTable('#myTable2', {
            // options
        });
    </script>
</body>

</html>