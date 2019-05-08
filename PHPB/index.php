<?php
  $title="Pre-Health Post-Baccalaureate Program (PHPB) | UF College of Liberal Arts and Sciences";
  $page = "index";
  $path = "";
  $image = $page;
  require_once("include/header.php");
?>
    <div class="shell">
      <?php include("{$path}include/applyButton.php"); ?>
      <!-- <video src="http://clas.ufl.edu/prehealthpostbac/video/2019_UF_PHPB_Info_Session_with_audio.mp4" controls poster="image/videoPoster.png"></video> -->
      <h2>Pre-Health Post-Baccalaureate Program (PHPB)</h2>
      <p>Welcome to the Pre-Health PostBac (PHPB) Program!</p>

      <p>The University of Florida's Pre-health Post-Baccalaureate Program (PHPB) offers dedicated and motivated students an opportunity to complete comprehensive academic and professional preparation for admission to healthcare professional schools.</p>

      <p>PHBP is a two-year program that offers courses, step-by-step advising, professional development groups at a pace that aims to support holistic academic, professional and personal growth. Students develop the skills and competencies to be well-prepared for application to healthcare professional graduate school such as medical, dental and veterinary medicine. Once admitted, students receive an individualized academic plan.  A professional development plan is completed in the first semester to lay out concrete steps students need to take to build an individualized competitive application.</p>

      <?php
        $open  = file_get_contents("image/svg/quote_open.svg");
        $quote_close = file_get_contents("image/svg/quote_close.svg");
      ?>

      <div class="quoteBubble">

        <!-- <div class="quote_icon_container">
          <?php //echo $open; ?>
        </div> -->
        <!-- quote icon container -->

        <div class="mobile_quote_icon">
          <?php echo $open; ?>
        </div><!-- mobile quote icon -->



        <p class="quoteSlug">“One of the most important parts of UF’s PHPB is its ability to set the framework for what medical schools are expecting from applicants and how to achieve them whilst in the program. Its unique classes and advising showcase how much they really know about the application process. For me, the PHPB’s advising and mentorship are really where the program shines. I sincerely believe my access to Bobbi (Roberta Knickerbocker) changed the trajectory of my medical school career. After my first year of the program, she endorsed what I felt at the time to be my wild aspirations for medical school programs. The vote of confidence from someone with her knowledge of the field propelled me to continue making the most competitive application I could.  Moreover, the quality of the PHPB’s basic sciences faculty and their eagerness to assist in my application was essential to my current success. For me, starting with a complete career change and little biomedical science background, UF PHPB’s preparation was worth every cent."</p>

        <div class="quote_icon_container alignBottom">
          <?php echo $quote_close; ?>
        </div><!-- quote icon container -->

        <p class="quote_signature">Ricky Madhavan<br>2014 PHPB Cohort<br>Harvard Medical School</p>

      </div><!-- quote bubble -->


      <p>Students considering all health professions are welcome. However, for professions other than medicine, some pre-requisite courses are not included in our standard curriculum. These courses are taken after completion of the PHPB program.</p>

      <p>Fall admission only. Applicants with pre-professional courses five or more years old and/or with less than a B should expect to repeat those courses as part of PHBP. The following categories of students will be considered:</p>

    </div><!-- shell -->
    <div class="clear"></div>

    <div class="bubbleWrap">

      <div class="bubble">

        <h4><u>Career Changer</u></h4>
        <p>Attempted a maximum of two pre-requisite science courses, earning a B or higher</p>

        <h4 class="bubbleLineSeparator"><u>ReStart</u></h4>
        <p>Attempted a maximum of three science courses early in undergraduate earning less than a B with no further attempts in science courses. These students must demonstrate an upward academic trend in completion of their undergraduate degree.</p>
        <p class="center">OR</p>
        <p>Took pre-requisite courses greater than five years prior to PHPB admission and wish to repeat these for application.</p>
      </div><!-- bubble -->
      <div class="clear"></div>
    </div><!-- bubble wrap -->

    <div id="mobileFeatures"><?php include_once("include/mobileFeatures.php"); ?></div>
    </div><!-- container -->
    <div id="desktopFeatures"><?php include_once("include/desktopFeatures.php"); ?></div>

<?php require_once("include/footer.php"); ?>
