<div class="challengeBox">
	<!-- desactiver -->
  	<h5>Challenge 1 : "Desactiver"</h5>
  	<p>Here is a way to activate the button!</p>
  	<button id="start" onclick="show(1)">Start</button>
  	<div id="challenge" class="challenge" style="display: none;">
  		<p id="ChallengeText">Active Button !</p>
  		<input type="submit" value="send" disabled />
      <br><br>
  	</div>
    <br><br>
  </div>



<div class="challengeBox">
  <!-- desactiver -->
    <h5>level 2 : "blur"</h5>
    <p>What is that !</p>
    <button id="start" onclick="show(2)">Start</button>
    <div id="challenge" class="challenge" style="display: none;">
      <p id="ChallengeText" style="filter: blur(8px);-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;" 
 unselectable="on"
 onselectstart="return false;" 
 onmousedown="return false;">password : bluercss</p>
      <input class="rep" placeholder="anser" type="text" name="anser"><button onclick="anser(2, '9c0fe5226e58e4c499318e9d22253899')">Send</button>
      <br><br>
    </div>
    <br><br>
</div>