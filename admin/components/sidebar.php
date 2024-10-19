<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav mt-2" style="gap: 3px;">
            <a class="nav-link <?php if ($page == 'dashboard')
                echo 'active' ?>" href="./dashboard">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    Dashboard
                </a>
                <a class="nav-link <?php if ($page == 'sProvider')
                echo 'active' ?>" href="./serviceProvider">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Service Provider
                </a>
                </a>
                <a class="nav-link <?php if ($page == 'request')
                echo 'active' ?>" href="./request">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Request
                </a>
                <a class="nav-link <?php if ($page == 'user')
                echo 'active' ?>" href="./user">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    User
                </a>
                <a class="nav-link <?php if ($page == 'booking')
                echo 'active' ?>" href="./booking">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Booking
                </a>
                <a class="nav-link <?php if ($page == 'commission')
                echo 'active' ?>" href="./commission">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Commission
                </a>
                <a class="nav-link <?php if ($page == 'accounts')
                echo 'active'; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#accountsSubmenu"
                aria-expanded="false" aria-controls="accountsSubmenu">
                <div class="sb-nav-link-icon">
                    <i class="fa-solid fa-clipboard"></i>
                </div>
                Accounts
            </a>

            <!-- Submenu for Accounts: Due Bill and Clear Bill -->
            <div class="collapse <?php if ($page == 'due_bill' || $page == 'clear_bill')
                echo 'show'; ?>" id="accountsSubmenu">
                <a class="nav-link padding-cng mb-2 <?php if ($page == 'due_bill')
                    echo 'active'; ?>" href="./dueBill.php">
                    <div class="sb-nav-link-icon sb-nav-link-icon-bg ">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Due Bill
                </a>
                <a class="nav-link padding-cng <?php if ($page == 'clear_bill')
                    echo 'active'; ?>" href="./clearBill">
                    <div class="sb-nav-link-icon sb-nav-link-icon-bg">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Clear Bill
                </a>
            </div>
            <a class="nav-link <?php if ($page == 'blog')
                echo 'active' ?>" href="./blog">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Blog
                </a>
                <a class="nav-link <?php if ($page == 'setting')
                echo 'active' ?>" href="./setting">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    Setting
                </a>
                <a class="nav-link <?php if ($page == 'logout')
                echo 'active' ?>" href="#!">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                    Logout
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Welcome, Mr. Suman Thakur</div>
        </div>
    </nav>