function add(){
alert("Movie successfully added!");
}

function failed(){
alert("Please fill all the field!");
}

function incorrect(){
alert("Username/Password incorrect!");
}

function check(){ 
	var cinema_num=document.getElementById("cinema_num").value;
	var title=document.getElementById("title").value;
	var price=document.getElementById("price").value;
	var mtrcb_rating=document.getElementById("mtrcb_rating").value;
	var day1=document.getElementById("day1").value;
	var time1=document.getElementById("time1").value;
	var day2=document.getElementById("day2").value;
	var time2=document.getElementById("time2").value;
	if(cinema_num==""||title==""||price==""||mtrcb_rating==""||day1==""||time1==""||day2==""||time2==""){
			alert("Please answer all questions!");
			
		}
}
function load(){ 
$(document).ready(function() {
		$('input[id="button"]').prop('disabled', true);
	});
}