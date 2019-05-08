<?php
  $application = "Career Changers";
  require_once("include/aHeader.php");
  require_once("include/formInfo.php");
?>

      <header>
        <nav>
          <ul>
            <li><a href="index.php" target="_blank">PHPB</a></li>
            <li><a href="courses-change.php" target="_blank">Career Changers</a></li>
            <li><a href="courses-restart.php" target="_blank">ReStart Program</a></li>
            <li><a href="courses.php" target="_blank">Course Information</a></li>
            <li><a href="advising.php" target="_blank">Contact Us</a></li>
            <li><a href="http://www.clas.ufl.edu/" target="_blank">UF CLAS</a></li>
            <div class="clear"></div>
          </ul>
        </nav>
      </header>

      <div id="content">

        <h1>Application: Career Changer</h1>
        <div class="freeGraphs">
          <p>The form is interactive. Please fill it out and hit submit when finished.</p>
          <p><b>or</b></p>
          <p>If you wish to print the form, please download it: <a href="docs/CareerChanger.pdf" target="_blank" tabindex="1"><b>here</b></a></p>
        </div><!-- free graphs -->

        <section id="firstSection">
          <h2 id="formHeader">PHPB Career Changer Application</h2>
          <img id="phpbLogo" src="image/phpb.png" alt="PHPB Logo">
          <div class="clear"></div>
          <!-- start form -->
          <form action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
            <p>Full name<b>&#42;</b></p>
            <input required type="text" name="name" placeholder="First Middle Last" tabindex="2">
            <h3>About You</h3>
            <h4>Area of Study:</h4>
            <div class="checkBoxes">
              <input type="checkbox" name="predental_study" value="selected_predental">
              <label for="">Pre-Dental</label>
              <input class="clear" type="checkbox" name="premedical_study" value="selected_premedical">
              <label for="">Pre-Medical</label>
              <input class="clear" type="checkbox" name="preveterinary_study" value="selected_preveterinary">
              <label for="">Pre-Veterinary</label>
              <input class="clear" type="checkbox" name="other_study" value="otherExperience">
              <label for="other_study">Other</label>
              <div class="clear"></div>
              <p>If other, please indicate:</p>
              <input id="textInput" type="text" name="other_previous_experience" value="">
              <div class="clear"></div>
            </div><!-- checkbox floats -->


            <p>Year of Entry:</p>
            <input type="text" name="year_of_entry" value="">
            <p>If you attend UF, please indicate your UF ID#:</p>
            <input type="text" name="UF_ID" value="">
            <!-- <p>First Name:</p>
            <input type="text" name="first_name" value="">
            <p>Middle Name:</p>
            <input type="text" name="middle_name" value="">
            <p>Last Name:</p>
            <input type="text" name="last_name" value=""> -->
            <p>Name Suffix:</p>
            <input type="text" name="suffix_name" placeholder="Jr; Sr; II; III;" value="">
            <p>Other names used:</p>
            <input type="text" name="other_names" value="">
            <p>Sex:</p>
            <input type="text" name="sex" value="">
            <p>Date of Birth:<b>&#42;</b></p>
            <input required type="text" name="date_of_birth" value="">
            <p>City of Birth:</p>
            <input type="text" name="city_of_birth" value="">
            <p>State of Birth:</p>
            <input type="text" name="state_of_birth" value="">
            <p>Country of Birth:</p>
            <input type="text" name="country_of_birth" value="">
            <p>Primary Citizenship:</p>
            <input type="text" name="citizenship" value="">
            <div class="clear"></div>

            <p>Do you have dual citizenship:</p>
            <div class="binaryBoxes">
              <input class="cba" onchange="cbChangeA(this)" type="checkbox" name="yes_dual_citizenship" value="">
              <p>Yes</p>
              <input class="cba" onchange="cbChangeA(this)" type="checkbox" name="no_dual_citizenship" value="">
              <p>No</p>
              <div class="clear"></div>
            </div><!-- binary boxes -->

            <p>Are you a permanent US resident:</p>
            <div class="binaryBoxes">
              <input class="cbb" onchange="cbChangeB(this)" type="checkbox" name="yes_permanent_resident" value="">
              <p>Yes</p>
              <input class="cbb" onchange="cbChangeB(this)" type="checkbox" name="no_permanent_resident" value="">
              <p>No</p>
              <div class="clear"></div>
            </div><!-- binary boxes -->
            <div class="clear"></div>
          </section>

          <section>
            <h3>Contact Info</h3>
            <h4>Mailing Address</h4>
            <p>Street: <b>&#42;</b></p>
            <input required class="longWidthInput" type="text" name="street_address" value="">
            <p>City: <b>&#42;</b></p>
            <input required type="text" name="city_mailing" value="">
            <p>State: <b>&#42;</b></p>
            <input required type="text" name="state_mailing" value="">
            <p>Country: <b>&#42;</b></p>
            <input required type="text" name="country_mailing" value="">
            <p>Zip: <b>&#42;</b></p>
            <input required type="text" name="zip_mailing" value="">
            <h4>Permanent Address <i>(if different from Mailing Address)</i></h4>
            <p>Street:</p>
            <input class="longWidthInput" type="text" name="street_permanent" value="">
            <p>City:</p>
            <input type="text" name="city_permanent" value="">
            <p>State:</p>
            <input type="text" name="state_permanent" value="">
            <p>Country:</p>
            <input type="text" name="country_permanent" value="">
            <p>Zip:</p>
            <input type="text" name="zip_permanent" value="">
            <p>Email address: <b>&#42;</b></p>
            <input required type="text" name="email" value="">
            <p>Home Phone:</p>
            <input type="text" name="phone_home" value="">
            <p>Mobile Phone:</p>
            <input type="text" name="phone_mobile" value="">
            <p>Work Phone:</p>
            <input type="text" name="phone_work" value="">
            <div class="clear"></div>
          </section>

          <section>
            <h3>Evaluators</h3>
            <p><i>Two evaluations are required</i></p>
            <p>Evaluators will be asked to complete an evaluation form via email. They do not need to write or send a letter of evaluation.</p>
            <p>Evaluators may be any non-family member who knows you in an academic or professional capacity.</p>
            <h4>Evaluator No. 1</h4>
            <p>Name: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_name" value="">
            <p>Street: <b>&#42;</b></p>
            <input required class="longWidthInput" type="text" name="evaluator_one_street" value="">
            <p>City: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_city" value="">
            <p>State: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_state" value="">
            <p>Zip: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_zip" value="">
            <p>Phone: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_phone" value="">
            <p>Email: <b>&#42;</b></p>
            <input required type="text" name="evaluator_one_email" value="">

            <h4>Evaluator No. 2</h4>
            <p>Name: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_name" value="">
            <p>Street: <b>&#42;</b></p>
            <input required class="longWidthInput" type="text" name="evaluator_two_street" value="">
            <p>City: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_city" value="">
            <p>State: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_state" value="">
            <p>Zip: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_zip" value="">
            <p>Phone: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_phone" value="">
            <p>Email: <b>&#42;</b></p>
            <input required type="text" name="evaluator_two_email" value="">
            <div class="clear"></div>
          </section>

          <section>
            <h3>Educational Background: <i>Universities Attended</i></h3>
            <h4>Institution No. 01</h4>
            <p>Institution: <b>&#42;</b></p>
            <input required type="text" name="educational_background_one_institution" value="">
            <p>Major: <b>&#42;</b></p>
            <input required type="text" name="educational_background_one_major" value="">
            <p>From (date): <b>&#42;</b></p>
            <input required type="text" name="educational_background_one_start_date" value="">
            <p>To (date): <b>&#42;</b></p>
            <input required type="text" name="educational_background_one_end_date" value="">
            <p>Degree Earned:</p>
            <input type="text" name="educational_background_one_degree_earned" value="">
            <p>Date Earned/will earn:</p>
            <input type="text" name="educational_background_one_date_will_earn_degree" value="">

            <h4>Institution No. 02</h4>
            <p>Institution:</p>
            <input type="text" name="educational_background_two_institution" value="">
            <p>Major:</p>
            <input type="text" name="educational_background_two_major" value="">
            <p>From (date):</p>
            <input type="text" name="educational_background_two_start_date" value="">
            <p>To (date):</p>
            <input type="text" name="educational_background_two_end_date" value="">
            <p>Degree Earned:</p>
            <input type="text" name="educational_background_two_degree_earned" value="">
            <p>Date Earned/will earn:</p>
            <input type="text" name="educational_background_two_date_will_earn_degree" value="">

            <h4>Institution No. 03</h4>
            <p>Institution:</p>
            <input type="text" name="educational_background_three_institution" value="">
            <p>Major:</p>
            <input type="text" name="educational_background_three_major" value="">
            <p>From (date):</p>
            <input type="text" name="educational_background_three_start_date" value="">
            <p>To (date):</p>
            <input type="text" name="educational_background_three_end_date" value="">
            <p>Degree Earned:</p>
            <input type="text" name="educational_background_three_degree_earned" value="">
            <p>Date Earned/will earn:</p>
            <input type="text" name="educational_background_three_will_earn_degree" value="">

            <h4>Institution No. 04</h4>
            <p>Institution:</p>
            <input type="text" name="educational_background_four_institutions" value="">
            <p>Major:</p>
            <input type="text" name="educational_background_four_major" value="">
            <p>From (date):</p>
            <input type="text" name="educational_background_four_start_date" value="">
            <p>To (date):</p>
            <input type="text" name="educational_background_four_end_date" value="">
            <p>Degree Earned:</p>
            <input type="text" name="educational_background_four_degree_earned" value="">
            <p>Date Earned/will earn:</p>
            <input type="text" name="educational_background_four_will_earn_degree" value="">
            <div class="clear"></div>

            <h3>Educational Background: <i>Standardized Tests</i></h3>
            <p class="pushEvenRight">ACT:</p>
            <input type="text" name="standardized_tests_ACT" value="">
            <p>GMAT:</p>
            <input type="text" name="standardized_tests_GMAT" value="">
            <p class="pushEvenRight">GRE:</p>
            <input type="text" name="standardized_tests_GRE" value="">
            <p>MCAT:</p>
            <input type="text" name="standardized_tests_MCAT" value="">
            <p class="pushEvenRight">SAT:</p>
            <input type="text" name="standardized_tests_SAT" value="">
            <p>TOEFL:</p>
            <input type="text" name="standardized_tests_TOEFL" value="">
            <p>Other:</p>
            <input type="text" name="standardized_tests_other" value="">
            <div class="clear"></div>
          </section>

          <section>
            <h3>Additional Information</h3>
            <p>Have you ever applied to medical/dental/veterinary medical or other healthcare programs?</p>
            <div class="binaryBoxes">
              <input class="cbc" onchange="cbChangeC(this)" type="checkbox" name="yes_previously_applied" value="">
              <p>Yes</p>
              <input class="cbc" onchange="cbChangeC(this)" type="checkbox" name="no_previously_applied" value="">
              <p>No</p>
              <div class="clear"></div>
            </div><!-- binary boxes -->
            <p>If yes, list where and when:</p>
            <input class="text longWidthInput" type="text" name="explanation_previously_applied" value="">
            <!-- <div class="clear"></div> -->
            <p>Have you ever been placed on probations, dismissed, or had an institutional action from any college or university for
              reasons pertaining to academic integrity?</p>
            <div class="binaryBoxes">
              <input class="cbd" onchange="cbChangeD(this)" type="checkbox" name="yes_probation" value="">
              <p>Yes</p>
              <input class="cbd" onchange="cbChangeD(this)" type="checkbox" name="no_probation" value="">
              <p>No</p>
              <div class="clear"></div>
            </div><!-- binary boxes -->

            <p>If yes, list where and when:</p>
            <input class="longWidthInput" type="text" name="explanation_probation" value="">

            <p>Have you ever been adjudicated guilty or convicted of a misdemeanor, felony or other crime?</p>
            <div class="binaryBoxes">
              <input class="cbe" onchange="cbChangeE(this)" type="checkbox" name="yes_convicted" value="">
              <p>Yes</p>
              <input class="cbe" onchange="cbChangeE(this)" type="checkbox" name="no_convicted" value="">
              <p>No</p>
              <div class="clear"></div>
            </div><!-- binary boxes -->
            <p>If yes, please explain:</p>
            <div class="clear"></div>
            <textarea name="explanation_conviction" rows="8"></textarea>
            <div class="clear"></div>
          </section>

          <section>
            <h3>Professional and Volunteer Experiences</h3>
            <h4>Organization One</h4>
            <p>Organization:</p>
            <input type="text" name="volunteer_experience_one_organization" value="">
            <p>Contact Person:</p>
            <input type="text" name="volunteer_experience_one_contact_name" value="">
            <p>Address:</p>
            <input class="longWidthInput" type="text" name="volunteer_experience_one_contact_address" value="">
            <p>Dates of Experiences:</p>
            <input type="text" name="volunteer_experience_one_dates" value="">
            <p>Description of Duties:</p>
            <textarea name="volunteer_experience_one_duties" rows="8"></textarea>

            <h4>Organization Two</h4>
            <p>Organization:</p>
            <input type="text" name="volunteer_experience_two_organization" value="">
            <p>Contact Person:</p>
            <input type="text" name="volunteer_experience_two_contact_name" value="">
            <p>Address:</p>
            <input class="longWidthInput" type="text" name="volunteer_experience_two_contact_address" value="">
            <p>Dates of Experiences:</p>
            <input type="text" name="volunteer_experience_two_dates" value="">
            <p>Description of Duties:</p>
            <textarea name="volunteer_experience_two_duties" rows="8"></textarea>

            <h4>Organization Three</h4>
            <p>Organization:</p>
            <input type="text" name="volunteer_experience_three_organization" value="">
            <p>Contact Person:</p>
            <input type="text" name="volunteer_experience_three_contact_name" value="">
            <p>Address:</p>
            <input class="longWidthInput" type="text" name="volunteer_experience_three_contact_address" value="">
            <p>Dates of Experiences:</p>
            <input type="text" name="volunteer_experience_three_dates" value="">
            <p>Description of Duties:</p>
            <textarea name="volunteer_experience_three_duties" rows="8"></textarea>

            <h4>Organization Four</h4>
            <p>Organization:</p>
            <input type="text" name="volunteer_experience_four_organization" value="">
            <p>Contact Person:</p>
            <input type="text" name="volunteer_experience_four_contact_name" value="">
            <p>Address:</p>
            <input class="longWidthInput" type="text" name="volunteer_experience_four_contact_address" value="">
            <p>Dates of Experiences:</p>
            <input type="text" name="volunteer_experience_four_dates" value="">
            <p>Description of Duties:</p>
            <textarea name="volunteer_experience_four_duties" rows="8"></textarea>
            <div class="clear"></div>
          </section>

          <section>
            <h3>Essays</h3>
            <p>Describe your decision to pursue a career in healthcare. What was your previous career? Explain why you decided to
              change to healthcare? What factors contributed to your decision? What do you hope to contribute to your profession
              and others through a career in healthcare? <b>&#42;</b></p>
              <textarea required name="essay_why_healthcare" rows="8"></textarea>
              <p>What are your strengths, qualities or attributes that will contribute both to your success at UF and in healthcare? <b>&#42;</b></p>
              <textarea required name="essay_qualities_strengths" rows="8"></textarea>
              <p>Why do you want to attend the UF Pre-health Post-Baccalaureate Program (PHPB)? <b>&#42;</b></p>
              <textarea required name="essay_why_interested" rows="8"></textarea>
              <p>If you think your previous grades do not reflect your academic ability please explain.</p>
              <textarea name="essay_previous_grades" rows="8"></textarea>
              <p>Is there anything else you wish the admission committee to know?</p>
              <textarea name="essay_additional_information" rows="8"></textarea>
              <p>How did you find out about Pre-Health Post-Baccalaureate Program (PHPB)?</p>
              <textarea name="essay_how_you_know_phpb" rows="8"></textarea>
              <div class="clear"></div>
          </section>

          <div id="certify">
            <p>I certify that the above information is current, complete and accurate to the best of my knowledge. <b>&#42;</b></p>
            <input required  type="checkbox" name="certified" value="certify">
            <div class="clear"></div>
          </div><!-- certify -->

          <div class="freeGraphs">
            <p>Please submit unofficial copies of all transcripts to <a href="mailto:phpostbac@clas.ufl.edu">phpostbac@clas.ufl.edu</a>.</p>
            <p>Official transcripts and the UF Post-Bac Application must be sent directly to:</p>
          </div><!-- free graphs -->

          <p id="address">UF Office of Admission<br>PO Box 114000<br>Gainesville, FL 32611</p>

          <!-- "inputTriggers.php": needed to submit / email the form but dont affect the form fields / content" -->
          <?php require("include/inputTriggers.php"); ?>
          <input id="submit" type='submit' name='Submit' value='submit this information' tabindex="10">
      </form><!-- form -->
    </div><!-- content -->
  </body>
<script src="scripts/checkboxes.js"></script>
</html>
