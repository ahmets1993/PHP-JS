<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form   action="?action=register" method="POST" class="login100-form validate-form" enctype="multipart/form-data">
					<span class="login100-form-title p-b-34">Create New Account</span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
    					 <img src="images/placeholder.png" name="profileImage" onclick="triggerClick()" id="profileDisplay">
          				 <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type anrede">
						<select id="anrede" class="input100" type="text" name="anrede">
							<option value="Herr">Herr</option>
							<option value="Frau">Frau</option>
						<select>
						<span class="focus-input100"></span>
					</div>	
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="vorname" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="nachname" placeholder="Last Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>	
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="adresse" class="input100" type="text" name="adresse" placeholder="Adresse">
						<span class="focus-input100"></span>
					</div>	
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="plz" class="input100" type="text" name="plz" placeholder="Postleitzahl">
						<span class="focus-input100"></span>
					</div>	
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="ort" class="input100" type="text" name="ort" placeholder="Ort">
						<span class="focus-input100"></span>
					</div>	
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="passwordRepeat" placeholder="Repeat Password">
						<span class="focus-input100"></span>
					</div>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="E-Mail">
						<span class="focus-input100"></span>
					</div>
					</br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register-submit" type="submit">Join Us</button>
					</div>
				</br></br>
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">It´s nice to see you here.</span>
					
					</div>
			
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
</div>

	
	
	
<script>
	function triggerClick(){
	document.querySelector('#profileImage').click();
}
function displayImage(e){
	if(e.files[0]){
		var reader =new FileReader();
		reader.onload = function(e){
			document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
		}
		reader.readAsDataURL(e.files[0]);
	}
}
</script>