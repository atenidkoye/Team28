function checkFname()
{
	let fname=document.getElementById("firstName").value;  
	if(fname == "")     // if firstname is empty
	{
		document.getElementById('fn').innerHTML = "Enter your Name";
		document.getElementById('firstName').style.backgroundColor = "#F9BDBD";	
		return false;
	}
	else 
	{
        document.getElementById('firstName').style.backgroundColor = "#DEF8CC";
		document.getElementById('fn').innerHTML = "";
    }
	return true;
}

