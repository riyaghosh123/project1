<?php $page = "due_bill";
include './components/head.php'; ?>
<title>Due Bill</title>
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
                        <a class="text-dark" style="text-decoration:none" href="./dashboard">Due Bill</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Due Bill</h6>
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
                                        <div class="container-fluid px-4 pb-4">
                                            <div class="form-box">
                                                <form class="mt-3 row" method="post">
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="ids">Id</label>
                                                        <input class="form-control" id="ids" type="text" name="ids"
                                                            placeholder=" Id Number">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="username">Service Provider Name</label>
                                                        <input class="form-control" id="name" type="text"
                                                            name="username" placeholder="Service Provider Name">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="Date">Date</label>
                                                        <input class="form-control" id="Date" type="date" name="Date">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="totalbill">Total Bill</label>
                                                        <input class="form-control" id="totalbill" type="number"
                                                            name="totalbill" placeholder="Total Bill" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="mycommission">My Commission</label>
                                                        <input class="form-control" id="mycommission" type="number"
                                                            name="mycommission" placeholder="My Commission" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="payserv">Pay To Service Provider</label>
                                                        <input class="form-control" id="payserv" type="number"
                                                            name="payserv" placeholder="Pay Service Provider" min="0">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                            value="Done">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="container-fluid px-4 pb-4">
                                            <div class="form-box">
                                                <form class="mt-3 row" method="post">
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="ids">Id</label>
                                                        <input class="form-control" id="ids" type="text" name="ids"
                                                            placeholder=" Id Number">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="username">Service Provider Name</label>
                                                        <input class="form-control" id="name" type="text"
                                                            name="username" placeholder="Service Provider Name">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="Date">Date</label>
                                                        <input class="form-control" id="Date" type="date" name="Date">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="totalbill">Total Bill</label>
                                                        <input class="form-control" id="totalbill" type="number"
                                                            name="totalbill" placeholder="Total Bill" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="mycommission">My Commission</label>
                                                        <input class="form-control" id="mycommission" type="number"
                                                            name="mycommission" placeholder="My Commission" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="payserv">Pay To Service Provider</label>
                                                        <input class="form-control" id="payserv" type="number"
                                                            name="payserv" placeholder="Pay Service Provider" min="0">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                            value="Done">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="container-fluid px-4 pb-4">
                                            <div class="form-box">
                                                <form class="mt-3 row" method="post">
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="ids">Id</label>
                                                        <input class="form-control" id="ids" type="text" name="ids"
                                                            placeholder=" Id Number">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="username">Service Provider Name</label>
                                                        <input class="form-control" id="name" type="text"
                                                            name="username" placeholder="Service Provider Name">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="Date">Date</label>
                                                        <input class="form-control" id="Date" type="date" name="Date">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="totalbill">Total Bill</label>
                                                        <input class="form-control" id="totalbill" type="number"
                                                            name="totalbill" placeholder="Total Bill" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="mycommission">My Commission</label>
                                                        <input class="form-control" id="mycommission" type="number"
                                                            name="mycommission" placeholder="My Commission" min="0">
                                                    </div>
                                                    <div class="form-group mt-2 col-sm-6">
                                                        <label for="payserv">Pay To Service Provider</label>
                                                        <input class="form-control" id="payserv" type="number"
                                                            name="payserv" placeholder="Pay Service Provider" min="0">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                            value="Done">
                                                    </div>
                                                </form>
                                            </div>
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