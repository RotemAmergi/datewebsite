
$(document).ready(function() {
	$.getJSON("data/info.json", function(data) {
		$('#mainContent').append("<ul>");
		$.each(data.options, function() {
				$('#mainContent').append("<li><a href="+ this.link + ">"
									+ this.name + "</a></li>");
		});
		$('#mainContent').append("</ul>");
	});
}); 

$(document).ready(function () {   

       $("header .dropdown-toggle").hover(function () {   

         $("header .dropdown-menu").show();      

    });

    

       $("header .dropdown-menu").hover(function () {   

         $("header .dropdown-menu").show();

   }, function() {  

         $("header .dropdown-menu").hide();

    });



    $("header .dropdown-toggle").mouseout(function() { 

    	$("header .dropdown-menu").hide();

    });

    

    $('#myTabs a').click(function (e) {

  e.preventDefault()

  $(this).tab('show')

});


});






/*login*/



function forgotCheckMail(){

	var x = document.forms["loginForm"]["email"].value;

	var atpos=x.indexOf("@");

	var dotpos=x.lastIndexOf(".");

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){

	  alert("illegal mail address - please try again");

	  return false;

	}

}



function loginCheckMail(){

	var i = 0;

	var x = document.forms["loginForm"]["user"].value;

	var y = document.forms["loginForm"]["pass"].value;

	if (!y) {

		alert("illegal mail address or password - please try again");

		return false;

		}

	if (/[@#$&*^%!+=\/\\[\]|?.,<>)(;:'"~`]/.test(y) === true) {

		alert("illegal mail address or password - please try again");

		return false;

		}

	var atpos=x.indexOf("@");

	var dotpos=x.lastIndexOf(".");

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){

	  alert("illegal mail address or password - please try again");

	  return false;

	}

	return true;

}




