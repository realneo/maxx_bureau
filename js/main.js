$(document).ready(function(){
	$('#container').animate({'height':'600px'},4000);
	$('#top_line').slideDown(500);
	$('#logo').delay(1000).slideDown(1000);
	$('#top_menu').delay(2000).slideDown();
	$('#top_banner').delay(2500).slideDown();	
	$('#content').delay(3000).slideDown();
	$('#section1').delay(3500).slideDown();
	$('#section2').delay(4000).slideDown();
	$('#section3').delay(4500).slideDown();
	$('#bottom_ads').delay(5000).fadeIn();
	$('#footer').delay(5500).slideDown();
	$('#container').delay(6000).css('height','auto');
	
	// Contact Page Animation
	$('#contacts_btn').click(function(){
		$('#content').slideUp(1000);
		$('#rates_page').slideUp(1000);
		$('#admin_page').slideUp(1000);
		$('#contact_page').delay(1000).slideDown(1000);
		$('#container').css('height','auto');
	});
	
	// Profile Page Animation
	$('#profile_btn').click(function(){
		$('#contact_page').slideUp(1000);
		$('#rates_page').slideUp(1000);
		$('#admin_page').slideUp(1000);
		$('#content').delay(1000).slideDown(1000);
		$('#container').css('height','auto');
	});
	
	// Rates Page Animation
	$('#rates_btn').click(function(){
		$('#contact_page').slideUp(1000);
		$('#content').slideUp(1000);
		$('#admin_page').slideUp(1000);
		$('#rates_page').delay(1000).slideDown(1000);
		$('#container').css('height','auto');
	});
	
	// Admin Page Animation
	$('#admin_btn').click(function(){
		$('#contact_page').slideUp(1000);
		$('#content').slideUp(1000);
		$('#rates_page').slideUp(1000);
		$('#admin_page').delay(1000).slideDown(1000);
		$('#container').css('height','auto');
	});
	
	// Admin Login Form
	// Checking if both Username & Password have values
	$('#login_btn').click(function(){
		if($('#username_input').val() == "" || $('#password_input').val() == ""){
			$('#info').html("Please Enter BOTH Username & Password Before Proceeding");
		}else{
			var form_action = $('#login_form').attr('action');
			var form_data = {
				username : $('#username_input').val(),
				password : $('#password_input').val(),
				is_ajax : 1
			};
			$.ajax({
				type:'post',
				url: form_action,
				data: form_data,
				success: function(response){
					if(response == "success"){
						$('#info').html('Welcome! You will be directed to a secured Admin Area.').css('color','green').fadeIn(400);
						$('#info').delay(1000).slideUp(1000);
						$('#admin_page table').delay(2000).fadeOut(1000);
						$('#welcome_msg').delay(3000).slideDown(1000);
						setTimeout(function() {window.location.href = "admin.php"}, 5000);
					}else{
						$('#info').html('Sorry! Only authorized pesonel allowed.').css('color','red').fadeIn(400);
						$('#info').delay(4000).fadeOut(1000);
					}
				}
			});
		return false;
		};
	});
	// Logout Button
	$('#sign_out').click(function(){
		$.ajax({
			url:"includes/logout_process.php",
			success: function(response){
				$('#container').fadeOut(1000)
				setTimeout(function(){window.location.href = "index.php"}, 2000);
			}
		});
	});
	// Add New Currency Button 
	$('#new_currency_btn').click(function(){
		$('#new_currency').slideDown(500);
		$(this).css('font-weight','bold');
		$('#all_currency').slideUp(400);
		$('#view_all_btn').css('font-weight','normal');	
	});
	// Input General Animation
	$('input').focus(function(){
		input_value = $(this).val();
		$(this).val("");
	});
	$('input').focusout(function(){
		if(!$(this).val()){
			$(this).val(input_value);		
		}
	});	
	// Add New Currency Submit
	$('#add_currency_process_btn').click(function(){
		$('#loading_icon').fadeIn(100);
		var add_currency_form_data = {
			country : $('#country_select').val(),
			currency_name : $('#currency_name_input').val(),
			unit : $('#unit_input').val(),
			buy_rate : $('#buy_rate_input').val(),
			sell_rate : $('#sell_rate_input').val(),
			description : $('#description_input').val(),
			is_ajax : 1
		}
		$.ajax({
			type:'post',
			url:'includes/add_currency_process.php',
			data:add_currency_form_data,
			success:function(response){
				$('#new_currency_info').html("Successfully Added a New Currency");
				$('#new_currency_info').slideDown(400);
				$('#new_currency_info').delay(2000).slideUp(400);
				$('#loading_icon').fadeOut(200);
			}
		});
		return false;
	});
	// Open All Currency Div
	$('#view_all_btn').click(function(){	
		$('#all_currency').slideDown(500);
		$(this).css('font-weight','bold');
		$('#new_currency').slideUp(400);
		$('#new_currency_btn').css('font-weight','normal');		
	});
	// Selecting TR items of the Currency List
	$('#all_currency tr').mouseover(function(){
		$(this).css('background-color','#ccc');
	});
	$('#all_currency tr').mouseout(function(){
		$(this).css('background-color','#fff');
	});
	// Popup Aleart Box for Deleting Currency
	$('.delete_btn').click(function(){
		if(confirm("Are you sure you want to delete this item?") == true){
			return true;
		}else{
			return false;
		}
	});
	// Update Rates Process
	$('.update_rate_btn').click(function(){
		$('#loading_icon').fadeIn(200);
		var update_rates_data = {
			id: window.location.hash,		
			unit : $('.unit').val(),
			buy_rate : $('.buy_rate').val(),
			sell_rate : $('.sell_rate').val(),
			description : $('.description').val()
		}
		console.log(update_rates_data);
		return false;
	});
});