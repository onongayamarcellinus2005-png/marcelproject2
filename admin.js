setInterval(timer,1000);
 alert(`you're welcome to the admin's page kindly proceed with the next step `)
 alert(`please note that this action might be risky to student `)
    function timer(){
        let today= new Date();
        let time=today.toTimeString();
        document.getElementById("ajeh").innerHTML = time;
         let day=today.toDateString();
         document.getElementById("ajah").innerHTML = day;
        
    }

    function confirm() {
        let id= document.getElementById("admin2").value;
        let phone= document.getElementById("admun4").value;
        let email= document.getElementById("admin6").value;
        let password= document.getElementById("admin8").value;
        

        if(id==null || id=="")
            {
             alert ("user id cannot be empty");
    }
       else if(phone==null || phone=="")
            {
              alert  ("phone number cannot be empty");
    }
       else if(email==null || email=="")
            {
              alert  ("email cannot be empty");
    }
      
      else if(password==null || password=="")
            {
               alert ("password cannot be empty");
    }

       
    alert ("do you want to continue with this action. Please note that this action is irreversible!!");
    }
   