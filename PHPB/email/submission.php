<div class="container">

  <?php require("functions.php"); ?>

  <h1>PHPB <?php echo $application; ?> Application</h1>
  <p><i>Submitted: <?php echo date('M. j'); ?></i></p>
  <?php $name = $firstName . " " . $middleName . " " . $lastName; ?>
  <h2>Applicant: <i><?php echo ucwords($name); ?>
  <?php justvalue($suffix_name); ?></i></h2>
  <?php paragraph("UF ID", $UF_ID); ?>


  <table>
    <thead>
      <tr>
        <th colspan="2">Personal Info</th>
      </tr>
    </thead>
    <?php aRow("sex", $sex); ?>
    <?php aRow("nick names", $other_names); ?>
    <?php aRow("birth date", $date_of_birth); ?>
    <?php aRow("birth city", $city_of_birth); ?>
    <?php aRow("birth state", $state_of_birth); ?>
    <?php aRow("birth country", $country_of_birth); ?>
    <?php aRow("citizenship", $citizenship); ?>
    <?php aRow("Dual citizenship", $yes_dual_citizenship); ?>
    <?php aRow("Dual citizenship", $no_dual_citizenship); ?>
    <?php aRow("Permanent Resident", $yes_permanent_resident); ?>
    <?php aRow("Permanent Resident", $no_permanent_resident); ?>
    <?php aRow("street", $street_permanent); ?>
    <?php aRow("city", $city_permanent); ?>
    <?php aRow("state", $state_permanent); ?>
    <?php aRow("country", $country_permanent); ?>
    <?php aRow("zip code", $zip_permanent); ?>
    <?php aRow("email", $email); ?>
    <?php aRow("phone home", $phone_home); ?>
    <?php aRow("phone work", $phone_work); ?>
    <?php aRow("phone mobile", $phone_mobile); ?>
  </table>

  <table>
    <thead>
      <tr>
        <th colspan="2">Contact Info</th>
      </tr>
    </thead>
    <?php aRow("<b>street mailing</b>", $street_address); ?>
    <?php aRow("<b>city mailing</b>", $city_mailing); ?>
    <?php aRow("<b>state mailing</b>", $state_mailing); ?>
    <?php aRow("<b>country mailing</b>", $country_mailing); ?>
    <?php aRow("<b>zip</b>", $zip_mailing); ?>
  </table>

  <?php
    if (!empty($studied_preVeterinary) || !empty($studied_preMedical) || !empty($studied_preDental)) { ?>
    <table>
      <thead>
        <tr>
          <th>Previously Studied</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $areaOfStudy = array(
            $studied_preDental,
            $studied_preMedical,
            $studied_preVeterinary
          );
          foreach($areaOfStudy as $key) {
            if(!empty($key)) { ?>
        <tr>
          <td><?php echo $key; ?></td>
        </tr>
        <?php }
       } ?>
      </tbody>
    </table>
    <?php } ?>

    <?php
      table("Other Areas of Study", $studied_other);
      paragraph("Year of Entry", $year_of_entry);
    ?>

    <table>
      <tr>
        <th colspan="2">Evaluator No. 01</th>
      </tr>
      <tr>
        <?php aRow("Name", $evaluator_one_name); ?>
        <?php aRow("Street", $evaluator_one_street); ?>
        <?php aRow("City", $evaluator_one_city); ?>
        <?php aRow("State", $evaluator_one_state); ?>
        <?php aRow("Zip", $evaluator_one_zip); ?>
        <?php aRow("Phone", $evaluator_one_phone); ?>
        <?php aRow("Email", $evaluator_one_email); ?>
      </tr>
    </table>

    <table>
      <tr>
        <th colspan="2">Evaluator No. 02</th>
      </tr>
      <tr>
        <?php aRow("Name", $evaluator_two_name); ?>
        <?php aRow("Street", $evaluator_two_street); ?>
        <?php aRow("City", $evaluator_two_city); ?>
        <?php aRow("State", $evaluator_two_state); ?>
        <?php aRow("Zip", $evaluator_two_zip); ?>
        <?php aRow("Phone", $evaluator_two_phone); ?>
        <?php aRow("Email", $evaluator_two_email); ?>
      </tr>
    </table>

    <table>
      <tr>
        <th colspan="2">Educational Background 01</th>
      </tr>
      <?php aRow("Institution", $educational_background_one_institution); ?>
      <?php aRow("Major", $educational_background_one_major); ?>
      <?php aRow("Start Date", $educational_background_one_start_date); ?>
      <?php aRow("Graduating", $educational_background_one_end_date); ?>
      <?php aRow("Degree", $educational_background_one_degree_earned); ?>
      <?php aRow("Date", $educational_background_one_date_will_earn_degree); ?>
    </table>


    <?php if ($educatonalBackgroundTwoExists) { ?>

    <table>
      <tr>
        <th colspan="2">Educational Background 02</th>
      </tr>
      <?php aRow("Institution", $educational_background_two_institution); ?>
      <?php aRow("Major", $educational_background_two_major); ?>
      <?php aRow("Start Date", $educational_background_two_start_date); ?>
      <?php aRow("Graduating", $educational_background_two_end_date); ?>
      <?php aRow("Degree", $educational_background_two_degree_earned); ?>
      <?php aRow("Date", $educational_background_two_date_will_earn_degree); ?>
    </table>

    <?php } ?>
    <?php if ($educatonalBackgroundThreeExists) { ?>

    <table>
      <tr>
        <th colspan="2">Educational Background 03</th>
      </tr>
      <?php aRow("Institution", $educational_background_three_institution); ?>
      <?php aRow("Major", $educational_background_three_major); ?>
      <?php aRow("Start Date", $educational_background_three_start_date); ?>
      <?php aRow("Graduating", $educational_background_three_end_date); ?>
      <?php aRow("Degree", $educational_background_three_degree_earned); ?>
      <?php aRow("Date", $educational_background_three_date_will_earn_degree); ?>
    </table>

    <?php } ?>
    <?php if ($educatonalBackgroundFourExists) { ?>

    <table>
      <tr>
        <th colspan="2">Educational Background 04</th>
      </tr>
      <?php aRow("Institution", $educational_background_four_institution); ?>
      <?php aRow("Major", $educational_background_four_major); ?>
      <?php aRow("Start Date", $educational_background_four_start_date); ?>
      <?php aRow("Graduating", $educational_background_four_end_date); ?>
      <?php aRow("Degree", $educational_background_four_degree_earned); ?>
      <?php aRow("Date", $educational_background_four_date_will_earn_degree); ?>
    </table>

    <?php } ?>

    <?php if ($testsExists) { ?>

    <table>
      <tr>
        <th colspan="2">Standardized Tests</th>
      </tr>
      <?php aRow("ACT", $standardized_tests_ACT); ?>
      <?php aRow("GMAT", $standardized_tests_GMAT); ?>
      <?php aRow("GRE", $standardized_tests_GRE); ?>
      <?php aRow("MCAT", $standardized_tests_MCAT); ?>
      <?php aRow("SAT", $standardized_tests_SAT); ?>
      <?php aRow("TOEFL", $standardized_tests_TOEFL); ?>
      <?php aRow("Other", $standardized_tests_other); ?>
    </table>

    <?php } ?>



    <?php if ($additionalInfoExists) { ?>
    <table>
      <tr>
        <th colspan="2">Additional Information</th>
      </tr>
      <?php aRow("<b>Have you ever previously Applied to Health Programs</b>", $explanation_previously_applied); ?>
      <?php aRow("<b>Have you ever been placed on probations, dismissed, or had an institutional action from any college or university for reasons pertaining to academic integrity</b>", $explanation_probation); ?>
      <?php aRow("<b>Have you ever been adjudicated guilty or convicted of a misdemeanor, felony or other crime?</b>", $explanation_conviction); ?>
    </table>
    <?php } ?>

