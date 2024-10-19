<?php $page = "due_bill";
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
                            <h6 class="m-0 font-weight-bold text-primary">Hotel Booking</h6>
                            <!-- <a href="./user" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New</a> -->
                        </div>
                        <div class="container-fluid px-4">
                            <div class="card-body pd-sm">
                                <div class="form-box">
                                    <form class="row" method="post">
                                        <form class="mt-3 row" method="post">
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="hName">Hotel Name</label>
                                                <input class="form-control" id="hName" type="text" name="hName"
                                                    placeholder="Hotel Name">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="address">Address</label>
                                                <input class="form-control" id="address" type="text" name="address"
                                                    placeholder="Address">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="hPhno">Hotel Phone No</label>
                                                <input class="form-control" id="hPhno" type="text" name="hPhno"
                                                    placeholder="Hotel Phone no">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="contactPerson">Contact Person Name</label>
                                                <input class="form-control" id="contactPerson" type="text"
                                                    name="contactPerson" placeholder="Contact Person Name">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="acNonac">Ac Or Non-Ac</label>
                                                <select class="form-control" name="acNonac" id="acNonac">
                                                    <option value="">Ac</option>
                                                    <option value="">Non-Ac</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="images">Images</label>
                                                <input class="form-control" id="images" type="file" name="images"
                                                    placeholder=" Images" accept="image/*">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="priceN">Price Per Night</label>
                                                <input class="form-control" id="priceN" type="text" name="priceN"
                                                    placeholder="Price Per Night">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="checkin">Check In Time</label>
                                                <input class="form-control" id="checkin" type="time" name="checkin"
                                                    placeholder="checkInTime">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="checkout">Check Out Time</label>
                                                <input class="form-control" id="checkout" type="time" name="checkout"
                                                    placeholder="CheckOutTime">
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="foods">Food Include</label>
                                                <select class="form-control" name="foods" id="foods"
                                                    onchange="checkSelection()">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                            <div id="foodFields" class="hidden row m-0 p-0">
                                                <div class="form-group mt-2 col-sm-6">
                                                    <label for="breakfast">Breakfast</label>
                                                    <input type="text" class="form-control" id="breakfast"
                                                        name="breakfast" placeholder="Enter breakfast item">
                                                </div>
                                                <div class="form-group mt-2 col-sm-6">
                                                    <label for="lunch">Lunch</label>
                                                    <input type="text" class="form-control" id="lunch" name="lunch"
                                                        placeholder="Enter lunch item">
                                                </div>
                                                <div class="form-group mt-2 col-sm-6">
                                                    <label for="snacks">Evening Snacks</label>
                                                    <input type="text" class="form-control" id="snacks" name="snacks"
                                                        placeholder="Enter snacks item">
                                                </div>
                                                <div class="form-group mt-2 col-sm-6">
                                                    <label for="dinner">Dinner</label>
                                                    <input type="text" class="form-control" id="dinner" name="dinner"
                                                        placeholder="Enter dinner item">
                                                </div>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="outfood">Out Side Food</label>
                                                <select class="form-control" name="outfood" id="outfood">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="pet">Pet Allow</label>
                                                <select class="form-control" name="pet" id="pet">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="visitor">Visitor Allow</label>
                                                <select class="form-control" name="visitor" id="visitor">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-6">
                                                <label for="pickup">PickUp Drop</label>
                                                <select class="form-control" name="pickup" id="pickup">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2 col-sm-12">
                                                <label for="facility">Facility</label>
                                                <div class="checkbox-cng">
                                                    <label>Tv <input class="ml-2" type="checkbox" name="ticket"></label>
                                                    <label>Iron <input class="ml-2" type="checkbox"
                                                            name="ticket"></label>
                                                    <label>Room Service <input class="ml-2" type="checkbox"
                                                            name="ticket">
                                                    </label>
                                                    <label>Swimming Pool <input class="ml-2" type="checkbox"
                                                            name="ticket">
                                                    </label>
                                                    <label>Alcohol <input class="ml-2" type="checkbox" name="ticket">
                                                    </label>
                                                    <label>Restaurent <input class="ml-2" type="checkbox" name="ticket">
                                                    </label>
                                                    <label>CCTV <input class="ml-2" type="checkbox" name="ticket">
                                                    </label>
                                                    <label>Bathroom Kit <input class="ml-2" type="checkbox"
                                                            name="ticket">
                                                    </label>
                                                    <label>Mini Bar <input class="ml-2" type="checkbox" name="ticket">
                                                    </label>
                                                    <label>Tea kit <input class="ml-2" type="checkbox" name="ticket">
                                                    </label>
                                                </div>
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