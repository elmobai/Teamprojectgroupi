<?php
  include_once '../api/DbBookings.php';
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  $search_output = "";
  
  $db = new DbBookings();
  
  $result = $db->viewBookings();
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
          <th data-sort-initial="true" >Room</th>
          <th data-sort-initial="true" >Capacity</th>
          <th data-sort-initial="true" >Details</th>
          <th data-sort-initial="true" >Date</th>
          <th data-sort-initial="true" data-type="numeric" >Time</th>
        </tr> 
      </thead>
      <tbody>
        
        <!-- Show only bookings -->
      <!-- Filter - only show bookings for the logged-on user -->
              <?php
                  $user_id = $_SESSION['user'];
                  $sql = "SELECT * from bookings WHERE user = '$user_id'";
                  $query = mysql_query($sql) or die(mysql_error());
              ?>
        
              <?php 
              $res = json_decode($result, true);
              foreach($res as $item); //foreach element in $arr
              while ($row = mysql_fetch_array($query)) {?>
              
              <tr>
                <td ><?php echo $row['ROOM'];?></td>
                <td ><?php echo $row['CAPACITY'];?></td>
                <td ><?php echo $row['REQUIREMENTS'];?></td>
                <td ><?php echo $row['DATE'];?></td>
                <td ><?php echo $row['TIME'];?></td> 
              </tr>
              
                <?php } ?>
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
