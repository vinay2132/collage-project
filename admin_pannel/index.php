<?php
// Initialize the session
session_start();
include("dbconfig.php");
if( isset($_SESSION['password']) && ($_SESSION['acctype']=='admin')){
   // $email=$_SESSION['email'];
    $password=$_SESSION['password'];
    $acctype=$_SESSION['acctype'];
   // $email = $_GET['email'];

}
else{
    header("location: pages/samples/lock-screen.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Digital Trend</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="pro-banner" id="pro-banner">
            <div class="card pro-banner-bg border-0 rounded-0">

            </div>
        </div>
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">
                            <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                                    <i class="mdi mdi-bell mx-0"></i>
                                    <span class="count bg-success">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-information mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-settings mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-account-box mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                                    <i class="mdi mdi-email mx-0"></i>
                                    <span class="count bg-primary">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                The meeting is cancelled
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                New product launch
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal"> Admin
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                Upcoming board meeting
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
                            </li>
                            <li class="nav-item nav-search d-none d-lg-block ml-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                                </div>
                            </li>
                        </ul>
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo" href="index.html"> <strong>Digital Trend</strong></a>

                            <a class="navbar-brand brand-logo-mini" href="index.html"><strong>DT</strong></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown  d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
                            </li>
                            <li class="nav-item dropdown d-lg-flex d-none">
                                <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown">
                  Reports
                  </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                                    <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-file-pdf text-primary"></i> Pdf
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-file-excel text-primary"></i> Exel
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                    <span class="nav-profile-name">Admin</span>
                                    <span class="online-status"></span>
                                    <img src="images/faces/face28.png" alt="profile" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i> Settings
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
                    </div>
                </div>
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                <i class="mdi mdi-file-document-box menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/pp/college_majorproject/general_homepage/aboutus.html" class="nav-link">
                                <i class="mdi mdi-home-variant menu-icon"></i>
                                <span class="menu-title">Home Page</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-finance menu-icon"></i>
                                <span class="menu-title">Charts</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-cube-outline menu-icon"></i>
                                <span class="menu-title">Entrepreneurs</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/entrepreneur_profile.php">Entrepreneur Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/enterprens_form_sub.php">Mentorship Forms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/enterprens_contact.php">Enterpreners Contacts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/enterprens_services.php">Enterpreners Services</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="mdi mdi-finance menu-icon"></i>
                                <span class="menu-title">Mentors</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/mentors_profile.php">Mentors Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/mentors_contact.php">Mentors Contacts</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="admin_elements/investor_profile.php" class="nav-link">
                                <i class="mdi mdi-grid menu-icon"></i>
                                <span class="menu-title">Investors</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/investor_profile.php">Investors Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin_elements/investor_contact.php">Investors Contacts</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="admin_elements/contactus_details.php" class="nav-link">
                                <i class="mdi mdi-phone-log menu-icon"></i>
                                <span class="menu-title">Contact Us</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                        <!---- <li class="nav-item">
                            <a href="admin_elements/contactus_details.php" class="nav-link">
                                <i class="mdi mdi-codepen menu-icon"></i>
                                <span class="menu-title">Contact Us</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul class="submenu-item">
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>-->
                        <li class="nav-item">
                            <a href="docs/documentation.html" class="nav-link">
                                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                                <span class="menu-title">Documentation</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/samples/lock_logout.php" class="nav-link">
                                <i class="mdi mdi-logout menu-icon"></i>
                                <span class="menu-title">Log Out</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-6 mb-4 mb-xl-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                                    <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</button>
                                </div>
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Help
											<i class="mdi mdi-help-circle-outline btn-icon-append"></i>                          
									</button>
                                </div>
                                <div class="pr-1 mb-3 mb-xl-0">
                                    <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Print
											<i class="mdi mdi-printer btn-icon-append"></i>                          
										</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="card-title">Sales Difference</h4>
                                            <canvas id="salesDifference"></canvas>
                                            <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                        <div class="col-lg-5">
                                            <h4 class="card-title">Best Sellers</h4>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="graphl-legend-rectangle">
                                                        <li><span class="bg-danger"></span>Automotive</li>
                                                        <li><span class="bg-warning"></span>Books</li>
                                                        <li><span class="bg-info"></span>Software</li>
                                                        <li><span class="bg-success"></span>Video games</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <canvas id="bestSellers"></canvas>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-4 mb-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4 class="card-title">Social Media Statistics</h4>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="progress progress-lg grouped mb-2">
                                                        <div class="progress-bar  bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <ul class="graphl-legend-rectangle">
                                                        <li><span class="bg-danger"></span>Instagram (15%)</li>
                                                        <li><span class="bg-warning"></span>Facebook (20%)</li>
                                                        <li><span class="bg-info"></span>Website (25%)</li>
                                                        <li><span class="bg-success"></span>Youtube (40%)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p class="mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="card congratulation-bg text-center">
                                <div class="card-body pb-0">
                                    <img src="images/dashboard/face29.png" alt="">
                                    <h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulations Admin
                                    </h2>
                                    <p>You have done 57.6% more sales today. Check your new badge in your profile.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----
                    <div class="row">
                        <div class="col-sm-8 flex-column d-flex stretch-card">
                            <div class="row">
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card bg-primary">
                                        <div class="card-body text-white">
                                            <h3 class="font-weight-bold mb-3">18,39 (75GB)</h3>
                                            <div class="progress mb-3">
                                                <div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="pb-0 mb-0">Bandwidth usage</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-diffrence-border">
                                        <div class="card-body">
                                            <h2 class="text-dark mb-2 font-weight-bold">$6475</h2>
                                            <h4 class="card-title mb-2">Sales Difference</h4>
                                            <small class="text-muted">APRIL 2019</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex grid-margin stretch-card">
                                    <div class="card sale-visit-statistics-border">
                                        <div class="card-body">
                                            <h2 class="text-dark mb-2 font-weight-bold">$3479</h2>
                                            <h4 class="card-title mb-2">Visit Statistics</h4>
                                            <small class="text-muted">APRIL 2019</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 grid-margin d-flex stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4 class="card-title mb-2">Sales Difference</h4>
                                                <div class="dropdown">
                                                    <a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
                                                    <a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="settingsDropdownsales">
                                                        <i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="settingsDropdownsales">
                                                        <a class="dropdown-item">
                                                            <i class="mdi mdi-grease-pencil text-primary"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item">
                                                            <i class="mdi mdi-delete text-primary"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="nav nav-tabs tab-no-active-fill" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active pl-2 pr-2" id="revenue-for-last-month-tab" data-toggle="tab" href="#revenue-for-last-month" role="tab" aria-controls="revenue-for-last-month" aria-selected="true">Revenue for last month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link pl-2 pr-2" id="server-loading-tab" data-toggle="tab" href="#server-loading" role="tab" aria-controls="server-loading" aria-selected="false">Server loading</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link pl-2 pr-2" id="data-managed-tab" data-toggle="tab" href="#data-managed" role="tab" aria-controls="data-managed" aria-selected="false">Data managed</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#sales-by-traffic" role="tab" aria-controls="sales-by-traffic" aria-selected="false">Sales by traffic</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content tab-no-active-fill-tab-content">
                                                    <div class="tab-pane fade show active" id="revenue-for-last-month" role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
                                                        <div class="d-lg-flex justify-content-between">
                                                            <p class="mb-4">+5.2% vs last 7 days</p>
                                                            <div id="revenuechart-legend" class="revenuechart-legend">f</div>
                                                        </div>
                                                        <canvas id="revenue-for-last-month-chart"></canvas>
                                                    </div>
                                                    <div class="tab-pane fade" id="server-loading" role="tabpanel" aria-labelledby="server-loading-tab">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="mb-4">+5.2% vs last 7 days</p>
                                                            <div id="serveLoading-legend" class="revenuechart-legend">f</div>
                                                        </div>
                                                        <canvas id="serveLoading"></canvas>
                                                    </div>
                                                    <div class="tab-pane fade" id="data-managed" role="tabpanel" aria-labelledby="data-managed-tab">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="mb-4">+5.2% vs last 7 days</p>
                                                            <div id="dataManaged-legend" class="revenuechart-legend">f</div>
                                                        </div>
                                                        <canvas id="dataManaged"></canvas>
                                                    </div>
                                                    <div class="tab-pane fade" id="sales-by-traffic" role="tabpanel" aria-labelledby="sales-by-traffic-tab">
                                                        <div class="d-flex justify-content-between">
                                                            <p class="mb-4">+5.2% vs last 7 days</p>
                                                            <div id="salesTrafic-legend" class="revenuechart-legend">f</div>
                                                        </div>
                                                        <canvas id="salesTrafic"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 flex-column d-flex stretch-card">
                            <div class="row flex-grow">
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h3 class="font-weight-bold text-dark">Canada,Ontario</h3>
                                                    <p class="text-dark">Monday 3.00 PM</p>
                                                    <div class="d-lg-flex align-items-baseline mb-3">
                                                        <h1 class="text-dark font-weight-bold">23<sup class="font-weight-light"><small>o</small><small class="font-weight-medium">c</small></sup></h1>
                                                        <p class="text-muted ml-3">Partly cloudy</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="position-relative">
                                                        <img src="images/dashboard/live.png" class="w-100" alt="">
                                                        <div class="live-info badge badge-success">Live</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mt-4 mt-lg-0">
                                                    <div class="bg-primary text-white px-4 py-4 card">
                                                        <div class="row">
                                                            <div class="col-sm-6 pl-lg-5">
                                                                <h2>$1635</h2>
                                                                <p class="mb-0">Your Iincome</p>
                                                            </div>
                                                            <div class="col-sm-6 climate-info-border mt-lg-0 mt-2">
                                                                <h2>$2650</h2>
                                                                <p class="mb-0">Your Spending</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-3 mt-md-1">
                                                <div class="col">
                                                    <div class="d-flex purchase-detail-legend align-items-center">
                                                        <div id="circleProgress1" class="p-2"></div>
                                                        <div>
                                                            <p class="font-weight-medium text-dark text-small">Sessions</p>
                                                            <h3 class="font-weight-bold text-dark  mb-0">26.80%</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex purchase-detail-legend align-items-center">
                                                        <div id="circleProgress2" class="p-2"></div>
                                                        <div>
                                                            <p class="font-weight-medium text-dark text-small">Users</p>
                                                            <h3 class="font-weight-bold text-dark  mb-0">56.80%</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h4 class="card-title mb-0">Visits Today</h4>
                                                        <div class="dropdown">
                                                            <a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
                                                            <a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="profileDropdownvisittoday"><i class="mdi mdi-dots-horizontal"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdownvisittoday">
                                                                <a class="dropdown-item">
                                                                    <i class="mdi mdi-grease-pencil text-primary"></i> Edit
                                                                </a>
                                                                <a class="dropdown-item">
                                                                    <i class="mdi mdi-delete text-primary"></i> Delete
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-1">Calculated in last 30 days</p>
                                                    <div class="d-lg-flex align-items-center justify-content-between">
                                                        <h1 class="font-weight-bold text-dark">4332</h1>
                                                        <div class="mb-3">
                                                            <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Day</button>
                                                            <button type="button" class="btn btn-outline-light text-dark font-weight-normal">Month</button>
                                                        </div>
                                                    </div>
                                                    <canvas id="visitorsToday"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-success font-weight-bold"><?php 
                                        $sql = "select * from entrepreneurs ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?></h2>
                                        <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="newClient"></canvas>
                                <div class="line-chart-row-title">Enterpreners</div>
                            </div>
                        </div>
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-danger font-weight-bold"><?php 
                                        $sql = "select * from contact ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?></h2>
                                        <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="allProducts"></canvas>
                                <div class="line-chart-row-title">Contact Us</div>
                            </div>
                        </div>
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-info font-weight-bold">
                                        <?php 
                                        $sql = "select * from entrepreneurs_enrole ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?>
                                        </h2>
                                        <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="invoices"></canvas>
                                <div class="line-chart-row-title">Servies Request</div>
                            </div>
                        </div>
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-warning font-weight-bold">
                                        <?php 
                                        $sql = "select * from entrepreneurs where mentorship = 'abc' ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?>
                                        </h2>
                                        <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="projects"></canvas>
                                <div class="line-chart-row-title">Request Mentorship</div>
                            </div>
                        </div>
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-success font-weight-bold"><?php 
                                        $sql = "select * from investor ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?></h2>
                                        <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="orderRecieved"></canvas>
                                <div class="line-chart-row-title">Investors</div>
                            </div>
                        </div>
                        <div class="col-lg-2 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-success font-weight-bold"><?php 
                                        $sql = "select * from mentorship ";
                                        $result = mysqli_query($db, $sql);
      
                                        if ($result)
                                        {   
                                            // it return number of rows in the table.
                                            $row = mysqli_num_rows($result);
                                              
                                               if ($row)
                                                  {
                                                     printf( $row);
                                                  }
                                                }
                                        ?></h2>
                                        <i class="mdi mdi-cash text-dark mdi-18px"></i>
                                    </div>
                                </div>
                                <canvas id="transactions"></canvas>
                                <div class="line-chart-row-title">Mentors</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="card-title">Support Tracker</h4>
                                        <h4 class="text-success font-weight-bold">Tickets<span class="text-dark ml-3">163</span></h4>
                                    </div>
                                    <div id="support-tracker-legend" class="support-tracker-legend"></div>
                                    <canvas id="supportTracker"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-center justify-content-between mb-4">
                                        <h4 class="card-title">Product Orders</h4>
                                        <p class="text-dark">+5.2% vs last 7 days</p>
                                    </div>
                                    <div class="product-order-wrap padding-reduced">
                                        <div id="productorder-gage" class="gauge productorder-gage"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- <footer class="footer">
                    <div class="footer-wrap">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </footer>
            -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>