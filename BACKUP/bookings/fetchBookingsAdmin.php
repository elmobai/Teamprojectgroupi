<?php
  include_once '../api/DbBookings.php';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $search_output = "";
  
  $db = new DbBookings();
  
  $result = $db->viewBookingsAdmin();
  if($result != false){
    $result = json_encode($result);
  }else{
    echo "Server error, please contact server administrator";
  }
  
?>
<!--<h1> SELECT SOMETHING </h1>
<form action='<?php /*echo $_SERVER['PHP_SELF'];*/ ?>' method='post' name='form_filter' >

    <select name="value">
        <option value="all">All</option>
        <option value="Fitzgerald">Fitzgerald</option>
        <option value="Herring">Herring</option>
    </select>
	
    <br />
	
    <input type='submit' value = 'Filter'>

</form>-->

<!-- My Bookings -->
<section class="login-register"> 
    <!-- Heading --> 
  <form name="search_form" method="POST" action="display_viewBookings.php">
  
  </form>
    <!--
    <h2>Bookings</h2>
    <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><span aria-hidden="true" class="arrow_carrot-up_alt2" ></span> Book a Room</a></p>
    -->
<!-- End Heading --> 
   <table id="mytable" class="footable mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp full-width">
     <thead>
        <tr>
          <th data-sort-initial="descending" >Room</th>
<!--      <th data-sort-initial="descending" colspan='3' class='mdl-data-table__cell--non-numeric'>Details</th> -->
          <th data-sort-initial="ascending"  >Capacity</th>
<!--      <th data-sort-initial="ascending" colspan='3' class='mdl-data-table__cell--non-numeric'>Capacity</th> -->
          <th >Date</th>
          <th data-sort-initial="ascending" data-type="numeric" >Time</th>
          <th data-sort-initial="descending" >User</th>
        </tr> 
      </thead>
      <tbody>
        
        <!-- Show only bookings -->
      <!-- Filter - only show bookings for the logged-on user -->
        
          <?php 
          $res = json_decode($result, true);
          foreach($res as $item)
           //foreach element in $arr
              echo "
              <tr>
                <td >".$item['ROOM']."</td>
                <td >".$item['CAPACITY']."</td>
                <td >".$item['DATE']."</td>
                <td >".$item['TIME']."</td>
                <td >".$item['USER']."</td>
              </tr>
                "

            ?>
            
          </tbody>
        </table>
     <!-- End Available Rooms Table -->
</section>
        
              
<!--      where (($_SESSION['user'])=="user") -->
<!--      where (($_SESSION['user'])==.$item['user'].") -->
<!--     //if (($_SESSION['user'])!="user")
        //$query = "SELECT * FROM bookings WHERE user_id= 'registered.user_id' ";
        //$query = "SELECT * FROM bookings WHERE prod_price = 49"; -->
        <!-- $res = json_decode($result, true);
        foreach($res as $item)
        { //foreach element in $arr
            echo "
            <tr>
              <td  colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['ROOM']."</td>
              <td  colspan='3' class='mdl-data-table__cell--non-numeric'>".$item['CAPACITY']."</td>
              <td colspan='6' class='mdl-data-table__cell--non-numeric'>".$item['DATE']."</td>
              <td colspan='6' class='mdl-data-table__cell--numeric'>".$item['TIME']."</td>
            </tr>
            ";//etc-->
        
<!-- End My Bookings -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="../js/footable.js" type="text/javascript"></script>
<script src="../js/footable.sort.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
		$('.footable').footable({
            breakpoints: {
            mamaBear: 1200,
            babyBear: 600
            }
        });
	});
</script>
