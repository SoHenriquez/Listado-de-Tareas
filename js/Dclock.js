/* Clock arrow functions */
let clock = ()=>{
    let date = new Date();
    let hrs = date.getHours();
    let mins = date.getMinutes();
    let secs = date.getSeconds();
    /* Transformación de formato AM y PM*/
    let period = "AM";
    if(hrs == 0) 
        {hrs = 12;}
    else if(hrs>=12){
        hrs = hrs -12;
        period = "PM";
    }
    /* Reasignamos */
    hrs = hrs < 10 ? "0" + hrs : hrs;
    mins = mins < 10 ? "0" + mins : mins;
    secs = secs < 10 ? "0" + secs : secs;

    let time = hrs + ':' + mins + ':' + secs + ' ' + period ;
    /* Utilizando DOM */
    document.getElementById('clock').innerText = time;
    setTimeout(clock,1000);
}
/* Call the clock functions */
clock();


