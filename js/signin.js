 $(document).ready(function(){
   		$("#login").click(function(){
        $("#welcome").hide(1000);
        $("#logs").show(2000);
   		});   	
   	});
 
     $(document).ready(function(){
      $("#adminbut").click(function(){
        $("#refno").hide(500);
      });     
    });

      $(document).ready(function(){
      $("#custbut").click(function(){
        $("#refno").hide(500);
      });     
    });

$(document).ready(function(){
      $("#ref").click(function(){
        $("#refno").toggle(500);
      });     
});