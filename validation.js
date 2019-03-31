function validate()
{
	var firstname = document.forms["account"]["fname"].value;
	var surename=document.forms["account"]["lname"].value;
	var phone=document.forms["account"]["phone"].value;
	var emailadrs=document.forms["account"]["email"].value;
	var adrs=document.forms["account"]["address"].value;
	var zipcode=document.forms["account"]["zip"].value;
	var pass=document.forms["account"]["password"].value;
	var cnfrmpass=document.forms["account"]["cnfrmpassword"].value;

        if(isAlphebatic(firstname))
        {
            if(isAlphebatic(surename))
                {
                    if(isAlphanumeric(phone))
                    {
                        if(emailValidation(emailadrs))
                        {
                            if(adrsValidation(adrs))
                            {
                                if(isAlphanumeric(zipcode))
                                {
                                    if(pass==cnfrmpass)
                                    {
                                        if(passValidation(pass,8))
                                        {
                                            return true;
                                        }
                                        else
                                        {
                                            return false;
                                        }
                                    }
                                    else
                                    {
                                        alert("Password didn't match");
                                        return false;
                                    }
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            else
                            {
                                return false;
                            }
                        }
                        else
                        {
                            return false;
                        }
                    }
                    else
                    {
                        return false;
                    }
                }
                else
                {
                    return false;
                }
        }
        else
        {
            return false;
        }
}
function isAlphebatic(elemValue)
{
    var exp = /^[a-zA-Z]+$/;
    if(!isEmpty(elemValue))
    {
        if(elemValue.match(exp))
        {
            return true;
        }
        else
        {
            alert("Enter text only for your first / sur name");
            return false;
        }
    }
}

function isAlphanumeric(elemValue)
{
	var exp2 = /^[0-9]+$/;
	if(!isEmpty(elemValue))
	{
		if(elemValue.match(exp2))
		{
			return true;
		}
		else
		{
			alert("Enter only the numbers for phone number");
			return false;
		}
	}
}

function isEmpty(elemValue)
{
    if(elemValue==""  || elemValue==null)
    {
        alert("You cannot keep fields empty");
        return true;
    }
    else
    {
        return false;
    }
}		

function emailValidation(elemValue)
{
    if(!isEmpty(elemValue))
    {
        var atops = elemValue.indexOf("@");
        var dotops = elemValue.indexOf(".");
        
        if(atops <1 || dotops+2 >=elemValue.length || atops+2>dotops)
        {
            alert("Enter a valid Email Address");
            return false;
        }
        else
        {
            return true;
        }
    }
    else
    {
        return false;
    }
} 

function adrsValidation(elemValue)
{
	if(!isEmpty(elemValue))
	{
		var ex3=/^[a-zA-Z0-9]+$/;
		if(elemValue.match(ex3))
		{
				return true;
		}
		else
		{
            alert("Enter only text and numbers for address");
            return false;
		}
    }
    else
    {
        return false;
    }
		
	
}

function passValidation(elemValue,min)
{
    var exp3=/^(?=.*[a-zA-Z0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;

    if(!isEmpty(elemValue))
    {
        if(elemValue.length>=min)
        {
            if(elemValue.match(exp3))
            {
                return true;
            }
            else
            {
                alert("Password should consist at least a upper case, lower case letter,special Character and number");
                return false;
            }
        }
        else
        {
            alert("Password should at least 8 characters long");
            return false;
        }
    }
    else
    {
        return false;
    }
}