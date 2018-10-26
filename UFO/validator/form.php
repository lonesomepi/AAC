<?php
  require("include/functions.php");
  $page = "statement";
 	$thisPage = "5";
  $submitted = 0;
  require_once("include/glid.php");
  require_once("include/email.php");
	require_once("include/header.php");
?>
      <h2><span class="orange"><?php echo $thisPage; ?>.</span> Statement</h2>

      <section>
        <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

          <div style="display: none;">
            <input type="text" name="Student's Name" value="<?php echo $nameGiven; ?>">
            <input type="text" name="UF ID" value="<?php echo $UFID; ?>">
            <input type="text" name="Email" value="<?php echo $email; ?>">
          </div>

          <p>Please indicate your desired UF College of Liberal Arts and Sciences Online major:</p>
          <select required id="selectMajor" name="major">
            <option disabled selected value="">Please select a major</option>
            <option value="anthropology">Anthropology</option>
            <option value="biology">Biology</option>
            <option value="computerScience">Computer Science</option>
            <option value="criminology">Criminology</option>
            <option value="geography">Geography</option>
            <option value="geology">Geology</option>
            <option value="psychology">Psychology</option>
            <option value="sociology">Sociology</option>
          </select>
          <textarea required id="writtenResponse" name="writtenResponse" placeholder="Please explain why you are unable to remain in our current residential program." tabindex="3"></textarea>
          <p>If you would like to upload any supporting documentation to email to an advisor:</p>

          <fieldset >

          <input type='hidden' name='submitted' id='submitted' value='1'/>
          <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
          <!-- <input type='text'  class='spmhidip' name='<?php //echo $formproc->GetSpamTrapInputName(); ?>' /> -->


          <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>

          <label for='photo'>Upload a document. It <em>must</em> be 2MB or less. We accept only PNG, PDF, JPG, GIF, or DOCX.</label> <span id='contactus_photo_errorloc' class='error'></span><br/>
          <input type="file" name='photo' id='photo' tabindex="4"/><br/>

          <input type='submit' name='Submit' value='submit this information' tabindex="5" />
          <input style="display: none;" type="text" name="Date subitted" value="<?php echo $date_auto; ?>">


      </div>
    </form>

<?php require_once("include/footer.php"); ?>
