$(document).ready(function() {
	
	// Expand Panel
	$("#open").click(function(){
		$("div#panel").slideDown("slow");
		return false;
	
	});	
	
	// Collapse Panel
	$("#close").click(function(){
		$("div#panel").slideUp("slow");	
		return false;
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});		
		
});



$(document).ready(function() {
	
	// Expand Panel
	$("#MOREBYopen").click(function(){
		$("div#MOREBYpanel").slideDown("slow");
		return false;
	
	});	
	
	// Collapse Panel
	$("#MOREBYclose").click(function(){
		$("div#MOREBYpanel").slideUp("slow");	
		return false;
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#MOREBYtoggle a").click(function () {
		$("#MOREBYtoggle a").toggle();
	});		
		
});




$(document).ready(function() {
	
	// Expand Panel
	$("#STACKSopen").click(function(){
		$("div#STACKSpanel").slideDown("slow");
		return false;
	
	});	
	
	// Collapse Panel
	$("#STACKSclose").click(function(){
		$("div#STACKSpanel").slideUp("slow");	
		return false;
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#STACKStoggle a").click(function () {
		$("#STACKStoggle a").toggle();
	});		
		
});



$(document).ready(function() {
	
	// Expand Panel
	$("#STOREopen").click(function(){
		$("div#STOREpanel").slideDown("slow");
		return false;
	
	});	
	
	// Collapse Panel
	$("#STOREclose").click(function(){
		$("div#STOREpanel").slideUp("slow");	
		return false;
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#STOREtoggle a").click(function () {
		$("#STOREtoggle a").toggle();
	});		
		
});



//Keeps Nav Stationary at Top

//Stationary at HOME

var fixed = false;

$(document).scroll(function() {
    if( $(this).scrollTop() >= 171 ) {
        if( !fixed ) {
            fixed = true;
            $('#NAVstripes').css({position:'fixed',top:0});
        }
    } else {
        if( fixed ) {
            fixed = false;
            $('#NAVstripes').css({position:'relative'});
        }
    }
});



//Stationary in the Interior

var INTfixed = false;

$(document).scroll(function() {
    if( $(this).scrollTop() >= 138 ) {
        if( !INTfixed ) {
            INTfixed = true;
            $('#intNAVstripes').css({position:'fixed',top:0});
        }
    } else {
        if( INTfixed ) {
            INTfixed = false;
            $('#intNAVstripes').css({position:'static'});
        }
    }
});
