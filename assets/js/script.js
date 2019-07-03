var currentPLayList = [];
var audioElement;


function Audio(){

	this.currentlyPlaying;
	this.audio = document.createElement('audio'); 

	this.setTrack = function(src){
		this.audio.src = src;
	}

	this.play = function(){
		$(".controlButton.play").hide();
		$(".controlButton.pause").show();
		this.audio.play();
	}	

	this.pause = function(){
		$(".controlButton.play").show();
		$(".controlButton.pause").hide();
		this.audio.pause();
	}

}