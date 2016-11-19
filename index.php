<!-- no need to add the <html> or <body> they are included in the header which is inserted below this comment -->
<?php include 'header.php'; ?>


<!-- Start panel 1-->
<div class="features mdl-shadow--2dp">
<div class="container headerBg">
	<!-- row start -->
	<div class="mdl-grid fadelight panel2">
		<div class="mdl-cell--1-offset"></div>
		<!-- column start -->
		<div class="mdl-cell mdl-cell--3-col panels  mdl-shadow--2dp">
			<div class="inner align-centered overlay">
				<h4>Login</h4>
				<p>Login now to book a room within NCI!</p>
				<div class="align-centered">
					<a href="login.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span>Login</a>
				</div>	
			</div>
		</div><!-- column end -->
		
		<!-- column start -->
		<div class="mdl-cell mdl-cell--3-col panels  mdl-shadow--2dp">
			<div class="inner align-centered overlay">
				<h4>Book a room</h4>
				<p>Book your favourite rooms within the college!</p>
				<div class="align-centered">
					<a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Make Booking</a>
				</div>
			</div>
		</div><!-- column end -->
		
		<!-- column start -->
		<div class="mdl-cell mdl-cell--3-col panels  mdl-shadow--2dp">
			<div class="inner align-centered overlay">
				<h4>View your bookings</h4>
				<p> View bookings that you have made!      </p>
				<div class="align-centered">
					<a href="bookings/bookingmanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> View Bookings</a>
				</div>
				<!-- Primary-colored flat button -->
				<!-- <a href="booking.php" class="mdl-button mdl-js-button mdl-button--primary"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span>Learn More</a>-->
			</div>
		</div><!-- ./column end -->
	
	</div><!-- ./container end -->
</div><!-- features end -->

<!-- view bookings start -->
<div class="mdl-grid panel2">
	<!-- empty grid helps center the table -->
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<!-- Table is included via php into this middle column -->
		<?php include 'bookings/fetchRooms.php';?>
	</div>
	<!-- empty grid helps center the table -->
	<div class="mdl-cell mdl-cell--2-col"></div>
</div><!-- ./View Bookings end -->

<!-- Start panel-->
<div class="panel2 promo mdl-shadow--2dp">
	<!-- container start -->
	<div class="container fadedark">
		<div class="inner intro">
			<h3>Productivity starts here</h3>
			<p>Click the 'get started' button to create an account and begin booking rooms!</p>
			<a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
				<span aria-hidden="true" class="arrow_carrot-up_alt2"></span> 
			Get Started</a>
		</div>
	</div><!-- container end -->
</div><!-- ./Start Panel end -->

<?php include 'footer.php'?>
