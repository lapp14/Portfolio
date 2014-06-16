function validateForm()
{
	x=document.forms["sendEmail"]["from"].value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		alert("From email is not a valid email address");
		return false;
	}

	var x=document.forms["sendEmail"]["message"].value;
	if (x==null || x=="")
	{
		alert("Message cannot be empty");
		return false;
	}
	
	alert("Message sent");
	return true;
}