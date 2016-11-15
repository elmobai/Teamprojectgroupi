<?php include 'header.php',; ?>

<div class="container">
  <h1>Clubs</h1>
  <div id="clubs" class="row">
    <div id="map" class="col-sm-4 dark">
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d152451.5479655355!2d-6.317805543106412!3d53.342263823131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sarchery+clubs+ireland!5e0!3m2!1sen!2sie!4v1477386999783" width="" height="" frameborder="0" style="border:0" padding="10px" allowfullscreen></iframe></p>
    </div>
 
    <div id="filterclub" class="col-sm-4 light">
      <h3>Filter</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    
    <div id="results" class="col-sm-4 dark">
      <h3>Results</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<div class="container">
  <h1>My Stats</h1>
  <div id="my Stats" class="row">
    <div id="target" class="col-sm-4 light">
    
      <h3>Scores</h3>
      <p>Please enter score below</p>
      <br>
       <label for="Score 1">Score1:</label><br/>
              <input type="text" name="Score1" required="" placeholder="Enter Score1" />
       <label for="Score 2">Score2:</label><br/>
              <input type="text" name="Score2" required="" placeholder="Enter Score2" />
       <label for="score 3">Score3:</label><br/>
              <input type="text" name="Score3" required="" placeholder="Enter Score3" />
        <label for="score 4">Score4:</label><br/>
              <input type="text" name="Score4" required="" placeholder="Enter Score4" />
       <label for="score 5">Score5:</label><br/>
              <input type="text" name="Score5" required="" placeholder="Enter Score5" />      
      
      <button type="btn-scoreSubmit " name="btn-scoreSubmit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">btn-scoreSubmit </button></br></br>
    </div>
  
    <div id="filterstat" class="col-sm-4 dark">
      <h3>Filter</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    
    <div id="graph" class="col-sm-4 light">
      <h3>Graph</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    
  </div>
  
</div>

<div class="container">
   <h1>Edit Stats</h1>
   <div id="editstats" class="row">
   <div class="col-sm-12 dark">
      <h3>Input Stats</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>