
	<form action="?action=updateProfile&page=profil" method="POST">
	<input type="hidden" name="username" value="<?php echo $user->username?> ">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-34">Update Your Profile</span></br></br>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="vorname" placeholder="First Name" value="<?php echo $user->vorname?> ">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="nachname" placeholder="Last Name" value="<?php echo $user->nachname?> ">
						<span class="focus-input100"></span>
					</div>

						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="E-Mail" value="<?php echo $user->email?> ">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="oldpassword" placeholder="Actual Password">
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

					</br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Update</button>
					</div>
				</br></br>
					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">Thank You.</span>

					</div>


				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	</form>
</div>	
</div>
