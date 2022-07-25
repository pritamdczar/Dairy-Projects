<?php
session_start();
if (!($_SESSION['status'] == 'logedin')){
    header('Location: auth-login-basic.php');
}
?>
<!DOCTYPE html>
<!-- beautify ignore:start -->
<html>
<head>
    <meta charset="utf-8" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="index.php" class="app-brand-link">

                    <img src="../assets/img/logo1.png" style="width: 100%; max-width: 250px;"/>
                </a>
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item active">
                    <a href="index.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>




                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Farmer Setup</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                        <div data-i18n="Account Settings">Farmer Agent</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="agent.php?Type=Farmer" class="menu-link">
                                <div data-i18n="Account">All Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentadd.php" class="menu-link">
                                <div data-i18n="Account">Add Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentreport.php" class="menu-link">
                                <div data-i18n="Account">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Authentications">Farmer</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="farmer.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">All Farmers</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="farmeradd.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Add</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="advance.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Advance Setup</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="farmerreport.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-plus"></i>
                        <div data-i18n="Misc">More</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="tools.html" class="menu-link">
                                <div data-i18n="Error">Tools</div>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Client Setup</span></li>
                <!-- Cards -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                        <div data-i18n="Account Settings">Client Agent</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="agent.php?Type=Client" class="menu-link">
                                <div data-i18n="Account">All Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentadd.php" class="menu-link">
                                <div data-i18n="Account">Add Agent</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="agentreport.php" class="menu-link">
                                <div data-i18n="Account">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Authentications">Client</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="client.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">All Client</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="clientadd.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Add</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="setup.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">Other Setup</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="clientreport.php" class="menu-link" target="_blank">
                                <div data-i18n="Basic">View Report</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Fat Calculate</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="fatfarmer.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-calculator"></i>
                        <div data-i18n="Tables">Farmer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="fatagent.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-calculator"></i>
                        <div data-i18n="Tables">Agent</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Rate Setup</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="salesrate.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div data-i18n="Tables">Sales Rate</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="buyrate.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-money"></i>
                        <div data-i18n="Tables">Buy Rate</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Bill Entry</span></li>
                <!-- Forms -->

                <!-- Tables -->
                <li class="menu-item">
                    <a href="sales.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                        <div data-i18n="Tables">Sales</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="expenses.php" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                        <div data-i18n="Tables">Expenses</div>
                    </a>
                </li>
                <!-- Misc -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
                <li class="menu-item">
                    <a
                            href="support.php"
                            target="_blank"
                            class="menu-link"
                    >
                        <i class="menu-icon tf-icons bx bx-support"></i>
                        <div data-i18n="Support">Support</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="mailto:pritamdczar@gmail.com" class="menu-link" >
                        <i class="menu-icon tf-icons bx bx-phone"></i>
                        <div data-i18n="Support">Direct Contact</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                        <?php
                        $a= $_SESSION['User'];
                        require_once 'Connection.php';
                        $sql = "SELECT * from admin where Email='$a'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($data = mysqli_fetch_array($result)) {
                                ?>

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">


                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="../assets/img/<?php echo $data['Photo']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block"><?php echo $data['Name']; ?></span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>

                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="auth-login-basic.php">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                            }
                        }

                        ?>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>
            <!-- / Navbar -->
            <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Agent/</span> Add Agent</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                require_once 'Connection.php';
                                $i=$_GET['id'];
                                $sql = "SELECT * FROM agent where Id=$i";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                <div class="card mb-4">
                                    <h5 class="card-header">Profile Details</h5>
                                    <!-- Account -->
                                    <form  method="POST" action="editagent.php" enctype="multipart/form-data" >
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img
                                                    src="../assets/img/agent/<?php echo $data['Photo'];?>"
                                                    alt="user-avatar"
                                                    class="d-block rounded"
                                                    height="100"
                                                    width="100"
                                                    id="uploadedAvatar"
                                                    name="Photo"
                                            />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input
                                                            type="file"
                                                            id="upload"
                                                            class="account-file-input"
                                                            hidden
                                                            accept="image/png, image/jpeg"
                                                            name="Photo"
                                                    />
                                                </label>

                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">

                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">Full Name</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="firstName"
                                                            name="Name"
                                                            value="<?php echo $data['Name'];?>"
                                                      required
                                                            autofocus
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="lastName" class="form-label">This Agent is For <?php echo $data['Type'];?></label>
                                                    <select name="Type" class="select2 form-select">>
                                                        <option value="Client">Client</option>
                                                        <option value="Farmer">Farmer</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="email"
                                                            name="Email"
                                                            value="<?php echo $data['Email'];?>"
                                                            required=""
                                                           disabled
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="organization" class="form-label">Agent Since</label>
<input type="hidden" name="id" value="<?php echo $data['Id'];?>">
                                                    <input type="text"  class="form-control" name="Date"  value="<?php echo $data['Date'];?>" disabled>

                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text">NEP (+977)</span>
                                                        <input
                                                                type="number"
                                                                id="phoneNumber"
                                                                name="Contact"
                                                                class="form-control"
                                                                value="<?php echo $data['Contact'];?>"

                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="Address"  value="<?php echo $data['Address'];?>" />
                                                </div>

                                            <div class="mt-2">
                                                <button type="submit" name="submit" class="btn btn-primary me-2">Update Changes</button>

                                            </div>
                                    </form>
                                    </div>
                                    <!-- /Account -->
                                <?php
                                }
                                }
                                ?>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->




                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="http://pritambajagain.com.np" target="_blank" class="footer-link fw-bolder">D Czar</a>
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>
<script src="../assets/js/pages-account-settings-account.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
