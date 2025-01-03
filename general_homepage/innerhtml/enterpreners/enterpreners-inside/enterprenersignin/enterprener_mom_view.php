<?php
// Initialize the session
session_start();
include("../../../../dbconfig.php");
// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION['email']) && isset($_SESSION['password']) && ($_SESSION['acctype']=='entrep')){
    $Email=$_SESSION['email'];
    $password=$_SESSION['password'];
    $acctype=$_SESSION['acctype'];
   //$email = $_GET['email'];

    $sql = "select * from mom where Mentor_email = '".$Email."'";
    $result1 = $db->query($sql);
        if ($result1->num_rows > 0) {
          $row = $result1->fetch_assoc();

          $Mentor_email = $row['Mentor_email'];
          //$email = $row['email'];
          $other_email = $row['other_email'];
          $MOM_file = $row['MOM_file'];
          $commentfile = $row['commentfile'];	
          $date = $row['date'];
          
        }
}
else{
    header("location: ../../mentor.html");
    exit;
}
?>

<html>

<head>
<link rel="shortcut icon" href="../images/favicon.png" />
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:400,600');
        * {
            outline: none;
        }
        
        strong {
            font-weight: 600;
        }
        
        .page {
            width: 100%;
            height: 100vh;
            background: #fdfdfd;
            font-family: 'Encode Sans Condensed', sans-serif;
            font-weight: 600;
            letter-spacing: .03em;
            color: #212121;
        }
        
        header {
            display: flex;
            position: fixed;
            width: 100%;
            height: 70px;
            background: #212121;
            color: #fff;
            justify-content: center;
            align-items: center;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        
        main {
            padding: 70px 20px 0;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        main>div {
            margin: auto;
            max-width: 600px;
        }
        
        main h2 span {
            color: #BF7497;
        }
        
        main p {
            line-height: 1.5;
            font-weight: 200;
            margin: 20px 0;
        }
        
        main small {
            font-weight: 300;
            color: #888;
        }
        
        #nav-container {
            position: fixed;
            height: 100vh;
            width: 100%;
            pointer-events: none;
        }
        
        #nav-container .bg {
            position: absolute;
            top: 70px;
            left: 0;
            width: 100%;
            height: calc(100% - 70px);
            visibility: hidden;
            opacity: 0;
            transition: .3s;
            background: #000;
        }
        
        #nav-container:focus-within .bg {
            visibility: visible;
            opacity: .6;
        }
        
        #nav-container * {
            visibility: visible;
        }
        
        .button {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            z-index: 1;
            -webkit-appearance: none;
            border: 0;
            background: transparent;
            border-radius: 0;
            height: 70px;
            width: 30px;
            cursor: pointer;
            pointer-events: auto;
            margin-left: 25px;
            touch-action: manipulation;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        
        .icon-bar {
            display: block;
            width: 100%;
            height: 3px;
            background: #aaa;
            transition: .3s;
        }
        
        .icon-bar+.icon-bar {
            margin-top: 5px;
        }
        
        #nav-container:focus-within .button {
            pointer-events: none;
        }
        
        #nav-container:focus-within .icon-bar:nth-of-type(1) {
            transform: translate3d(0, 8px, 0) rotate(45deg);
        }
        
        #nav-container:focus-within .icon-bar:nth-of-type(2) {
            opacity: 0;
        }
        
        #nav-container:focus-within .icon-bar:nth-of-type(3) {
            transform: translate3d(0, -8px, 0) rotate(-45deg);
        }
        
        #nav-content {
            margin-top: 70px;
            padding: 20px;
            width: 90%;
            max-width: 300px;
            position: absolute;
            top: 0;
            left: 0;
            height: calc(100% - 70px);
            background: #ececec;
            pointer-events: auto;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            transform: translateX(-100%);
            transition: transform .3s;
            will-change: transform;
            contain: paint;
        }
        
        #nav-content ul {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        #nav-content li a {
            padding: 10px 5px;
            display: block;
            text-transform: uppercase;
            transition: color .1s;
        }
        
        #nav-content li a:hover {
            color: #BF7497;
        }
        
        #nav-content li:not(.small)+.small {
            margin-top: auto;
        }
        
        .small {
            display: flex;
            align-self: center;
        }
        
        .small a {
            font-size: 12px;
            font-weight: 400;
            color: #888;
        }
        
        .small a+a {
            margin-left: 15px;
        }
        
        #nav-container:focus-within #nav-content {
            transform: none;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        html,
        body {
            height: 100%;
        }
        
        a,
        a:visited,
        a:focus,
        a:active,
        a:link {
            text-decoration: none;
            outline: 0;
        }
        
        a {
            color: currentColor;
            transition: .2s ease-in-out;
        }
        
        h1,
        h2,
        h3,
        h4 {
            margin: 0;
        }
        
        ul {
            padding: 0;
            list-style: none;
        }
        
        img {
            vertical-align: middle;
            height: auto;
            width: 100%;
        }

        body {
    background-color: #f9f9fa
}