<?php if ($volunteerExists) { ?>
    <table>
      <tr>
        <th colspan="2">Volunteer Experience No. 01</th>
      </tr>
      <?php aRow("Organization", $volunteer_experience_one_organization); ?>
      <?php aRow("Contact Name", $volunteer_experience_one_contact_name); ?>
      <?php aRow("Contact Address", $volunteer_experience_one_contact_address); ?>
      <?php aRow("Dates", $volunteer_experience_one_dates); ?>
      <?php aRow("Duties", $volunteer_experience_one_duties); ?>
    </table>
<?php } if ($volunteerExistsTwo) { ?>
    <table>
      <tr>
        <th colspan="2">Volunteer Experience No. 02</th>
      </tr>
      <?php aRow("Organization", $volunteer_experience_two_organization); ?>
      <?php aRow("Contact Name", $volunteer_experience_two_contact_name); ?>
      <?php aRow("Contact Address", $volunteer_experience_two_contact_address); ?>
      <?php aRow("Dates", $volunteer_experience_two_dates); ?>
      <?php aRow("Duties", $volunteer_experience_two_duties); ?>
    </table>

    <?php } if ($volunteerExistsThree) { ?>

    <table>
      <tr>
        <th colspan="2">Volunteer Experience No. 03</th>
      </tr>
      <?php aRow("Organization", $volunteer_experience_three_organization); ?>
      <?php aRow("Contact Name", $volunteer_experience_three_contact_name); ?>
      <?php aRow("Contact Address", $volunteer_experience_three_contact_address); ?>
      <?php aRow("Dates", $volunteer_experience_three_dates); ?>
      <?php aRow("Duties", $volunteer_experience_three_duties); ?>
    </table>

    <?php } if ($volunteerExistsFour) { ?>

    <table>
      <tr>
        <th colspan="2">Volunteer Experience No. 04</th>
      </tr>
      <?php aRow("Organization", $volunteer_experience_four_organization); ?>
      <?php aRow("Contact Name", $volunteer_experience_four_contact_name); ?>
      <?php aRow("Contact Address", $volunteer_experience_four_contact_address); ?>
      <?php aRow("Dates", $volunteer_experience_four_dates); ?>
      <?php aRow("Duties", $volunteer_experience_four_duties); ?>
    </table>

    <?php } ?>


    <?php table("Why Healthcare", $essay_why_healthcare); ?>
    <?php table("Qualities and Strengths", $essay_qualities_strengths); ?>
    <?php table("Why Interested", $essay_why_interested); ?>


    <?php if ($previousGradesExists) { ?>
    <?php table("Previous Grades", $essay_previous_grades); ?>
    <?php } ?>
    <?php if ($additionalExists) { ?>
    <?php table("Additional Info", $essay_additional_information); ?>
    <?php } ?>
    <?php if ($howYouKnowExists) { ?>
    <?php table("How do you know about PHPB?", $essay_how_you_know_phpb); ?>
    <?php } ?>



</div><!-- container -->
