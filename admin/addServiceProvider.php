<?php $page = "sProvider";
include './components/head.php'; ?>
<title>Add Service Provider</title>
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
                        <a class="text-dark" style="text-decoration:none" href="./serviceProvider">Add Service Provider</a>
                    </h4>
                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid px-4 pb-4">
                                <div class="form-box">
                                    <form class="mt-3 row" method="post">
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="name">Name</label>
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="mail">Email</label>
                                            <input class="form-control" id="mail" type="text" name="mail"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="ids">Id</label>
                                            <input class="form-control" id="ids" type="text" name="ids"
                                                placeholder=" Id Number">
                                        </div>
                                        <div class="form-group mt-2 col-sm-6">
                                            <label for="password">Password</label>
                                            <input class="form-control" id="password" type="text" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <input class="btn btn-primary mt-3" type="submit" name="submit"
                                                value="Add Now">
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
        let table = new DataTable('#myTable', {
            // options
        });


    </script>
</body>

</html>