<?php include 'header.php'; ?>
<div class="map"></div><br/><br/>
 <div class="mdl-grid">
    <section class="mdl-cell mdl-cell--10-col mdl-cell--1-offset align-centered mdl-shadow--2dp">
    <h2>Floor Plan</h2>
		Not sure where to find a room?</br>
		Use the handy maps below to find your way around.<br/>
            
    <form id="bookingForm" method="post"> 
       <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--7-col align-centered">
            <label for="room">Floor:</label></br>
    		<p>You can view the floor map from the dropdown below.</p>
            
            <select id="mapList" name="mapList" autofocus required onchange="document.getElementById('mapImage').src = this.value">
              <option value="../images/floors/map.jpg">Select a floor</option>
              <option value="../images/floors/ground-floor.jpg">Ground Floor</option>
              <option value="../images/floors/1st-floor.jpg">Floor 1</option>
              <option value="../images/floors/2nd-floor.jpg">Floor 2</option>
              <option value="../images/floors/3rd-floor.jpg">Floor 3</option>
              <option value="../images/floors/4th-floor.jpg">Floor 4</option>
            </select>
            
          </div>
        </div><!-- row end -->
        <input type="submit" form"form-changeMap" id="btn-changeMap" name="btn-changeMap" value="Complete" class="hidden"/>
          <!-- <a href="https://teamprojectgroupi-elmobai.c9users.io/room.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add a New Room</a> -->
        </form>

    <div class="mdl-cell mdl-cell--6-col align-centered">
		<div class="room">
        	 <img class="photo" id="mapImage" src="../images/floors/map.jpg" alt="Please contact a system administrator if you see this"/>
        </div>
<div class="clearfix"></div><br/><br/>
    </section>
</div>
<?php include 'footer.php'; ?>