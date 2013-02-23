<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maxx Bureau</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.9.2.custom.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
        </style>
</head>
<body>
   	<div id="container">    
    	<div id="logo"><img src="images/maxxlogo.png" alt="Maxx Bureau Logo" /></div><!-- logo -->
        <div id="top_line"><img src="images/topLine.png" alt="Top Line" /></div><!-- top_line -->
        <div id="top_menu">            	
        		<a href="#" id="profile_btn"><img src="images/profile-orange.png" />Profile</a>
                <a href="#" id="rates_btn"><img src="images/rates-orange.png" />Rates</a>
                <a href="#" id="contacts_btn"><img src="images/contact-orange.png" />Contact</a>
                <a href="#" id="admin_btn"><img src="images/admin-orange.png" />Admin Panel</a>        </div>
<!-- top_menu -->
        <div id="top_banner">
        	<img src="images/leftpicHomepage.jpg" />
            <img src="images/rightpicHomepage.jpg" />
        </div><!-- top_banner -->
        <div id="content">
        	<div id="section1">
            	<div class="section_heading"> Welcome </div><!-- section_heading -->
           		<p>In this increasing competitive world, being able to constantly stay connected with the Foreign Exchange Services is becoming increasingly important. <br /><br />
Maxx Bureau De Change is making this connection easier with this online connection.<br /> <br />
Maxx will become that financial partner, so that you are better able to focus on your core business. <br /><br />
Maxx Bureau De Change with all their services are better able to; <br />
Understand Help Support and 
meet the financial needs of business people in Tanzania. 
				</p>
            </div><!--section1 -->
            <div id="section2">
            	<div class="section_heading"> Pride </div><!-- section_heading -->
                <p>Tanzania is home to many tourists because of its several beautiful landscapes and attractions. <br /><br />
Many tourists go through Tanzania to visit, the highest peak in Africa; Mount Kilimanjaro, the overflowing lakes; Victoria and Tanganyika, and the many wild life resorts like Ngorongoro and Serengeti.<br /><br />
Maxx Bureau De Change, Formerly known as Galaxy Money Changers was licensed by Bank of Tanzania to provide foreign exchange services in the year 1997 </p>
            </div><!-- section2 -->
            <div id="section3">
            	<div class="section_heading"> Services </div><!-- section_heading -->
                <p>Being one of the Leading Bureau De Changes in Tanzania, You can be sure that you will always receive ;<br /> <br />
     Real-time foreign exchange rates,<br /> <br />
     Lower commissions  &  tariffs <br /> <br />
     and High standards of service , <br /><br />
For exchange of Foreign currencies Maxx Bureau can be your solution!</p>
            </div><!-- section3 -->
        </div><!-- content -->
        <div id="contact_page">
        	<table width="785">
<tr>
                	<td align="center" valign="middle"><img src="images/contact1.png" alt="" /></td>
                  <td align="center" valign="middle"><img src="images/contact2.png" alt="" /></td>
                  <td align="center" valign="middle"><img src="images/contact3.png" alt="" /></td>
              </tr>
                <tr bgcolor="#666666">
                	<td align="center" valign="middle"><span class="style2">P.O.BOX 21219 Plot No. 567/48<br />
           	      Morogoro Rd. Samora Avenue</span></td>
                  <td align="center" valign="middle"><span class="style2">info@maxxforex.com</span></td>
                  <td align="center" valign="middle"><span class="style2">MOB: +255 713 250500<br />
                  TEL: +255 22 2119776<br />
&nbsp; &nbsp; &nbsp; &nbsp;: +255 2125385<br />
FAX: +255 22 2113458</span></td>
              </tr>
            </table>
        </div><!-- contact_page -->
        <div id="rates_page">
        	<table width="785">
  <tr>
                	<th>FLAGS</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>WE BUY</th>
                    <th>WE SELL</th>
                </tr>
                <tr>
                	<td></td>
                    <td></td>
                    <td></td>
                    <td align="center">(T.SHS)</td>
                  <td align="center">(T.SHS)</td>
                </tr>
                <tr>
                	<td align="center"><img src="images/usa.jpg" alt="USA" /></td>
                    <td>US Dollar </td>
                    <td> 
                    	US $ CASH 100's 50's<br />
                    	US $ CASH 20's 10's 5's<br />
						US $ CASH 1's<br />
						US $ TRAVELLER'S CHEQUES                    </td>
                    <td align="center" valign="top">1530</td>
                    <td align="center" valign="top">1580</td>
                </tr>
                <tr>
                  <td align="center"><img src="images/uk.jpg" alt="" /></td>
                  <td>Sterling Pounds</td>
                  <td>STG &pound; CASH<br />
					STG &pound; TRAVELLERS'S CHEQUES                    </td>
                  <td align="center" valign="top">2500</td>
                  <td align="center" valign="top">2580</td>
                </tr>
                <tr>
                  <td align="center"><img src="images/britain.jpg" alt="" /></td>
                  <td>Euro</td>
                  <td>
                  	Euro CASH &euro;<br />
                    Euro &euro; TRAVELLER'S CHEQUES					
                    </td>
                  <td align="center" valign="top">3400</td>
                  <td align="center" valign="top">3216</td>
                </tr>
            </table>
        </div><!-- rates_page -->
        <div id="admin_page">
        	<form name="login_form" id="login_form" action="includes/login_process.php" method="post">
        	<table align="center">	
            	<caption><img src="images/admin-KUBWA.png" alt="" /> Admin Panel</caption>
                <tr>
                	<th>Username:</th>
                    <td><input type="text" name="username" value="" class="input_txt" id="username_input"/></td>
                </tr>
                <tr>
                	<th>Password:</th>
                    <td><input type="password" name="password" value="" class="input_txt" id="password_input"/></td>
                </tr>
                <tr>
                	<th></th>
                    <td><button id="login_btn">Secured Login</button></td>
                </tr>
            </table>
            </form>
            <div id="info"></div>
            <div id="welcome_msg"><img src="images/welcome.png" alt="Welcome" /></div><!-- welcome_msg -->
        </div><!-- admin_page -->
        <div id="bottom_ads"><p><img src="images/bottom_ad1.png" alt="Online Rates" /></p></div><!-- bottom_ads -->
    <div id="footer"><p align="center">© Copyright  Maxx Bureau De Change 2012 ,  All Rights Reserved</p></div><!-- footer -->
    </div><!-- container -->
   <img src="images/bottomCubes.png" alt="" id="bottom_cubes"/>
</body>
</html>
