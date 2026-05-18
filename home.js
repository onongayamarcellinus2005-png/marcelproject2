alert(`you're welcome to the result page page kindly proceed with the next step`)
setInterval(timer,1000);
    function timer(){
        let today= new Date();
        let time=today.toTimeString();
        document.getElementById("ajeh").innerHTML = time;
         let day=today.toDateString();
         document.getElementById("ajah").innerHTML = day;
        
    }

    function confirm() {
        let fullname= document.getElementById("fora").value;
        let matricno= document.getElementById("matric").value;
        let email= document.getElementById("mail").value;
        let phoneno= document.getElementById("phone").value;
        let password= document.getElementById("password").value;

        if(fullname==null || fullname=="")
            {
             alert ("fullname cannot be empty");
    }
       else if(matricno==null || matricno=="")
            {
              alert  ("matric number cannot be empty");
    }
       else if(email==null || email=="")
            {
              alert  ("email cannot be empty");
    }
       else if(phoneno ==null || phoneno=="")
            {
               alert ("phone number cannot be empty");
    }
      else if(password==null || password=="")
            {
               alert ("password cannot be empty");
    }

       
    alert ("do you want to continue with this action. Please note that this action is irreversible!!");
    }
   