$(document).ready(function(){
	$("#registerForm").hide();
	$("#forgotPwdForm").hide();

	$("#registerLink").click(function () {
		event.preventDefault();
		$("#loginForm").hide();
		$("#forgotPwdForm").hide();
		$("#registerForm").show();
		
	});
	//TODO: Fix Forgot Password and implement it
	/*$("#forgotPwdLink").click(function () {
		event.preventDefault();
		$("#loginForm").hide();
		$("#registerForm").hide();
		$("#forgotPwdForm").show();
	});
	*/
	$("#toLoginLink").click(function () {
		event.preventDefault();
		$("#registerForm").hide();
		$("#forgotPwdForm").hide();
		$("#loginForm").show();
	});
	
	
	
});