var idle_max_time = 9; //seconds
var user_idle_time = 0;
var user_idle_count = 0;
// $("#testing span").text(user_idle_time++);

$(window).ready(function(){
    var idle_interval = setInterval(CheckIdleTime, 1000); //seconds interval

    $(window).click(function(event){
        // $("#testing span").text(event.pageX + ", " + event.pageY);
        user_idle_time = 0;
    });
    $(window).mousemove(function(event){
        // $("#testing span").text(event.pageX + ", " + event.pageY);
        user_idle_time = 0;
    });
    $(window).keypress(function(event){
        // $("#testing span").text(event.pageX + ", " + event.pageY);
        user_idle_time = 0;
    });
    $(window).scroll(function(event){
        // $("#testing span").text(event.pageX + ", " + event.pageY);
        user_idle_time = 0;
    });

    function CheckIdleTime(){
        user_idle_time++;
        
        if(user_idle_time > idle_max_time){
            user_idle_count++;
            alert("You have been idle for " + user_idle_time + " seconds. You have been idle for " + user_idle_count + " time(s).");
            user_idle_time = 0;
        }
    }
});