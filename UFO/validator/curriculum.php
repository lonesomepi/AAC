<?php
  require("include/functions.php");

  // if (!isset($_POST['formTwo'])) {
  //   redirectTo("index.php");
  // }

 	$thisPage = "3";
  $submitted = 0;
  $page = "curriculum";
	require_once("include/header.php");
?>

  <form action="requirements.php" method="post">

		<section>

		  <h2><span class="orange"><?php echo $thisPage; ?>.</span> Curriculum:</h2>

		  <p>Please note the degree options available in UF Online compared to UF residential:</p>

		  <table>
        <thead>
  		    <tr>
  		      <th colspan="5" class="center">CLAS Major Comparisons</th>
  		    </tr>
  		    <tr>
  		      <th>Major</th>
  		      <th id="majorBlue">UF Residential</th>
  		      <th id="majorOrange">UF Online</th>
  		    </tr>
        </thead>
        <tbody>
  		    <tr>
  		      <td>Anthropology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_BS/" target="_blank">BS or BA</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/APY_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Biology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_BS/" target="_blank">BS or BA</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/BIO_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Computer Science</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS/" target="_blank">BS</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CSC_BS_UFO/" target="_blank">BS</a></td>
  		    </tr>
  		    <tr>
  		      <td>Criminology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA/" target="_blank">BA</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/CRI_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Geography</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_BS/" target="_blank">BA or BS</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GPY_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Geology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_BS/" target="_blank">BS or BA</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/GLY_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Psychology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BS_BS01/" target="_blank">BS</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/PSY_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
  		    <tr>
  		      <td>Sociology</td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA/" target="_blank">BA</a></td>
  		      <td><a href="https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/SOC_BA_UFO/" target="_blank">BA</a></td>
  		    </tr>
        </tbody>
		  </table>


      <input type="submit" name="formThree" value="<?php echo $acknowledge; ?>">
		</section>
  </form>

  <?php require_once("include/footer.php"); ?>
