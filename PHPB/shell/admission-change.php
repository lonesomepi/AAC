<?php require_once("includes/headernew.html"); ?>

<style>
#mainContainer{width:960px;}
#content{width:715px;}
#phpbcontact{width:215px;}
</style>


<div id="content">
    <h1>Pre-Health Career Changer Program</h1>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script language="javascript">
(function($) {

  function measureWidth(deflt) {
    var dummy = $('<label></label>').text(deflt).css('visibility','hidden').appendTo(document.body);
    var result = dummy.width();
    dummy.remove();
    return result;
  }

  function toggleLabel() {
    var input = $(this);
    var deflt = input.attr('title');
    var span = input.prev('span');
    setTimeout(function() {
      if (!input.val() || (input.val() == deflt)) {
        span.css('visibility', '');
        if (deflt) {
          span.css('margin-left', measureWidth(deflt) + 2 + 'px');
        }
      } else {
        span.css('visibility', 'hidden');
      }
    }, 0);
  };

  $(document).on('cut', 'input, textarea', toggleLabel);
  $(document).on('keydown', 'input, textarea', toggleLabel);
  $(document).on('paste', 'input, textarea', toggleLabel);
  $(document).on('change', 'select', toggleLabel);

  $(document).on('focusin', 'input, textarea', function() {
      $(this).prev('span').css('color', '#ccc');
  });
  $(document).on('focusout', 'input, textarea', function() {
      $(this).prev('span').css('color', '#999');
  });

  function init() {
    $('input, textarea, select').each(toggleLabel);
  };

  // Set things up as soon as the DOM is ready.
  $(init);

  // Do it again to detect Chrome autofill.
  $(window).load(function() {
    setTimeout(init, 0);
  });

})(jQuery);
</script>







<script type="text/javascript">
<!--
function validate_form ( )
{
var x=document.forms.phpbcontact.email.value;
var z=document.phpbcontact.phone.value;

var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
var anum=/^(\d{3})-(\d{3})-(\d{4})$/

	valid = true;
			      if ( document.phpbcontact.firstname.value == "" )
        {
                alert ( "Enter a first name." );
                valid = false;
        }

		    else if ( document.phpbcontact.lastname.value == "" )
        {
                alert ( "Enter a last name." );
                valid = false;
        }

    else if ( document.phpbcontact.email.value == "" )
        {
                alert ( "Enter an email address." );
                valid = false;
        }


els tpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
				alert("Not a valid e-mail address!\n\Please enter in the form\nname@domain.com");
				valid=false;
		}



		else f  (document.phpbcontact.phone.value) && (!anum.test(z)))
		{
				alert("You must format the phone number\nas xxx-xxx-xxxx")
				valid=false;
		}


    eument.phpbcontact.spam.value != "12" )
        {
                alert ( "Please correctly enter the answer for 8+4." );
                valid = false;
        }



        retn vi
//-->
</script>


<script language="javascript">
function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->
</script>
<script language="javascript">
function trim(str) {
  return str.replace(/^\s+|\s+$/g, '');
}
function isEmpty(str) {
  str = trim(str);
  return ((str == null) || (str.length == 0))
}
function isDigit(c) {
  return ((c >= "0") && (c <= "9"))
}
function isInteger(str) {
  var i;
  for (i =; i str.length; i++) {
	var c = str.charAt(i);
	if (!isDigit(c)) return false;
  }
  return true;
}
function initForm(oForm, element_name, init_txt) {

	frmElement = oForm.elements[element_name];
	frmElement.value = init_txt;
}
function clearFieldFirstTime(element) {
  if (element.counter==undefined) {
	element.counter = 1;
  }

  else {
	element.counter++;
  }

  if (element.counter == 1) {
	element.value = '';
  }
}
function showFormData(oForm) {
   var msg = "The data that you entered for the form : \n";

   for (i = 0; i < om.gth, oForm.elements[i].getAttribute("type") !== 'button'; i++) {
	   msg += oForm.elements[i].tagName + " with 'name' attribute='" + oForm.elements[i].name + "' and data: ";
	   if(oForm.elements[i].value == null || oForm.elements[i].value == '') {
		msg += "NOT SET \n";
	   } else {
		   msg += oForm.elements[i].value + "\n";
	   }
   }
   alert(msg);
}
</script>


