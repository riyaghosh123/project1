<?php $page = "clear_bill";
include './components/head.php'; ?>
<title>Set Service</title>
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
                        <a class="text-dark" style="text-decoration:none" href="./dashboard">Set Service</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Car Booking</h6>
                            <!-- <a href="./user" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a> -->
                        </div>
                        <div class="container-fluid px-4">
                            <div class="card-body pd-sm">
                                <div class="form-box">
                                    <form class="row" method="post">
                                        <form class="mt-3 row" method="post">
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="category">Cab Category</label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="">Select Cab Category</option>
                                                    <option value="">Bolero</option>
                                                    <option value="">Honda</option>
                                                    <option value="">Suzuki</option>
                                                    <option value="">Omni</option>
                                                    <option value="">Scorpio</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="cabName">CAb Name</label>
                                                <input class="form-control" id="cabName" type="text" name="cabName"
                                                    placeholder="Cab Name">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="images">Images</label>
                                                <input class="form-control" id="images" type="file" name="images"
                                                    placeholder=" Images" accept="image/*">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="driverName">Driver Name</label>
                                                <input class="form-control" id="driverName" type="text" name="driverName"
                                                    placeholder="Driver Name">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="phone">Phone No</label>
                                                <input class="form-control" id="phone" type="text" name="phone"
                                                    placeholder="Phone No">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="cabReg">Cab Reg No</label>
                                                <input class="form-control" id="cabReg" type="text" name="cabReg"
                                                    placeholder="Cab Registration No">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="smartCard">Smart Card Image</label>
                                                <input class="form-control" id="smartCard" type="text" name="smartCard"
                                                    placeholder="Smart Card">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="tourPackage">Select Tour Package</label>
                                                <select class="form-control" name="tourPackage" id="tourPackage">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="d-flex justify-content-end mb-3">
                                                <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                    value="Add Now">
                                            </div>
                                        </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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

    <script>
        function checkSelection() {
            var selectedValue = document.getElementById("foods").value;
            var foodFieldsDiv = document.getElementById("foodFields");

            if (selectedValue === "Yes") {
                // Show the text fields
                foodFieldsDiv.classList.remove("hidden");
            } else {
                // Hide the text fields
                foodFieldsDiv.classList.add("hidden");
            }
        }
    </script>
</body>

</html>