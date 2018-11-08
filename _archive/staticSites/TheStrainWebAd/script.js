window.onload = function() {

	// Video
	var video = document.getElementById("video");

	// Buttons
	var playButton = document.getElementById("play-pause");
	var replayButton = document.getElementById("replay");
	var muteButton = document.getElementById("mute");
	var fullScreenButton = document.getElementById("full-screen");

	var resolve = document.getElementById("resolvescreen");
	var titleid = document.getElementById("titleid");
	var dateid = document.getElementById("dateid");
	var replayid = document.getElementById("replayid");
	var resolvetitleid = document.getElementById("resolvetitleid");
	var resolvedateid = document.getElementById("resolvedateid");
	var videocontrolexitid = document.getElementById("video-controls");




// Event listener for the end of the video

video.addEventListener('ended',myHandler,false);
    function myHandler(e) {
        // What you want to do after the event
    }

	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();

			// Update the button text to 'Pause'
			playButton.innerHTML = "<i class='fa fa-pause' aria-hidden='true'></i>";
		} else {
			// Pause the video
			video.pause();

			// Update the button text to 'Play'
			playButton.innerHTML = "<i class='fa fa-play' aria-hidden='true'></i>";
		}
	});

// Event listener for the replay button
replayButton.addEventListener("click", function() {
			video.pause();
   			video.currentTime = '0';
   	 		video.play();
		if (video.muted == true) {
			
   	 		video.muted = false;
		}


			
	// -> removing the class
  	resolve.classList.remove("resolve-container");
  	titleid.classList.remove("title-container");
  	dateid.classList.remove("date-container");
  	replayid.classList.remove("replay-controls");
  	resolvetitleid.classList.remove("resolvetitle-container");
  	resolvedateid.classList.remove("resolvedate-container");
  	videocontrolexitid.classList.remove("video-controls");
  
 	 // -> triggering reflow 
 	resolve.offsetWidth = resolve.offsetWidth;
  	titleid.offsetWidth = titleid.offsetWidth;
  	dateid.offsetWidth = dateid.offsetWidth;
  	replayid.offsetWidth = replayid.offsetWidth;
  	resolvetitleid.offsetWidth = resolvetitleid.offsetWidth;
  	resolvedateid.offsetWidth = resolvedateid.offsetWidth;
  	videocontrolexitid.offsetWidth = videocontrolexitid.offsetWidth;

  
  	// -> and re-adding the class
  	resolve.classList.add("resolve-container");
 	titleid.classList.add("title-container");
 	dateid.classList.add("date-container");
 	replayid.classList.add("replay-controls");
 	resolvetitleid.classList.add("resolvetitle-container");
 	resolvedateid.classList.add("resolvedate-container");
	videocontrolexitid.classList.add("video-controls");
		




	} 
);


	// Event listener for the mute button
	muteButton.addEventListener("click", function() {
		if (video.muted == false) {
			// Mute the video
			video.muted = true;

			// Update the button text
			muteButton.innerHTML = "<i class='fa fa-volume-off' aria-hidden='true'>";
		} else {
			// Unmute the video
			video.pause();
   			video.currentTime = '0';
   	 		video.play();
			video.muted = false;

			// Update the button text
			muteButton.innerHTML = "<i class='fa fa-volume-up' aria-hidden='true'></i>";

			// -> removing the class
  			resolve.classList.remove("resolve-container");
  			titleid.classList.remove("title-container");
  			dateid.classList.remove("date-container");
  			replayid.classList.remove("replay-controls");
  			resolvetitleid.classList.remove("resolvetitle-container");
  			resolvedateid.classList.remove("resolvedate-container");
  			videocontrolexitid.classList.remove("video-controls");
  
 			 // -> triggering reflow 
 			resolve.offsetWidth = resolve.offsetWidth;
  			titleid.offsetWidth = titleid.offsetWidth;
  			dateid.offsetWidth = dateid.offsetWidth;
  			replayid.offsetWidth = replayid.offsetWidth;
  			resolvetitleid.offsetWidth = resolvetitleid.offsetWidth;
  			resolvedateid.offsetWidth = resolvedateid.offsetWidth;
  			videocontrolexitid.offsetWidth = videocontrolexitid.offsetWidth;

  
  			// -> and re-adding the class
  			resolve.classList.add("resolve-container");
 			titleid.classList.add("title-container");
 			dateid.classList.add("date-container");
 			replayid.classList.add("replay-controls");
 			resolvetitleid.classList.add("resolvetitle-container");
 			resolvedateid.classList.add("resolvedate-container");
 			videocontrolexitid.classList.add("video-controls");
		}
	});


	// Event listener for the full-screen button
	fullScreenButton.addEventListener("click", function() {
		if (video.requestFullscreen) {
			video.requestFullscreen();
		} else if (video.mozRequestFullScreen) {
			video.mozRequestFullScreen(); // Firefox
		} else if (video.webkitRequestFullscreen) {
			video.webkitRequestFullscreen(); // Chrome and Safari
		}
	});


	// Event listener for the seek bar
	seekBar.addEventListener("change", function() {
		// Calculate the new time
		var time = video.duration * (seekBar.value / 100);

		// Update the video time
		video.currentTime = time;
	});

	
	// Update the seek bar as the video plays
	video.addEventListener("timeupdate", function() {
		// Calculate the slider value
		var value = (100 / video.duration) * video.currentTime;

		// Update the slider value
		seekBar.value = value;
	});

	// Pause the video when the seek handle is being dragged
	seekBar.addEventListener("mousedown", function() {
		video.pause();
	});



	// Event listener for the volume bar
	volumeBar.addEventListener("change", function() {
		// Update the video volume
		video.volume = volumeBar.value;
	});
}