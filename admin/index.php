<?php include 'includes/header.php'; ?>

<!-- Sidebar -->
<?php include 'includes/sidebar.php'; ?>

<main class="content">

    <!-- Topbar -->
    <?php include 'includes/topbar.php'; ?>

    <!-- NỘI DUNG CHÍNH (DASHBOARD) -->
    <div class="py-4">
        <div class="dropdown">
            <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg> New Task
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                <a class="dropdown-item d-flex align-items-center" href="#">Add User</a>
                <a class="dropdown-item d-flex align-items-center" href="#">Add Widget</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-lg-center">
        <div class="col-12 mb-4">
            <div class="card border-0 bg-yellow-100 shadow">
                <div class="card-header d-sm-flex flex-row align-items-center border-yellow-200 flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <div class="fs-5 fw-normal mb-2">Sales Value</div>
                        <h2 class="fs-3 fw-extrabold">$10,567</h2>
                        <div class="small mt-2">
                            <span class="fw-normal me-2">Yesterday</span>
                            <span class="fas fa-angle-up text-success"></span>
                            <span class="text-success fw-bold">10.57%</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div id="chart"></div> <!-- Biểu đồ -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Customers -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xxl-flex align-items-center">
                        <div class="col-12 col-xxl-6 px-xxl-0 mb-3 mb-xxl-0">
                            <div id="chart-customers"></div>
                        </div>
                        <div class="col-12 col-xxl-6 ps-xxl-4 pe-xxl-0">
                            <h2 class="fs-6 fw-normal mb-1 text-gray-400">Customers</h2>
                            <h3 class="fw-extrabold mb-1">345k</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

</main>