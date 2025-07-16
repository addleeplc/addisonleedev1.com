<?php
/* Template Name: Easter Template */ 

get_header();

get_template_part( 'template-parts/content/content', 'page' );
?>
<div class="block-iframe">
<div class="mk-max-w-site mk-mx-auto">

<script src='https://www.google.com/recaptcha/api.js'></script></head>
<form name="ProfileForm" onsubmit="return CheckInputs();" action="https://tracking.addisonlee.com/u/register.php" method=get  class="account-form" style="color:#f5f5f5;">
<input type=hidden name="CID" value="1048989592"><input type=hidden name="SID" value=""><input type=hidden name="UID" value=""><input type=hidden name="f" value="1913"><input type=hidden name="p" value="2"><input type=hidden name="a" value="r"><input type=hidden name="el" value=""><input type=hidden name="llid" value=""><input type=hidden name="c" value=""><input type=hidden name="counted" value=""><input type=hidden name="RID" value=""><input type=hidden name="mailnow" value="">First Name:<input type=text name="inp_1" maxlength=60 value=""><br>
Last Name:<input type=text name="inp_2" maxlength=60 value=""><br>
Email:<input type=text name="inp_3" maxlength=255 value=""><br>
Phone:<input type=text name="inp_15" maxlength=60 value=""><br>
<input tabindex='882' type=checkbox name="optin" value="y" > By ticking this box I agree to the Addison Lee Privacy Policy & to receive Addison Lee emails on the latest news and offers (we won’t share your data & you can unsubscribe at any time) *<br><br>
<div class="g-recaptcha" data-sitekey="6LdrGpMqAAAAADGBIMtO6V5HQIOyBvEpA3HMk6Ix"></div>
<input aria-label='Submit' tabindex='993' type=button onclick="javascript:SubmitIt()" name="submit1" value="Submit" class="cta btn"><br><br>
</form>
<script language="javascript">
<!--
jQuery(document).ready(function($){
      preFill();
   });
function onbeforesubmit()
{
return true;
}
//-->
</script>
<script language="javascript">
<!--
	var error;
var form_lanuage = 'en';
function is_0_valid(){
  count = 0;
  if(document.ProfileForm.optin){
    if(document.ProfileForm.optin.checked){
      if(document.getElementsByName('interest[]')){
        if(document.getElementsByName('interest[]').length > 0 ){
          Interest = document.getElementsByName('interest[]');
          for(i = 0 ; i < Interest.length;i++){
           if(Interest[i].checked)
         ++count;
 }
          if(count == 0){
            error  += "Interests:";
            return false;
  }
        }
      }
    }
  }
 return  true;
}
function is_1_valid(input)
{
	if(input == "")
	{
		error += "First Name: missing data!\n";
		return false;
	}

	return true;
}
function is_2_valid(input)
{
	if(input == "")
	{
		error += "Last Name: missing data!\n";
		return false;
	}

	return true;
}
function is_3_valid(input)
{
	if(input == "")
	{
		error += "Email: missing data!\n";
		return false;
	}

	return true;
}

function CheckInputs()
{
	var check_ok = true;
	error = "Wrong input!\n";

	check_ok = (is_0_valid('null') && check_ok);
	check_ok = (is_1_valid(document.ProfileForm.inp_1.value) && check_ok);
	check_ok = (is_2_valid(document.ProfileForm.inp_2.value) && check_ok);
	check_ok = (is_3_valid(document.ProfileForm.inp_3.value) && check_ok);
	if(check_ok == false)
		alert(error);
	return check_ok;
}
//-->
</script>


<script language="javascript">
function SubmitIt(){
                if(CheckInputs() == true){
                                if(window.onbeforesubmit)
                                                onbeforesubmit();
                                document.ProfileForm.submit();
                }
}

function MailIt(){
                if(CheckInputs()){
                                if((document.ProfileForm.subject.value=='') || (document.ProfileForm.msg.value==''))
                                                alert('Bitte f\u00fcr Sie die Nachrichtenfelder aus!');
                                else
                                                document.ProfileForm.submit();
    }
}

function FieldWithName(frm, fieldname, numofield)
{
    if(!numofield)
        numofield = 0;
    field_count = 0;
    for(i = 0; i < frm.elements.length; ++i)
    {
        if(frm.elements[i].name == fieldname)
        {
            if(field_count == numofield)
                return frm.elements[i];
            else
                field_count++;
        }
    }
}
function NumChecked(frm, fieldname)
{
		var count = 0;
		for(i = 0; i < frm.elements.length; ++i)
		{
				if(frm.elements[i].name == fieldname && frm.elements[i].checked == true)		
						++count;
		}
		return count;
}
function NumSel(field)
{
    var count = 0;
    for(i = 0; i < field.length; ++i)
        if(field[i].selected == true) ++count;
    return count;
}
</script>

<script language="javascript">
var multiFields = new Array();
var dateFields = new Array();
multiFields["interest[]"] = "interest"
multiFields["optin"] = "optin"
var arr_optin = new Array();
arr_optin["True"] = "y";
var arr_interest = new Array();
</script>
<script language="javascript" src="https://tracking.addisonlee.com/u/nprefill.js" type="text/javascript"></script>



</div>
</div>
<?php
get_footer();