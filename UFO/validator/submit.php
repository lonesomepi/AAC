<?php
$glid=$_SERVER['HTTP_UFSHIB_GLID'];
$date_auto = date("Y-m-d H:i:s");
$name=$_SERVER["HTTP_UFSHIB_BUSINESSNAME"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>AAC Communications Form | University of Florida</title>
<link rel="icon" type="image/jpg" href="/images/favicon.jpg" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/evalstyle.css" type="text/css" media="screen" />

		
		
		
<style type="text/css" media="screen">
	#content{width:760px;}
	#content textarea {margin-left:0px;}
	legend{font-weight:bold;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

<!--PING A FILE TO KEEP THE PAGE ALIVE-->
<script type="text/javascript">
setInterval(function(){$.post('/includes/ping.php');},10000);

function textCounter(field,cntfield,maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
cntfield.value = maxlimit - field.value.length;
}
//  End -->

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
  for (i = 0; i < str.length; i++) {
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
   
   for (i = 0; i < oForm.length, oForm.elements[i].getAttribute("type") !== 'button'; i++) {
	   msg += oForm.elements[i].tagName + " with 'name' attribute='" + oForm.elements[i].name + "' and data: ";
	   if(oForm.elements[i].value == null || oForm.elements[i].value == '') {
		msg += "NOT SET \n";
	   } else {
		   msg += oForm.elements[i].value + "\n";
	   }
   }

   alert(msg);
}

<!--
function validate_form ( )
{
var x=document.events.phone.value;
var y=document.events.contactphone.value;
var anum=/^(\d{3})-(\d{3})-(\d{4})$/
var k=document.events.email.value;
var atpos=k.indexOf("@");
var dotpos=k.lastIndexOf(".");
	
	valid = true;
		
		if ( document.events.phone.value == "" )
        {
                alert ( "Enter a phone number." );
                valid = false;
        }


else if (!anum.test(x)){
alert("You must format the phone number\nas xxx-xxx-xxxx")
valid = false;}

else if ( document.events.email.value == "" )
        {
                alert ( "Enter an email address." );
                valid = false;
        }

else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=k.length)
{
	alert("Please enter a valid email address\nin the format name@ufl.edu.");
	valid=false;
}

		
		
        else if ( document.events.category.value == "" )
        {
                alert ( "Select the category." );
                valid = false;
        }

        else if ( document.events.title.value == "" )
        {
                alert ( "Enter a title." );
                valid = false;
        }

		else if ( document.events.description.value == "" )
        {
                alert ( "Enter a message." );
                valid = false;
        }

		else if ( document.events.contactname.value == "" )
        {
                alert ( "Enter a contact name." );
                valid = false;
        }

				else if ( document.events.contactphone.value == "" )
        {
                alert ( "Enter a contact phone number." );
                valid = false;
        }
		
				else if ( document.events.contactemail.value == "" )
        {
                alert ( "Enter a contact phone number." );
                valid = false;
        }
		
else if (!anum.test(y)){
alert("You must format the contact phone number\nas xxx-xxx-xxxx")
valid=false;
}
	
        return valid;
}
//-->
</script>
</head>

<?php
include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/header.html");
?>	
	
<div id="mainContainer">
 <div id="content">

<center><h3>AAC Communications Form</h3></center>

<?php
if (isset($_POST['submit'])) {
$date_auto2 = $_POST['date_auto'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$glid2=$_POST['glid'];
$contactname=$_POST['contactname'];
$contactphone=$_POST['contactphone'];
$contactemail=$_POST['contactemail'];


$to = "AACCommunications@advising.ufl.edu";
$subject = "Content for Associate Dean's Email";
$body = $name." (".$glid2.") has submitted an item for the Associate Dean's Email.\n\nCategory: ".$category."\n\nTitle: ".$title."\n\nDescription".$description."\n\nContact Name: ".$contactname."\n\nContact Phone: ".$contactphone."\n\nContact Email: ".$contactemail."
\r";
$headers = "From: {$sendteam}\r\n" .
   "Reply-To: {$sendteam}\r\n" .
   'X-Mailer: PHP/'.phpversion();
	if (mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu")) {
	echo"<center><p>Your message was delivered.</p>
</center></div>";
}
}

else echo "<p>

Use this form if you have a <em>CLAS, academically-related</em> message, event, or opportunity you would like sent to LS students. Please adhere to the categories below. Your message will be sent one time. If you are unsure that your message fits our criteria, <a href='mailto:AACCommunications@advising.ufl.edu'>email us</a>.</p>

<h3>Guidelines for Submissions</h3>
<ul>
<li>Your announcement will run once!</li>
<li>Submit by 5:00 p.m. Wednesday to be included in the next week's email.</li>
<li>Links to additional information or existing forms, pdfs, etc. can be helpful to the reader.</li>
<li>If you think your submission requires an image you already have you may <a href='mailto:AACCommunications@advising.ufl.edu'>email it</a> for possible inclusion.</li>
</ul>

<p>Appropriate submissions include:</p>
<ul>
<li>Announcements that offer students important opportunities to enrich their undergraduate experience.</li>
<li>An academic focus, even if not CLAS-specific, but would be of interest to CLAS students (e.g., pre-professional organizations, MSM, College of Business study abroad).</li>
<li><em>Within reason</em>, legitimate internships from external organizations looking for CLAS majors.</li>
<li><strong>Excluded: </strong>Most non-academic student organizations.</li>
</ul>




<p><strong>Each field is required.</strong></p>
<p>When you've completed the form click the \"Submit\" button.</p>

<form onsubmit='return validate_form ( ); onSubmit=stamp()' id='eval' method='post' action='submit.php' name='events'>


<fieldset><legend>Message</legend>

<fieldset><legend>About You</legend>

<p><strong>Name: ".$name."</strong><br /><br />
<label for='phone'><strong>Phone</strong></label><br />
<input name='phone' placeholder='Your phone' type='phone' title='Enter your phone number.' size='50' maxlength='125' tabindex='2' /><br />
<label for='email'><strong>Email</strong></label><br />
<input name='email' placeholder='Your email' type='email' title='Enter your email.' size='50' maxlength='125' tabindex='3' value='"."'/>
</p>
</fieldset>

<fieldset><legend>Message</legend>
	<p>
	<label for='category'><strong>Category</strong></label><br />
	<select name='category' tabindex='1' title='Click here and scroll to select.' >
	<option value=''>(scroll to select)</option>
	<option value='Courses'>CLAS Courses</option>
	<option value='Dates'>CLAS Dates</option>
	<option value='Events'>CLAS Events</option>
	<option value='Internships'>CLAS Internships</option>
	<option value='Opportunities'>CLAS Opportunities</option>
	</select>
	</p>

	<br />	

	<p>
	<label for='title'><strong>Entry Title</strong></label><br />
	<input name='title' type='text' title='Enter the message title.' size='50' maxlength='125' tabindex='2' />
	</p>
	
	<br />
	
	<p>
	<label for='description' id='description'><strong>Description</strong>: Enter or paste your event information.</strong></label><br />
	You have <input readonly=readonly type='text' name='remLen3' size='3' maxlength='3' value='1000' />characters left.<br /><textarea rows='10' cols='50' id='description' name='description' onKeyDown='textCounter(document.events.description,document.events.remLen3,1000)' onKeyUp='textCounter(document.events.description,document.events.remLen3,1000)' tabindex='17'></textarea>
	</p>
</fieldset>

<fieldset><legend>Message Contact Info</legend>
<p><strong>Person readers should contact for more information:</strong><br />
<label for='contactname'><strong>Contact Name</strong></label><br />
<input name='contactname' type='text' title='Enter the contact name.' size='50' maxlength='100' tabindex='18' /><br />
<label for='contactphone'><strong>Phone</strong></label><br />
<input name='contactphone' type='phone' title='Enter your phone number.' size='50' maxlength='125' tabindex='19' /><br />
<label for='contactemail'><strong>Email</strong></label><br />
<input name='contactemail' type='email' title='Enter your email.' size='50' maxlength='125' tabindex='20' value='"."'/>
</p>
</fieldset>
	
	<br />
	

	
<input type='hidden' name='glid' value='$glid' readonly='readonly' />
<input type='hidden' name='date_auto' value='$date_auto' readonly='readonly' />

<p><input type='submit' onsubmit='return validate_form ( );' value='Submit' name='submit' tabindex='21' /></p>



</form></div>";

include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/analytics.html"); 
?>
</div>

</body>
</html>