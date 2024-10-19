<?php $page = "pujaBooking";
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
                            <h6 class="m-0 font-weight-bold text-primary">Purohit Booking</h6>
                            <!-- <a href="./user" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a> -->
                        </div>
                        <div class="container-fluid px-4">
                            <div class="card-body pd-sm">
                                <div class="form-box">
                                    <form class="row" method="post">
                                        <form class="mt-3 row" method="post">
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="images">Purohit Images</label>
                                                <input class="form-control" id="images" type="file" name="images"
                                                    placeholder=" Purohit Images" accept="image/*">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="hName">Purohit Name</label>
                                                <input class="form-control" id="hName" type="text" name="hName"
                                                    placeholder="Purohit Name">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="general">General Line Fees</label>
                                                <input class="form-control" id="general" type="number" min="0" name="general"
                                                    placeholder="General Line Fees">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="vipfee">VIP Line Fees</label>
                                                <input class="form-control" id="vipfee" type="number" min="0" name="vipfee"
                                                    placeholder="VIP Line Fees">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="vvipfee">VVIP Line Fees</label>
                                                <input class="form-control" id="vvipfee" type="number" min="0" name="vvipfee"
                                                    placeholder="VVIP Line Fees">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="pujaDakshina">Puja Dakshina</label>
                                                <input class="form-control" id="pujaDakshina" type="text"
                                                    name="pujaDakshina" placeholder="Puja Dakshina">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="specialPuja">Special Puja</label>
                                                <input class="form-control" id="specialPuja" type="text"
                                                    name="specialPuja" placeholder="Special Puja">
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