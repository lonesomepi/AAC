<?php
  $title = "Pre-Health Post-Bac Completion Program | UF College of Liberal Arts and Sciences";
  $page = "courses";
  $path = "";
  $image = $page;
  require_once("include/header.php");
?>

      <div class="shell">
        <h2>Course Information</h2>
        <p>PHPB is a structured two-year program. Most courses are taken in sections just for students in the PHPB cohort.  Courses are offered once per year.</p>
        <p>Students in PHPB are expected to take rigorous courses loads of 15 credits per semester to demonstrate the ability to do the course loads required in healthcare professional schools.</p>
        <p>There are additional required courses unique to PHPB to assist with gaining knowledge and skills required for professional preparation. All students in PHPB are required to take these courses.</p>


        <p>Once admitted, an individualized academic plan will be completed for each student taking into account previously completed courses.</p>
        <p>All courses five or more years old or with less than a B earned must be retaken.</p>
        <p><b><u>If there are other courses required for a professional school that are not part of the PHPB curriculum, these may be taken following completion of PHPB.  There is no guarantee of taking these courses at UF.</u></b></p>
        <div class="quoteBubble">
          <?php
            $open  = file_get_contents("image/svg/quote_open.svg");
            $quote_close = file_get_contents("image/svg/quote_close.svg");
          ?>
          <div class="mobile_quote_icon">
            <?php echo $open; ?>
          </div><!-- mobile quote icon -->

          <p class="quoteSlug">The University of Florida’s PHPB program allowed me achieve my goal of attending medical school. As a Career Changer, the streamlined curriculum made it easy to complete the necessary prerequisites in a timely and cost-efficient manner. With the help of knowledgeable professors, along with the provided tutoring and testing resources, I was able to score in the 99th percentile on the MCAT. Furthermore, advisor support and professional development workshops helped me grow into a well-rounded, and competitive applicant. The PHPB program provided the foundation on which I will build my medical career for years to come.</p>
          <p class="quoteSlug">Thank you for the opportunities you have given me!</p>
          <p class="quote_signature">Sylvia Tsang<br>2016 PHPB Cohort</p>

        </div><!-- quote bubble -->


      </div><!-- shell -->
      <div class="clear"></div>

      <h3>Pre-Matriculation</h3>
      <p>All students admitted to PHPB must complete:</p>
      <ul>
        <li>MAC1147 Pre-Calculus and CHM1025 Intro to Chemistry or approved equivalents with grades of Bs or above.</li>
        <li>If admitted to the ReStart track these courses must be taken at UF.</li>
        <li>Online or in-residence enrollment at UF is possible. Taking these at UF will provide the best preparation for taking PHPB chemistry and math courses.</li>
        <li>Please contact us for more information.</li>
      </ul>

      <section>
        <h3>Course Schedule</h3>

        <?php require("include/courses_schedule.php"); ?>

        <div id="courses" class="bubble">
          <h3>PHPB Unique Courses* &#124; IDS4930</h3>

          <dl>
            <dt>
              <img src="image/icons/arrow.png" alt="arrow icon">
              <div class="spanContainer">
                <span>Pre-Health Seminar</span>
              </div><!-- span container -->
              <span class="idsCreditSlug">2 credits</span>
              <div class="clear"></div>
            </dt>
            <dd>
              <p>The PHPB seminar seeks to explore some of the humanistic issues related to patients, professions and the self. Our purpose is to recognize and encompass the concepts of basic dignity afforded to all we seek to care for. The seminar utilizes narratives, case studies, media, the arts, and guest speakers to examine the human story in its interaction with healthcare. The goal of this class is to provide insights into the perspectives of patients and providers as they relate to issues such as culture, hope, uncertainty, death and dying. Students will be invited to read, think, and create to expand their understanding of how social, medical and humanistic realities shape world views, relationships and decision making.</p>
             </dd>
          </dl>
          <dl>
            <dt>
              <img src="image/icons/arrow.png" alt="arrow icon">
              <div class="spanContainer">
                <span>Innovations in Healthcare</span>
              </div><!-- span container -->
              <span class="idsCreditSlug">3 credits</span>
              <div class="clear"></div>
            </dt>
            <dd>
              <p>Students explore and practice steps in the design thinking process and problem solving as it relates to healthcare and its settings in the community. You will develop skills as ethnographers, visual thinkers, strategists, and storytellers through a hybrid of discussions and collaborative projects. Students are placed in community settings to identify and create solutions to an organization's issues.</p>
            </dd>
          </dl>
          <dl>
            <dt>
              <img src="image/icons/arrow.png" alt="arrow icon">
              <div class="spanContainer">
                <span>Bioethics</span>
              </div><!-- span container -->
              <span class="idsCreditSlug">3 credits</span>
              <div class="clear"></div>
              <div class="clear"></div>
            </dt>
            <dd>
              <p>Medical Bioethics provides students with a very intensive review of the dynamic field of bioethics in the areas of medical practice and research. This course offers students the opportunity to learn about many biomedical ethics issues and the impact of these issues in medicine and research.</p>
            </dd>
          </dl>
          <dl>
            <dt>
              <img src="image/icons/arrow.png" alt="arrow icon">
              <div class="spanContainer">
                <span>Health Equity in the U.S. and Abroad</span>
              </div><!-- span container -->
              <span class="idsCreditSlug">3 credits</span>
              <div class="clear"></div>
            </dt>
            <dd>
              <p>This course is designed to introduce students to the various factors influencing human health conditions around the world. Current global health topics and country or region specific health issues will be the focus of the course.</p>
            </dd>
          </dl>
          <dl>
            <dt>
              <img src="image/icons/arrow.png" alt="arrow icon">
              <div class="spanContainer">
                <span>Genetics and Health</span>
              </div><!-- span container -->
              <span class="idsCreditSlug">0 credits</span>
              <div class="clear"></div>
            </dt>
            <dd>
              <p>PHPB students have the opportunity to attend, at no charge, (no credits earned) the UF, College of Medicine, BMS6003 Genetics and Health course coordinated by Dr. Brian Harfe. Dr. Harfe graciously invites PHPB cohorts to attend the class during fall semester so students get a sense of the excellence awaiting students at UF. <i>The BMS6003 Genetics and Health course is the first course that 1st Year Medical students take during their training.</i></p>
            </dd>
          </dl>
        </div><!-- bubble -->

      </section>




      <p>There is access to select electives through the College of Liberal Arts & Sciences and UF College of Medicine.</p>
      <h3>Other Professions</h3>
      <p>Need: <b>MCB3020/L, APK2100C, and/or APK2105C</b></p>
      <p><b><u>These courses may be taken after completion of PHPB as a non-degree seeking student. There is no guarantee this course can be taken at UF</u></b>. Students interested in taking these courses at UF should contact the <a class="googleColor" href="http://microcell.ufl.edu/" target="_blank">departments</a> that offer the courses.</p>


<?php require_once("include/footer.php"); ?>
