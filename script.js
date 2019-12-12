/*function LoginValidation()
{
    var Username = null;
    var Password = null;

    var username = document.getElementById('Username').value;
    var password = document.getElementById('Password').value;

    if(username == "")
    {
        document.getElementById('errorUsername').innerHTML = "Empty Username";
        Username = "Error";
    }
    else
    {
        Username = null;
    }

    if(password == "")
    {
        document.getElementById('errorPassword').innerHTML = "Empty Password";
        Password = "Error";
    }
    else
    {
        Password  = null;
    }

    if(Username == null && Password == null)
    {
        document.getElementById('errorUsername').innerHTML = ""; //Clear Error Message
        document.getElementById('errorPassword').innerHTML = ""; 

        //AJAX Code using POST Method
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST","connect.php",true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhttp.send("username="+username+"& password="+password);

        /*xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200)
            {
                alert(this.responseText);
            }
        };*/

        

    //}
    /*else
    {
        alert("Something Went Wrong");
    }
}*/


function registration()
{
    

    var Name = null;
    var Email = null;
    var Type = null;
    var ConPass = null;
    var Password = null;
    var Aiub_Id = null;

    var aiub_id = document.getElementById('aiub_id').value;
    var password = document.getElementById('pass').value;
    var conPass = document.getElementById('conPass').value;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var type = document.getElementById('type').value;

    if(aiub_id == "")
    {
        document.getElementById('errorid').innerHTML = "Empty ID";
        Aiub_Id = "Error";
    }
    else
    {
        Aiub_Id = null;
    }

    if(password == "")
    {
        document.getElementById('errorpass').innerHTML = "Empty Pass";
        Password  = "Error";
    }
    else
    {
        if(password.length >= 5)
        {
            Password = null;
        }
        else
        {
            document.getElementById('errorpass').innerHTML = "Password must be greter then 5 char";
            Password = "Error";
        }
    }

    if(conPass != password)
    {
        document.getElementById('errorconpass').innerHTML = "Password do not match";
        ConPass = "Error";
    }
    else
    {
        ConPass = null;
    }

    if(name == "")
    {
        document.getElementById('errorname').innerHTML = "Empty Name";
        Name = "Error";
    }
    else
    {
        Name = null;
    }
    if(email == "")
    {
        document.getElementById('erroremail').innerHTML = "Empty Mail";
    }
    else
    {
        Email = null;
    }

    if(type == "")
    {
        document.getElementById('errortype').innerHTML = "Add User Type";
        Type = "Error";
    }
    else
    {
        Type = null;
    }


    if(Name == null && Email == null && Type == null && Password == null && ConPass == null && Aiub_Id == null)
    {
        //Pass the data in another php from through AJAX Request
        alert('Ajax');
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST","abc.php",true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        //xhttp.send("Name="+Fullname+"&Email="+usermail+"&Type="+UserType+"&AIUB="+AIUB+"&Password="+Password);
        xhttp.send("Name="+name+"&Email="+email+"&Type="+type+"&AIUB="+aiub_id+"&Password="+password);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200)
            {
                alert(this.responseText);
            }
        };
    }
    else
    {
        alert('Something Went wrong.Try again Later.');
    }
    

}
