meSpeak.loadConfig("mespeak_config.json");
meSpeak.loadVoice("voices/en/en-us.json");
meSpeak.loadVoice("voices/fr.json");

$(document).ready(function(){

		var name ='';

			var commands = {
				'first name *val' : function(val){
					//alert(val);
					$('#firstname').val(val);
					$('#greet').text('Robot: '+ val);
						var parts = [
							{ text: 'your first name is'+ val,      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				'last name *val1' : function(val1){
					$('#lastname').val(val1);
					$('#greet').text('Robot: '+ val1);
					var parts = [
							{ text: 'your last name is' + val1,      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				'address *val2' :function(val2){
					$('#address').val(val2);
					$('#greet').text('Robot: '+ val2);
					var parts = [
							{ text: 'Your address is in ' + val2,      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				'facebook':function(){
					
					window.open('http://www.facebook.com', '_blank');
				},
				'password *val3' :function(val3){
					$('#password').val(val3);
					$('#greet').text('Robot: Password *************');
					var parts = [
							{ text: 'Your password is secret, i"m not allowed to mention',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				'confirm' :function(){
					var pass = $('#password').val();
					$('#repassword').val(pass);
					$('#greet').text('Robot:Password  Confirmed ! ');
					var parts = [
							{ text: 'Password  Confirmed ',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				
				'submit' : function(){
					
					$('#greet').text('Robot: Sigurado ka?');
					var parts = [
							{ text: 'c go wra du ka?',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
							
							
				},
				'no':function(){
					$('#greet').text('Robot:Ok Ayusin mo muna.');
					var parts = [
							{ text: "okay, a u sin mo moo'naa",      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				
				'yes' : function(){
					
					$('#greet').text('Robot: Submit Form');
					var parts = [
							{ text: 'Submit Form',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
							
							setInterval(function(){
								$('#submit').click(), 5000
							});
				},
				'reset' : function(){
					$('#reset').click();
				},
				'open youtube': function(){
					
				},
				'hi' :function(){
					$('#greet').text('Robot: Hello! ' + name);
					
					 if(name == ''){
							  var parts = [
							{ text: 'Hello! what is your name ',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
						  }else{
							  	var parts = [
							{ text: 'Hello! '+ name,      voice: "en/en-us", variant: "m2" }
							];
							meSpeak.speakMultipart(parts);
						  }
				},
				"i'm *val5" : function(val5){
					
					
					$('#greet').text('Robot: Hello! '+ val5);
					
					
					      name  = val5;
						  if(name == ''){
							  var parts = [
							{ text: 'Hello! what is your name ',      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
						  }else{
							  	var parts = [
							{ text: 'Hello! '+ name,      voice: "en/en-us", variant: "m2" }
							];
							meSpeak.speakMultipart(parts);
						  }
				
				},
				'hello' :function(){
					$('#greet').text('Robot: Hi ' + name);
					var parts = [
							{ text: 'Hi' + name,      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				},
				'refresh' :function(){
					location.reload();
				},
				'home' :function(){
					window.location.href='http://localhost/speech/';
				},
				'signup' : function(){
					window.location.href='signup.php';
				},
				'secret' : function(){
					$('#greet').text('Robot: Ulol ka' );
					var parts = [
							{ text: "oo'lool ka",      voice: "en/en-us", variant: "m2" }
						];
							meSpeak.speakMultipart(parts);
				}
				

				
				
				
			
			}
			annyang.addCommands(commands);
			annyang.start();
		});