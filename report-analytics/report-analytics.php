<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}

?>

<?php
  include("../header_meta.php");
  ?>

<div id="dashboard-page">

    <?php
    include("../sidebar.php");
    ?>
    <div id="main-wrapper" class="">
        <?php
        include("../nav.php");

        ?>

        <!-- report & analytics -->
        <div id="report" class="px-4 px-md-5 py-4">
    <div class="row g-4">
        <div class="col-md-6 col-xl-4">
            <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block" href="./total-vehicle.php">
                <div class="card-body p-4 position-relative overflow-hidden">
                    <div class="metric-shape bg-primary-subtle"></div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="icon-glow bg-primary text-white me-4">
                            <i class="fas fa-truck fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="fw-bolder mb-0 text-dark">142</h3>
                            <p class="text-muted small fw-bold mb-0 opacity-75">Total Vehicles</p>
                        </div>
                        <div class="ms-auto text-end">
                            <span class="badge rounded-pill bg-light text-primary fw-bold p-2 small border border-primary-subtle">
                                Inventory
                            </span>
                        </div>
                    </div>
                    <p class="text-muted extra-small mt-3 mb-0 position-relative">Complete fleet operational status overview</p>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-xl-4">
            <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block" href="./trip.php">
                <div class="card-body p-4 position-relative overflow-hidden">
                    <div class="metric-shape bg-warning-subtle"></div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="icon-glow bg-warning text-white me-4">
                            <i class="fas fa-gas-pump fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="fw-bolder mb-0 text-dark">2.4M$</h3>
                            <p class="text-muted small fw-bold mb-0 opacity-75">Trip Expenses</p>
                        </div>
                        <div class="ms-auto text-end">
                            <span class="badge rounded-pill bg-light text-warning fw-bold p-2 small border border-warning-subtle">
                                Monthly
                            </span>
                        </div>
                    </div>
                    <p class="text-muted extra-small mt-3 mb-0 position-relative">Track fuel consumption and miscellaneous costs</p>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-xl-4">
            <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block" href="./incident.php">
                <div class="card-body p-4 position-relative overflow-hidden">
                    <div class="metric-shape bg-danger-subtle"></div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="icon-glow bg-danger text-white me-4">
                            <i class="fas fa-exclamation-triangle fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="fw-bolder mb-0 text-dark">08</h3>
                            <p class="text-muted small fw-bold mb-0 opacity-75">Incidents</p>
                        </div>
                        <div class="ms-auto text-end">
                            <span class="badge rounded-pill bg-light text-danger fw-bold p-2 small border border-danger-subtle">
                                Critical
                            </span>
                        </div>
                    </div>
                    <p class="text-muted extra-small mt-3 mb-0 position-relative">Emergency logs and on-road support reports</p>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-xl-4">
            <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block" href="./kpi-reports.php">
                <div class="card-body p-4 position-relative overflow-hidden">
                    <div class="metric-shape bg-success-subtle"></div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="icon-glow bg-success text-white me-4">
                            <i class="fas fa-chart-line fa-lg"></i>
                        </div>
                        <div>
                            <h3 class="fw-bolder mb-0 text-dark">94%</h3>
                            <p class="text-muted small fw-bold mb-0 opacity-75">KPI Performance</p>
                        </div>
                        <div class="ms-auto text-end">
                            <span class="badge rounded-pill bg-light text-success fw-bold p-2 small border border-success-subtle">
                                Optimal
                            </span>
                        </div>
                    </div>
                    <p class="text-muted extra-small mt-3 mb-0 position-relative">Analytics, fuel efficiency, and safety performance</p>
                </div>
            </a>
        </div>
    </div>
</div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>