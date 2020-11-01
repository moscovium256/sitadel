<div class="challengeBox">
	<!-- cool -->
  	<h5>level 1 : "Cookie"</h5>
  	<p>I managed to steal a friend's cookie but I don't know how to put them on my browser! ..</p>
  	<button id="start" onclick="show(1)">Start</button>
  	<div id="challenge" class="challenge" style="display: none;">
  		<p style="font-size: 20px;" id="ChallengeText">"john" : "a51dda7c7ff50b61eaea0444371f4a6a9301e501"<br><br>
      <?php
      if ($_COOKIE['john'] == "a51dda7c7ff50b61eaea0444371f4a6a9301e501") {
        echo "Password : aAzZeErRtTyY";
      }
      ?>
    </p>
  		<input class="rep" placeholder="anser" type="text" name="anser"><button onclick="anser(1, '5e4389da1f450f275522b4564ca93744')">Send</button>
      <br><br>
  	</div>
    <br><br>
  </div>
