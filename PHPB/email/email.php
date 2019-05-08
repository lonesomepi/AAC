<?php
function messageContent($file) {
    ob_start();


    $firstName                                        = $_POST['firstName'];
    $middleName                                       = $_POST['middleName'];
    $lastName                                         = $_POST['lastName'];
    $suffix_name                                      = $_POST['suffix_name'];
    $UF_ID                                            = $_POST['UF_ID'];
    $studied_preDental                                = $_POST['studied_preDental'];
    $studied_preMedical                               = $_POST['studied_preMedical'];
    $studied_preVeterinary                            = $_POST['studied_preVeterinary'];
    $studied_other                                    = $_POST['studied_other'];
    $year_of_entry                                    = $_POST['year_of_entry'];

    $other_names                                      = $_POST['other_names'];
    $sex                                              = $_POST['sex'];

    $date_of_birth                                    = $_POST['date_of_birth'];
    $city_of_birth                                    = $_POST['city_of_birth'];
    $state_of_birth                                   = $_POST['state_of_birth'];
    $country_of_birth                                 = $_POST['country_of_birth'];
    $citizenship                                      = $_POST['citizenship'];
    $street_address                                   = $_POST['street_address'];
    $city_mailing                                     = $_POST['city_mailing'];
    $state_mailing                                    = $_POST['state_mailing'];
    $country_mailing                                  = $_POST['country_mailing'];
    $zip_mailing                                      = $_POST['zip_mailing'];
    $street_permanent                                 = $_POST['street_permanent'];
    $city_permanent                                   = $_POST['city_permanent'];
    $state_permanent                                  = $_POST['state_permanent'];
    $country_permanent                                = $_POST['country_permanent'];
    $zip_permanent                                    = $_POST['zip_permanent'];
    $email                                            = $_POST['email'];
    $phone_home                                       = $_POST['phone_home'];
    $phone_mobile                                     = $_POST['phone_mobile'];
    $phone_work                                       = $_POST['phone_work'];

    $yes_dual_citizenship                             = $_POST['yes_dual_citizenship'];
    $no_dual_citizenship                              = $_POST['no_dual_citizenship'];

    $yes_permanent_resident                           = $_POST['yes_permanent_resident'];
    $no_permanent_resident                            = $_POST['yes_permanent_resident'];



    $evaluator_one_name                               = $_POST['evaluator_one_name'];
    $evaluator_one_street                             = $_POST['evaluator_one_street'];
    $evaluator_one_city                               = $_POST['evaluator_one_city'];
    $evaluator_one_state                              = $_POST['evaluator_one_state'];
    $evaluator_one_zip                                = $_POST['evaluator_one_zip'];
    $evaluator_one_phone                              = $_POST['evaluator_one_phone'];
    $evaluator_one_email                              = $_POST['evaluator_one_email'];


    $evaluator_two_name                               = $_POST['evaluator_two_name'];
    $evaluator_two_street                             = $_POST['evaluator_two_street'];
    $evaluator_two_city                               = $_POST['evaluator_two_city'];
    $evaluator_two_state                              = $_POST['evaluator_two_state'];
    $evaluator_two_zip                                = $_POST['evaluator_two_zip'];
    $evaluator_two_phone                              = $_POST['evaluator_two_phone'];
    $evaluator_two_email                              = $_POST['evaluator_two_email'];

    $educational_background_one_institution           = $_POST['educational_background_one_institution'];
    $educational_background_one_major                 = $_POST['educational_background_one_major'];
    $educational_background_one_start_date            = $_POST['educational_background_one_start_date'];
    $educational_background_one_end_date              = $_POST['educational_background_one_end_date'];
    $educational_background_one_degree_earned         = $_POST['educational_background_one_degree_earned'];
    $educational_background_one_date_will_earn_degree = $_POST['educational_background_one_date_will_earn_degree'];

    $educational_background_two_institution           = $_POST['educational_background_two_institution'];
    $educational_background_two_major                 = $_POST['educational_background_two_major'];
    $educational_background_two_start_date            = $_POST['educational_background_two_start_date'];
    $educational_background_two_end_date              = $_POST['educational_background_two_end_date'];
    $educational_background_two_degree_earned         = $_POST['educational_background_two_degree_earned'];
    $educational_background_two_date_will_earn_degree = $_POST['educational_background_two_date_will_earn_degree'];

    $educational_background_three_institution         = $_POST['educational_background_three_institution'];
    $educational_background_three_major               = $_POST['educational_background_three_major'];
    $educational_background_three_start_date          = $_POST['educational_background_three_start_date'];
    $educational_background_three_end_date            = $_POST['educational_background_three_end_date'];
    $educational_background_three_degree_earned       = $_POST['educational_background_three_degree_earned'];
    $educational_background_three_will_earn_degree    = $_POST['educational_background_three_will_earn_degree'];

    $educational_background_four_institutions         = $_POST['educational_background_four_institutions'];
    $educational_background_four_major                = $_POST['educational_background_four_major'];
    $educational_background_four_start_date           = $_POST['educational_background_four_start_date'];
    $educational_background_four_end_date             = $_POST['educational_background_four_end_date'];
    $educational_background_four_degree_earned        = $_POST['educational_background_four_degree_earned'];
    $educational_background_four_will_earn_degree     = $_POST['educational_background_four_will_earn_degree'];

    $standardized_tests_ACT                           = $_POST['standardized_tests_ACT'];
    $standardized_tests_GMAT                          = $_POST['standardized_tests_GMAT'];
    $standardized_tests_GRE                           = $_POST['standardized_tests_GRE'];
    $standardized_tests_MCAT                          = $_POST['standardized_tests_MCAT'];
    $standardized_tests_SAT                           = $_POST['standardized_tests_SAT'];
    $standardized_tests_TOEFL                         = $_POST['standardized_tests_TOEFL'];
    $standardized_tests_other                         = $_POST['standardized_tests_other'];

    $yes_previously_applied                           = $_POST['yes_previously_applied'];
    $no_previously_applied                            = $_POST['no_previously_applied'];

    $explanation_previously_applied                   = $_POST['explanation_previously_applied'];
    $explanation_probation                            = $_POST['explanation_probation'];
    $explanation_conviction                           = $_POST['explanation_conviction'];

    $volunteer_experience_one_organization            = $_POST['volunteer_experience_one_organization'];
    $volunteer_experience_one_contact_name            = $_POST['volunteer_experience_one_contact_name'];
    $volunteer_experience_one_contact_address         = $_POST['volunteer_experience_one_contact_address'];
    $volunteer_experience_one_dates                   = $_POST['volunteer_experience_one_dates'];
    $volunteer_experience_one_duties                  = $_POST['volunteer_experience_one_duties'];

    $volunteer_experience_two_organization            = $_POST['volunteer_experience_two_organization'];
    $volunteer_experience_two_contact_name            = $_POST['volunteer_experience_two_contact_name'];
    $volunteer_experience_two_contact_address         = $_POST['volunteer_experience_two_contact_address'];
    $volunteer_experience_two_dates                   = $_POST['volunteer_experience_two_dates'];
    $volunteer_experience_two_duties                  = $_POST['volunteer_experience_two_duties'];

    $volunteer_experience_three_organization          = $_POST['volunteer_experience_three_organization'];
    $volunteer_experience_three_contact_name          = $_POST['volunteer_experience_three_contact_name'];
    $volunteer_experience_three_contact_address       = $_POST['volunteer_experience_three_contact_address'];
    $volunteer_experience_three_dates                 = $_POST['volunteer_experience_three_dates'];
    $volunteer_experience_three_duties                = $_POST['volunteer_experience_three_duties'];

    $volunteer_experience_four_organization           = $_POST['volunteer_experience_four_organization'];
    $volunteer_experience_four_contact_name           = $_POST['volunteer_experience_four_contact_name'];
    $volunteer_experience_four_contact_address        = $_POST['volunteer_experience_four_contact_address'];
    $volunteer_experience_four_dates                  = $_POST['volunteer_experience_four_dates'];
    $volunteer_experience_four_duties                 = $_POST['volunteer_experience_four_duties'];

    $essay_why_healthcare                             = $_POST['essay_why_healthcare'];
    $essay_qualities_strengths                        = $_POST['essay_qualities_strengths'];
    $essay_why_interested                             = $_POST['essay_why_interested'];
    $essay_previous_grades                            = $_POST['essay_previous_grades'];
    $essay_additional_information                     = $_POST['essay_additional_information'];
    $essay_how_you_know_phpb                          = $_POST['essay_how_you_know_phpb'];

    $submit                                           = $_POST['submit'];

    $css = file_get_contents("../../email/stylesheet.css");
    require($file);
    return ob_get_clean();
}

include("engine.php");
?>