.padding {
    padding: 0rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}

h2{
    text-align: center;
    font-size: 24px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 10px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 15px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
    </style>
</head>

<body>
    <div class="page">
        <header tabindex="0">  <p>
        <a class="logo" style="font-size: 25px;" style="color:#8261ee;"><i class="fa fa-line-chart"></i> <strong>Digital Trend</strong></a>   &emsp; Mentors MOM files
    </p></header>
        <div id="nav-container">
            <div class="bg"></div>
            <div class="button" tabindex="0">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div id="nav-content" tabindex="0">
            <ul>
                    <li><a href="services.php">Dashboard</a></li>
                    <li><a href="services_profile.php ">Your Profile</a></li>
                    <li><a href="services_finance.php">Financial Due</a></li>
                    <li><a href = "enterprener_mom_view.php">MOM Services</a></li>
                    <li><div class="dropdown">
   </ <button class="dropbtn"><a>Marketing Services</a> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../webappdevelop.php">Web Application Development</a>
      <a href="../webdesign.php">web Design</a>
      <a href="#">E - Commerces</a>
      <a href="#">Mails And Messages</a>
    </div>
  </div> </li>
 
                    <li><a href="../../../../index.html">Home</a></li>
                    <li><a href="services_logout.php">Log Out</a></li>
                    <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li>
                </ul>
            </div>
        </div>

       
            <div class="content">
            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        
                         <br>
                         <br>
                         </br>
                         <h2>Enterprener's Email :  <?php   echo $Email;  ?></h2>
<div class="table-wrapper">

    <table class="fl-table">
        <thead>
        
        <tr>
            <th>Mentor Email</th>
            <th>Investors Email</th>
            <th>Other Email</th>
            <th>MOM file</th>
            <th>Commentfile</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php
 
$sql = "SELECT * FROM mom WHERE  Entrepreneur_email  = '$Email'";

$result = $db->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
 ?>
        <tr>
            <td><?php  echo $row['Mentor_email']; ?></td>
            <td><?php echo$row['Email_use_investors']; ?></td>
            <td><?php  echo $row['other_email'];  ?></td>
            <td>
            <a target="_blank" href="membersinfo/<?php echo $row['Entrepreneur_email']; ?>\<?php echo $row['MOM_file']; ?>?edit=<?php echo $row['MOM_file']; ?>" class="edit_btn" ><?php echo $row['MOM_file']; ?></a>
           </td>
            <td><?php  echo $row['commentfile']; ?></td>
            <td><?php  echo $row['date']; ?></td>
        </tr>
        <?php  } ?>
        
    </table>
    <?php
} 
$conn->close();
?>
</div>
                                
                                    </div>
                                    </br>
</div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </main>
    </div>
</body>

</html>