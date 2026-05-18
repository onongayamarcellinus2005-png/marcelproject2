setInterval(timer,1000);
function timer(){
let today= new Date();
let time=today.toLocaleTimeString();
document.getElementById("ajeh").innerHTML = time;
let day=today.toDateString();
document.getElementById("ajah").innerHTML = day;

}
document.write(`welcome ${fullname}`)

alert(`welcome`)
let today = new Date();
                    let time = today.getHours();
            if (time >=0 && time <=12){
                document.write(`Good Morning ${fullname};`);
            }
            else if (time >=12 && time <= 16){
                document.write(`Good Afternoon ${fullname};`);
            }
            else if (time >=16 && time <= 24){
                document.write(`Good Evening ${fullname};`);
                document.getElementById("spans").innerHTML=today;
            }

            //   your current GPAis ${} and CGPA is ${} 
