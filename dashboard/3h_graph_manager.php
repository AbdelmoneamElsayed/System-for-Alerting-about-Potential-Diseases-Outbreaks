<!DOCTYPE html>
<html lang="en">


<!-- add-doctor24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="file.css">
    
</head>

<body>
    <div class="main-wrapper">
	      <div class="header">
			<div class="header-left">
				<a href="" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Disease Outbreaks </span>
				</a>
			</div>
			
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
			
                
				
                <li class="nav-item dropdown has-arrow">
                    <a href="#" >
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Manager">
							<span class="status online"></span></span>
                        <span>Manager</span>
                    </a>
                </li>
            </ul>
           
          </div>
        
        </div>
		
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                          
						 <li  class="submenu" class="active">
                            <a href="#"><i class="fa-solid fa-bacterium"></i><span>Ebola Worldwide</span><span>  </span> <span class="menu-arrow"></span></a>
							 <ul style="display: none;">
								<li><a href="index_manager.php">Graphs</a></li>
								<li><a href="map_ebol.php">Map</a></li>
							</ul>
                        </li>
						
						
						<li class="submenu">
						
							<a href="#"><i class="fa-solid fa-virus-covid"></i><span> Covid-19</span> <span>  </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							
								<li class="submenu"><a href="worldwide_covid.php">Worldwide <span>  </span> <span class="menu-arrow"></span> </a>
								   <ul style="display: none;">
								<li><a href="worldwide_covid.php">Graphs</a></li>
								<li><a href="map_covid_2.php">Map</a></li>
							    </ul>
								</li>
								<li class="submenu"><a href="worldwide_covid.php">National <span>  </span> <span class="menu-arrow"></span> </a>
								   <ul style="display: none;">
								<li><a href="national_covid.php">Graphs</a></li>
								<li><a href="map_covid_3.php">Map</a></li>
							    </ul>
								</li>
							</ul>
						</li>
						
						
						
						<li  class="submenu" class="active">
                            <a href="hospitals_2.php"><i class="fa-solid fa-hospital"></i> <span>Governorates</span> <span>  </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							
								<li><a href="hospitals_2.php">Cairo</a></li>
								<li><a href="  .html">Alexandria</a></li>
								<li><a href="  .html">Qalyubia</a></li>
								<li><a href="  .html">Gharbia</a></li>
								<li><a href="  .html">Monufia</a></li>
								<li><a href="  .html">Aswan</a></li>
								<li><a href="  .html">Asyut</a></li>
								<li><a href="  .html">Beheira</a></li>
								<li><a href="  .html">Benisuef</a></li>
								<li><a href="  .html">Dakahlia</a></li>
								<li><a href="  .html">Damietta</a></li>
								<li><a href="  .html">Faiyum</a></li>
								<li><a href="  .html">Giza</a></li>
								<li><a href="  .html">Ismailia</a></li>
								<li><a href="  .html">Kafr El Sheikh</a></li>
								<li><a href="  .html">Luxor</a></li>
								<li><a href="  .html">Matruh</a></li>
								<li><a href="  .html">Minya</a></li>
								<li><a href="  .html">New Valley</a></li>
								<li><a href="  .html">North Sinai</a></li>
								<li><a href="  .html">Port Said</a></li>
								<li><a href="  .html">Qena</a></li>
								<li><a href="  .html">Red Sea</a></li>
								<li><a href="  .html">Sharqia</a></li>
								<li><a href="  .html">Sohag</a></li>
								<li><a href="  .html">South Sinai</a></li>
								<li><a href="  .html">Suez</a></li>
							</ul>
							
							
                        </li>
                            </ul>
                        </li>
						
						
						
						
						
						 
						 
						 
						 
						
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                
	
                    <div class="row" style="margin-left:50px;">
					 <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                
                                    <div class="card-body">
                                        <div class="chart-title">
                                            <h3>Results  </h3>
                                        </div>	
                                        <iframe src="../dashboard/hos3_graph1.php" height="500" width="900" frameBorder="2222"></iframe>
                                    
                                </div>
                            </div>	
						
                    </div>
					<div class="row" style="margin-left:50px;">
					 <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                
                                    <div class="card-body">
                                        <div class="chart-title">
                                            <h3> </h3>
                                        </div>	
                                        <iframe src="../dashboard/hos3_graph2.php" height="500" width="900" frameBorder="2222"></iframe>
                                    
                                </div>
                            </div>	
						
                    </div>
					<div class="row" style="margin-left:50px;">
					 <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                
                                    <div class="card-body">
                                        <div class="chart-title">
                                            <h3></h3>
                                        </div>	
                                        <iframe src="../dashboard/hos3_graph3.php" height="500" width="900" frameBorder="2222"></iframe>
                                    
                                </div>
                            </div>	
						
                    </div>
                                
                          
                       
                    </div>
                </div>
            
			
			
			<div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- add-doctor24:06-->
</html>
