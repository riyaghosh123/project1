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
                <a class="nav-link <?php if ($page == 'setService')
                echo 'active'; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#accountsSubmenu"
                aria-expanded="false" aria-controls="accountsSubmenu">
                <div class="sb-nav-link-icon">
                    <i class="fa-solid fa-users-gear"></i>
                </div>
                Set Service
            </a>

            <!-- Submenu for Accounts: Due Bill and Clear Bill -->
            <div class="collapse <?php if ($page == 'due_bill' || $page == 'clear_bill' || $page == 'pujaBooking')
                echo 'show'; ?>" id="accountsSubmenu">
                <a class="nav-link padding-cng mb-2 <?php if ($page == 'due_bill')
                    echo 'active'; ?>" href="./hotelBooking">
                    <div class="sb-nav-link-icon sb-nav-link-icon-bg ">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    Hotel Booking
                </a>
                <a class="nav-link padding-cng mb-2 <?php if ($page == 'clear_bill')
                    echo 'active'; ?>" href="./carBooking">
                    <div class="sb-nav-link-icon sb-nav-link-icon-bg">
                        <i class="fa-solid fa-taxi"></i>
                    </div>
                    Car Booking
                </a>
                <a class="nav-link padding-cng <?php if ($page == 'pujaBooking')
                    echo 'active'; ?>" href="./pujaBooking">
                    <div class="sb-nav-link-icon sb-nav-link-icon-bg">
                        <i class="fa-solid fa-gopuram"></i>
                    </div>
                    Purohit Booking
                </a>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Welcome, Mr. Suman Thakur</div>
    </div>
</nav>