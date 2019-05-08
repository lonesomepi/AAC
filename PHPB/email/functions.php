<?php

  function justValue($var) {
    if (!empty($var)) {
      echo $var;
    }
  }

  function paragraph($title, $var) {
    if (!empty($var)) {
      echo "<p><b>" . $title . "</b>: ";
      echo $var;
      echo "</p>";
    }
  }


  function table($title, $var) {
    if (!empty($var)) {
      echo "<table>";
      echo "  <thead>";
      echo "    <tr>";
      echo "      <th>" . $title . "</th>";
      echo "    </tr>";
      echo "  </thead>";
      echo "  <tbody>";
      echo "    <tr>";
      echo "      <td>" . $var . "</td>";
      echo "    </tr>";
      echo "  </tbody>";
      echo "</table>";
    }
  }

?>






<?php

  // if (!empty($other_names)) {
  //   <tr>
  //     <td>Other names</td>
  //     <td><?php echo $other_names; </td>
  //   </tr>
  //  }

  function aRow($title, $var) {

    if (!empty($var)) {
      echo "<tr>";
      echo "  <td>" . $title . "</td>";
      echo "  <td>" . $var .   "</td>";
      echo "</tr>";
    }

  }

  $educationalBackgroundTwo = array(
    $educational_background_two_institution,
    $educational_background_two_major,
    $educational_background_two_start_date,
    $educational_background_two_end_date,
    $educational_background_two_degree_earned,
    $educational_background_two_date_will_earn_degree
  );

  foreach ($educationalBackgroundTwo as $key) {
    if (!empty($key)) {
      $educatonalBackgroundTwoExists = true;
    }
  }

  $educationalBackgroundThree = array(
    $educational_background_three_institution,
    $educational_background_three_major,
    $educational_background_three_start_date,
    $educational_background_three_end_date,
    $educational_background_three_degree_earned,
    $educational_background_three_will_earn_degree
  );

  foreach ($educationalBackgroundThree as $key) {
    if (!empty($key)) {
      $educatonalBackgroundThreeExists = true;
    }
  }


  $educationalBackgroundFour = array(
    $educational_background_Four_institution,
    $educational_background_Four_major,
    $educational_background_Four_start_date,
    $educational_background_Four_end_date,
    $educational_background_Four_degree_earned,
    $educational_background_Four_will_earn_degree
  );

  foreach ($educationalBackgroundFour as $key) {
    if (!empty($key)) {
      $educatonalBackgroundFourExists = true;
    }
  }

  $tests = array (
    $standardized_tests_ACT,
    $standardized_tests_GMAT,
    $standardized_tests_GRE,
    $standardized_tests_MCAT,
    $standardized_tests_SAT,
    $standardized_tests_TOEFL,
    $standardized_tests_other
  );

  foreach($tests as $key) {
    if (!empty($key)) {
      $testsExists = true;
    }
  }

    $additionalInfo = array(
      $explanation_previously_applied,
      $explanation_probation,
      $explanation_conviction
    );

    foreach ($addtionalInfo as $key) {
      if (!empty($key)) {
        $additionalInfoExists = true;
      }
    }

    $volunteer = array(
      $volunteer_experience_one_organization,
      $volunteer_experience_one_contact_name,
      $volunteer_experience_one_contact_address,
      $volunteer_experience_one_dates,
      $volunteer_experience_one_duties
    );

    foreach ($volunteer as $key) {
      if (!empty($key)) {
        $volunteerExists = true;
      }
    }

    $volunteerTwo = array(
      $volunteerTwo_experience_one_organization,
      $volunteerTwo_experience_one_contact_name,
      $volunteerTwo_experience_one_contact_address,
      $volunteerTwo_experience_one_dates,
      $volunteerTwo_experience_one_duties
    );

    foreach ($volunteerTwo as $key) {
      if (!empty($key)) {
        $volunteerTwoExists = true;
      }
    }


    $volunteerThree = array(
      $volunteerThree_experience_one_organization,
      $volunteerThree_experience_one_contact_name,
      $volunteerThree_experience_one_contact_address,
      $volunteerThree_experience_one_dates,
      $volunteerThree_experience_one_duties
    );

    foreach ($volunteerThree as $key) {
      if (!empty($key)) {
        $volunteerThreeExists = true;
      }
    }


    $volunteerFour = array(
      $volunteerFour_experience_one_organization,
      $volunteerFour_experience_one_contact_name,
      $volunteerFour_experience_one_contact_address,
      $volunteerFour_experience_one_dates,
      $volunteerFour_experience_one_duties
    );

    foreach ($volunteerFour as $key) {
      if (!empty($key)) {
        $volunteerFourExists = true;
      }
    }

    if (!empty($essay_previous_grades)) {
      $previousGradesExists = true;
    }
    if (!empty($essay_additional_information)) {
      $additionalExists = true;
    };
    if (!empty($essay_how_you_know_phpb)) {
      $howYouKnowExists = true;
    };


?>
