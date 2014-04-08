<?php require_once('lib/helpers/form_helpers.php'); ?>
<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Order Forms</title>
	<link rel="stylesheet" href="http://docplus.net/wp-content/themes/Zeus/styles/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div id="form_wrapper">
	<!-- http://docplus.net/wp-content/themes/Zeus/order_forms.php -->
	<form id="order_forms" name="orders" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div id="top" class="clearfix">
			<div class="left">
				<h4>Who Are You</h4>
				<input name="email" id="email" placeholder="Email" type="email" required autofocus>
				<label for="tracking">Send Tracking Information <input name="tracking" type="checkbox" id="tracking" value="Y" checked=""></label>
				<input name="account" placeholder="account" type="text">
				<input name="phone" placeholder="phone number" type="text">
				<input name="who_ordered" placeholder="name of person placing order" type="text">
				<input name="order_date" placeholder="order date" type="text">
			</div><!-- .left -->
			<div class="middle">
				<h4>Additional Items</h4>
				<label for="training_dvd"><input type="checkbox" name="training_dvd" id="training_dvd"> Training DVD</label>
				<label for="user_manual"><input type="checkbox" name="user_manual" id="user_manual"> Users Manual</label>
				<label for="information_book"><input type="checkbox" name="information_book" id="information_book"> Information Booklet</label>
				<label for="growth_dvd"><input type="checkbox" name="growth_dvd" id="growth_dvd"> How To Grow Your Practice</label>
				<label for="software_upgrade"><input type="checkbox" name="software_upgrade" id="software_upgrade"> Sorftware Upgrade</label>
				<input type="text" name="other" id="other" placeholder="other">
			</div><!-- .middle -->
			<div class="right">
				<h4>Welcome</h4>
				In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed.
			</div><!-- .right -->
		</div><!-- #top -->
	    <table id="quatity_table">
	    	<tr class='even'>
	    		<td>Form Name</td>
	    		<td>Form Code</td>
	    		<td>Description</td>
	    		<td>Quantity / Price</td>
	    		<td>Order Quantity</td>
	    	</tr>
	    	<tr>
	    		<td>1 paged / 2 sided</td>
	    		<td>HQ0b</td>
	    		<td>Health Questionnaire I </td>
	    		<td>50 / $60.00</td>
	    		<td><?php echo generateDropdown('HQ0b', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>4 paged / folder style</td>
	    		<td>HQ2</td>
	    		<td>Health Questionnaire II </td>
	    		<td>50 / $70.00</td>
	    		<td><?php echo generateDropdown('HQ2', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>4 paged / folder</td>
	    		<td>HQ3</td>
	    		<td>Health Questionnaire III </td>
	    		<td>50 / $73.00</td>
	    		<td><?php echo generateDropdown('HQ3', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>8 paged / CE &amp; RE</td>
	    		<td>CE3a</td>
	    		<td>Clinical Evaluation III</td>
	    		<td> 50 / $85.00</td>
	    		<td><?php echo generateDropdown('CE3a', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>4 paged / folder style</td>
	    		<td>CE2</td>
	    		<td>Clinical Evaluation II</td>
	    		<td>50 / $70.00</td>
	    		<td><?php echo generateDropdown('CE2', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>4 paged / folder style</td>
	    		<td>RE2</td>
	    		<td>Re-Evaluation II</td>
	    		<td>50 / $70.00</td>
	    		<td><?php echo generateDropdown('RE2', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>1 paged / 2 sided</td>
	    		<td>RD</td>
	    		<td>Radiographic Evaluation</td>
	    		<td>50 / $60.00</td>
	    		<td><?php echo generateDropdown('RD', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>1 paged / 2 sided</td>
	    		<td>RD2</td>
	    		<td>Radiographic Evaluation II</td>
	    		<td>50 / $65.00</td>
	    		<td><?php echo generateDropdown('RD2', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>1 paged</td>
	    		<td>AA0a</td>
	    		<td>Automobile Accident Questionnaire</td>
	    		<td>50 / $60.00</td>
	    		<td><?php echo generateDropdown('AA0a', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>4 paged / folder style</td>
	    		<td>AI2</td>
	    		<td>Accident Injury Questionnaire</td>
	    		<td>50 / $70.00</td>
	    		<td><?php echo generateDropdown('AI2', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>4 visit / page</td>
	    		<td>DN2a</td>
	    		<td>Daily SOAP Note</td>
	    		<td>200 / $86.00</td>
	    		<td><?php echo generateDropdown('DN2a', $id = null); ?></td>
	    	</tr>
	    	<tr class='even'>
	    		<td>1 visit / page</td>
	    		<td>DN3d</td>
	    		<td>Daily Note Travel Card</td>
	    		<td> 500 / $95.00</td>
	    		<td><?php echo generateDropdown('DN3d', $id = null); ?></td>
	    	</tr>
	    	<tr>
	    		<td>1 visit / page</td>
	    		<td>DN4</td>
	    		<td>CBP Travel Card</td>
	    		<td> 500 / $95.00</td>
	    		<td><?php echo generateDropdown('DN4', $id = null); ?></td>
	    	</tr>
	    </table>

	    <input type="submit" name="submit" value="Place Order">
	</form>
</div><!-- #form_wrapper -->
</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$items 		= processPostData($_POST);
	$message 	= formatMailMessage($items);
	//d($message);
}