<!--
	<center>
	<a href="#PHCPApplication">
	<input class="btn" type="button" value="APPLY NOW" />
	</a>
	</center>
-->

    <p>The University of Floria's Pre-Health Post-Bac Career Changer Program offers pre-health students an opportunity to take academic pre-requisite courses for admission to medical school, dental school, and other health professional graduate programs. This program is specifically for students who did not take science pre-requisite courses as undergraduates (maximum of two completed).</p>

  <div id="box"><center>
<h3eadline: February 15, 2019</h3>
  </center>
  <p>We admit students for the Fall on a rolling basis until the program fills. Students who apply early have a greater chance of admission. We recommend applying by November 1st, but will continue to review applications until the deadline if we have space available.</p>

  </div>


<h3>PHPB Career Changer Program Eligibility</h3>
<p>Successful applicants to this highly selective program must:</p>

<ol>
<li>Meet the general requirements and submit an application for post-baccalaureate admission to the University of Florida.</li>
<li>Have a recognized baccalaureate degree (or higher) from a regionally accredited college or university, or an international equivalent based on a 4-year curriculum.</li>
<li>Have a competitive GPA. Most admitted applicants have minimum cumulative and upper-division GPAs of 3.0. Most students who are successful in gaining admission to medical, dental, and veterinary medicine schools have GPAs of 3.5 and higher.</li>
<li>Have completed MAC1147 and CHM1025 or their equivalents with a minimum grade of B or above prior to admission. Non-UF students may be able to take these courses online through UF prior to beginning the program. Please contact us for more information.</li>
<li>Have worked or volunteered in a clinical setting or in another service related capacity prior to application.</li>
<li>Show evidence of academic abilities necessary to complete the demands of the pre-health program.</li>
<li>Students are NOT eligible for admission if they completed three or more of the required science pre-requisite courses in the past five years.</li>
<li>Have a minimum of 3.0 in any pre-professional science courses already completed.</li>
</ol>

<p>The Admissions Committee reviews each applicant carefully taking into consideration the academic background, previous institutions, courses completed, GPAs earned, evaluations, and essays. The rigor and quality of the applicant's undergraduate curriculum is strongly considered as evidence of having achieved the academic skills necessary for successful completion of this program. </p>

<p>Most applicants have completed work or volunteer hours in a clinical setting and demonstrated knowledge of the profession they are pursuing.</p>

<p><strong>Applications are reviewed and evaluated on a rolling basis. All application materials must be received for admission to be finalized. The most competitive applicants will be admitted on a space available basis.</strong></p>

<p>Pursuing academic requirements alone is inadequate for application to healthcare professional graduate programs. This program requires students to participate in medically related service and research experiences. These positions are secured by the student. This program has no linkages with professional schools/programs and in no way guarantees admission.</p>


<h3 id="PHCPApplication" >Application</h3>

<p>Follow the steps below to be sure your application is considered complete:</p>
<ol>
<li><strong>Complete the <a href="https://postbaccas.liaisoncas.com/" target="_blank">PostBacCAS Application</a>, selecting UF as the program for which you are applying.</strong></li>
<li>Complete the <a href="https://www.applyweb.com/uflpostb/index.ftl" target="_blank">University of Florida Post-Baccalaureate Application</a>.<br />
When filling out the application, <strong>be sure to select "PHPB" as your Postbaccalaureate type.</strong></li>
<li>Send official transcripts from each institution you've attended to:<br />
University of Florida<br />
Office of Admissions<br />
PO Box 114000<br />
Gainesville, FL 32611-4000.<br />
<strong>Note: You must also send official transcripts directly to PostBacCAS.</strong></li>
<li>Two letters of recommendation are required as part of the PostBacCAS Application. These should be submitted directly to PostBacCAS. Recommenders should be individuals who know you in a professional or academic capacity. They should not be family members, peers, or family friends. Appropriate recommenders include people such as professors, employers, volunteer coordinators, or health care providers you have worked with.</li>
</ol>





</div>

<?php require("includes/navnew.html"); ?>
<?php require("includes/footer.html"); ?>

</body>
</html>
