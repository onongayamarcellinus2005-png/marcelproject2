 function formvalid(){
            let password=document.getElementById("passworda").value;
            let conpassword=document.getElementById("passwordb").value;

            if(password !==conpassword)
            {
                document.getElementById("span").innerHTML="password does not match correctly"; 
                document.getElementById("span").style.color="red";
                return false;
            }
             else  if(password ==conpassword)
             {
        document.getElementById("span").innerHTML="password matches correctly!";
        document.getElementById("span").style.color="green";

        return true;
     }
        }
     