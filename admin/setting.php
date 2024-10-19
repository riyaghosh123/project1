<?php $page = "setting";
include './components/head.php'; ?>
<title>Setting</title>
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
                        <a class="text-dark" style="text-decoration:none" href="./dashboard">Setting</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid px-4">
                                <div class="form-box">
                                    <form class="mt-3 row" method="post">
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="old">Current Password</label>
                                            <input class="form-control" id="old" type="text" name="old"
                                                placeholder="Current Password">
                                        </div>
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="new_pass">New Password</label>
                                            <input class="form-control" id="new_pass" type="text" name="new_pass"
                                                placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="con_pass">Confirm Password</label>
                                            <input class="form-control" id="con_pass" type="text" name="con_pass"
                                                placeholder="Enter Confirm Password">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                value="Update">
                                        </div>
                                    </form>
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

    </script>
</body>

</html>