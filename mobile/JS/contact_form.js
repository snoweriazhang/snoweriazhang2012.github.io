 $(document).ready(function(){
	$("#sendmail").click(function(){
		var valid = '';
		var isr = ' is required.';
		var mail = $("#mail").val();
		var subject = $("#subject").val();
		var text = $("#text").val();
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += ' A valid Email'+isr;
		}
		if (subject == "Name*") {
			valid += ' Name'+isr+"\n";
		}
		if (text == "Message*") {
			valid += ' Message'+isr +"\n";
		}
		if (valid!='') {
			$("#response").fadeIn(100);
			$("#response").html("Error:"+valid);
		}
		else {
			var datastr ='&mail=' + mail + '&subject=' + subject + '&text=' + text;
			$("#response").css("display", "block");
			$("#response").html("Sending message... ");
			$("#response").fadeIn(100);
			setTimeout("send('"+datastr+"')",1500);

		}
		return false;
	});
});
function send(datastr){
	$.ajax({	
		type: "POST",
		url: "mail.php",
		data: datastr,
		cache: false,
		success: function(html){
			$("#response").fadeIn(200);
			$("#response").html(html);
			$("#subject").val("Name*");
			$("#mail").val("Email*");
			$("#text").val("Message*");
			setTimeout('$("#response").fadeOut(400)',4000);

		}
	});
}