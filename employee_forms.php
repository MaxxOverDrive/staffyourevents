<form id="" action="employee_process.php" method="POST">
			<p>First: <input type="text" name="first_name"></p>
			<p>Last: <input type="text" name="last_name"></p>
			<p>DOB: <input type="text" name="dob"></p>
			<p>Address: <input type="text" name="address"></p>
			<p>City: <input type="text" name="city">
			   State: <select name="state">
				<option name="Alabama" value="Alabama">AL</option>
				<option name="Alaska" value="Alaska">AK</option>
				<option name="Arizona" value="Arizona">AZ</option>
				<option name="Arkansas" value="Arkansas">AR</option>
				<option name="California" value="California">CA</option>
				<option name="Colorado" value="Colorado">Co</option>
				<option name="Connecticut" value="Connecticut">CT</option>
				<option name="Delaware" value="Delaware">DE</option>
				<option name="Florida" value="Florida">FL</option>
				<option name="Georgia" value="Georgia">GA</option>
				<option name="Hawaii" value="Hawaii">HI</option>
				<option name="Idaho" value="Idaho">ID</option>
				<option name="Illinois" value="Illinois">IL</option>
				<option name="Indiana" value="Indiana">IN</option>
				<option name="Iowa" value="Iowa">IA</option>
				<option name="Kansas" value="Kansas">KS</option>
				<option name="Kentucky" value="Kentucky">KY</option>
				<option name="Louisiana" value="Louisiana">LA</option>
				<option name="Maine" value="Maine">ME</option>
				<option name="Maryland" value="Maryland">MD</option>
				<option name="Massachusetts" value="Massachusetts">MA</option>
				<option name="Michigan" value="Michigan">MI</option>
				<option name="Minnesota" value="Minnesota">MN</option>
				<option name="Mississippi" value="Mississippi">MS</option>
				<option name="Missouri" value="Missouri">MO</option>
				<option name="Montana" value="Montana">MT</option>
				<option name="Nebraska" value="Nebraska">NE</option>
				<option name="Nevada" value="Nevada">NV</option>
				<option name="New Hampshire" value="New Hampshire">NH</option>
				<option name="New Jersey" value="New Jersey">NJ</option>
				<option name="New Mexico" value="New Mexico">NM</option>
				<option name="New York" value="New York">NY</option>
				<option name="North Carolina" value="North Carolina">NC</option>
				<option name="North Dakota" value="North Dakota">ND</option>
				<option name="Ohio" value="Ohio">OH</option>
				<option name="Oklahoma" value="Oklahoma">OK</option>
				<option name="Oregon" value="Oregon">OR</option>
				<option name="Pennsylvania" value="Pennsylvania">PA</option>
				<option name="Rhode Island" value="Rhode Island">RI</option>
				<option name="South Carolina" value="South Carolina">SC</option>
				<option name="South Dakota" value="South Dakota">SD</option>
				<option name="Tennessee" value="Tennessee">TN</option>
				<option name="Texas" value="Texas">TX</option>
				<option name="Utah" value="Utah">UT</option>
				<option name="Vermont" value="Vermont">VT</option>
				<option name="Virginia" value="Virginia">VA</option>
				<option name="Washington" value="Washington">WA</option>
				<option name="West Virginia" value="West Virginia">WV</option>
				<option name="Wisconsin" value="Wisconsin">WI</option>
				<option name="Wyoming" value="Wyoming">WY</option>
			</select></p>
			<p>Email: <input type="" name="email"></p>
			<p>phone: <input type="text" name="phone"></p>
			<h4>Be alerted of open position within how many miles?</h4>
			<p><select name="miles">
				<option name="5" value="5">5 mi</option>
				<option name="10" value="10">10 mi</option>
				<option name="25" value="25">25 mi</option>
				<option name="50" value="50">50 mi</option>
				<option name="100" value="100">100 mi</option>
			</select></p>
			<h4>Position Applying For?</h4>
			<p>
				<input type="checkbox" name="position" value="busser">Busser<br />
			    <input type="checkbox" name="position" value="server">Server<br />
			    <input type="checkbox" name="position" value="bartender">Bartender<br />
			    <input type="checkbox" name="position" value="cook">Cook<br />
			    <input type="checkbox" name="position" value="dj">DJ<br />
			    <input type="checkbox" name="position" value="other">Other
			</p>
			   <h4>Do you have reliable transportation?</h4>
			<p>Yes: <input type="radio" name="transportation" value="yes">
			   No: <input type="radio" name="transportation" value="no"></p>
			<h4>Have you ever used a Mirken?</h4>
			<p>Yes: <input type="radio" name="mirken" value="yes">
			   No: <input type="radio" name="mirken" value="no"></p>
			<input class='btn btn-danger' type="reset" name="reset" />
			<input class='btn btn-primary' type="submit" name="submit" />
		</form>