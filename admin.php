<?php
	session_start();
	include("includes/db_conn.php");
	if(!$_SESSION['username']){
		header("Location: index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maxx Bureau : Admin</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.9.2.custom.js" type="text/javascript"></script>
        <script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<div id="header">
    	<div id="user_top"><img src="images/admin_name tage.png" alt="" />Welcome <?php echo ucfirst($_SESSION['username']); ?></div><!-- user_top -->
        <div id="sign_out"><img src="images/admin_signout.png" alt="" />Sign Out</div><!-- sign_out-->
    </div><!-- header -->
   	<div id="container">    
		<div id="admin_menu">
			<a href="#" id="new_currency_btn">Add New Currency </a> |
			<a href="#" id="view_all_btn">View All Currencies </a> |
			<a href="#" id="update_rates">Update Rates </a>
			<div id="loading_icon"><img src="images/loader.gif" alt="" /></div><!-- loading_icon -->
		</div><!-- admin_menu -->
		<div id="new_currency">
			<form name="add_currency_form" action="includes/add_currency_process.php" method="post">
			<table>
                    <tr>
                    	<td>
							<select name="country" id="country_select">
								<?php
									$q = mysql_query("SELECT * FROM `countries` WHERE `value` != '' ORDER BY `countries`.`countryName` ASC");
									while($row = mysql_fetch_array($q)){
										$country_name = $row['countryName'];
										$country_value = $row['value'];
										echo"
											<option value='{$country_value}'>{$country_name}</option>
										";
									};
								?>
							</select>
						</td>
                        <td><input type="text" name="currency_name" value="Currency Name" size="15" id="currency_name_input"/></td>
						<td><input type="text" name="unit" value="Unit" size="4" id="unit_input"/></td>
						<td><input type="text" name="buy_rate" value="Buy Rate" size="8" id="buy_rate_input"/></td>
						<td><input type="text" name="sell_rate" value="Sell Rate" size="8" id="sell_rate_input"/></td>
						<td><input type="text" name="description" value="Description" id="description_input"/></td>
						<td><button name="submit" id="add_currency_process_btn">Add Currency</button></td>
                    </tr>
			</table>
			</form>
			<div id="new_currency_info"></div>
		</div><!-- new_currency -->
		<div id="all_currency">
			<form name="currency_delete_form" action="includes/delete_currency_process.php?" method="get">
			<table width="760" border="0">
				<tr>
					<th>ID</th>
					<th>Country</th>
					<th>Currency Name</th>
					<th>Unit</th>
					<th>Buy Rate</th>
					<th>Sell Rate</th>
					<th>Description</th>
					<th>Delete</th>
				</tr>
				<tr>
					<?php
						$q = mysql_query("SELECT * FROM `fxrates`");
						while($row = mysql_fetch_array($q)){
							$id = $row['id'];
							$country = $row['country'];
							$name = $row['currency_name'];
							$unit = $row['unit'];
							$buy_rate = $row['buy_rate'];
							$sell_rate = $row['sell_rate'];
							$description = $row['description'];
							echo"
								<tr>
									<td><input type='text' value='{$id}' name='id' class='id' disabled='disabled' size='4'/></td>
									<td>{$country}</td>
									<td>{$name}</td>
									<td>{$unit}</td>
									<td>{$buy_rate}</td>
									<td>{$sell_rate}</td>
									<td>{$description}</td>
									<td><a href='includes/delete_currency_process.php?id={$id}' class='delete_btn'> Delete </a></td>
								</tr>
							";
						}
					?>
				</tr>
			</table>
		  </form>
		</div><!-- all_currency -->
		<div id="update_rates">
			<form name="update_rates_form" action="includes/update_rates_process.php?" method="post">
			<table width="760" border="0">
				<tr>
					<th>ID</th>
					<th>Country</th>
					<th>Currency Name</th>
					<th>Unit</th>
					<th>Buy Rate</th>
					<th>Sell Rate</th>
					<th>Description</th>
					<th>Update</th>
				</tr>
				<tr>
				<?php
						$q = mysql_query("SELECT * FROM `fxrates`");
						while($row = mysql_fetch_array($q)){
							$id = $row['id'];
							$country = $row['country'];
							$name = $row['currency_name'];
							$unit = $row['unit'];
							$buy_rate = $row['buy_rate'];
							$sell_rate = $row['sell_rate'];
							$description = $row['description'];
							echo"
								<tr>
									<td><input type='text' value='{$id}' name='id' class='id' disabled='disabled' size='4'/></td>
									<td>{$country}</td>
									<td>{$name}</td>
									<td><input type='text' name='unit' value='{$unit}' size='4' class='unit' /></td>
									<td><input type='text' name='buy_rate' value='{$buy_rate}' size='4' class='buy_rate' /></td>
									<td><input type='text' name='sell_rate' value='{$sell_rate}' size='4' class='sell_rate' /></td>
									<td><input type='text' name='description' value='{$description}' size='30' class='description'/></td>
									<td><a href='includes/update_rates_process.php?id={$id}' class='update_rate_btn'> Update </a></td>
								</tr>
							";
						}
					?>
				</tr>
			</table>
		  </form>		
		</div><!-- update_rates -->
		<div id="footer"><p>© Copyright  Maxx Bureau De Change 2012 ,  All Rights Reserved</p>
	  </div><!-- footer -->
    </div><!-- container -->
   <img src="images/bottomCubes.png" alt="" id="bottom_cubes"/>
</body>
</html>
