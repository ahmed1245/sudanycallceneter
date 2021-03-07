function calc ()
{
   var name = document.getElementById("name").innerHTML;
       idd = document.getElementById("idd").innerHTML;
       speaker = document.getElementById("speaker").innerHTML; 
       pc = document.getElementById("pc").innerHTML;
       timein = document.getElementById("timein").innerHTML;
       timeout = document.getElementById("timeout").innerHTML;
       numbers = document.getElementById("numbers").innerHTML;

   document.getElementById("result").innerHTML= name + idd + speaker + pc + timein + timeout +numbers ;
}