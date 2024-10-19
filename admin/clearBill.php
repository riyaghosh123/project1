<?php $page = "clear_bill";
include './components/head.php'; ?>
<title>Clear Bill</title>
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
                        <a class="text-dark" style="text-decoration:none" href="./dashboard">Clear Bill</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Clear Bill</h6>
                            <!-- <a href="./user" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a> -->
                        </div>
                        <div class="card-body pd-sm">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Id</th>
                                            <th>Service Provider Name</th>
                                            <th>Email</th>
                                            <th>Amount</th>
                                            <th>Payment Mode</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1001</td>
                                            <td>User123</td>
                                            <td>Hotel Booking</td>
                                            <td>Demo@gmail.com</td>
                                            <td>2143123</td>
                                            <td>Online</td>
                                            <!-- <td class="d-flex justify-content-center" style="gap:4px;">
                                                <a href="./viewRequest" class="btn btn-sm btn-info text-light">View</a>
                                            </td> -->
                                        </tr>
                                    </tbody>
                                </table>
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
</body>

</html>