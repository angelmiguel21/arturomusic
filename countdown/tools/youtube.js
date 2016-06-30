var canal = 'prueba1105';
var channel = 'UCD-Wm5AERdh5iZhV3Ma_x9A';

$(document).ready(function(){
	$.get(
		"https://www.googleapis.com/youtube/v3/channels",{
			part: 'contentDetails',
			forUsername: canal,
			key: 'AIzaSyCwa1JrVNrdNIyXAafzZRkGXH27cdrJ3DM'},//api
				function(data){
					$.each(data.items, function(i, item){

						pid = item.contentDetails.relatedPlaylists.uploads;
						getVids(pid);
					})//$.each
				} //function(data)
	);//$get

	function getVids(pid){
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems",{
				part: 'snippet',
				maxResults: 1,
				playlistId: pid,
				key: 'AIzaSyCwa1JrVNrdNIyXAafzZRkGXH27cdrJ3DM'},
					function(data){
						var output;
						$.each(data.items, function(i, item){

							videTitle = item.snippet.title;
							videoId = item.snippet.resourceId.videoId;
							videoTitle = item.snippet.title;

							output = ' <p>'+videoTitle+'</p><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src=\ "//www.youtube.com/embed/'+videoId+' \ "></iframe></div>';

							//Append to result list

							$("#results").append(output);
							covers();
						})
					}
		)//$.get

		function covers(){
			$.get(
				"https://www.googleapis.com/youtube/v3/search",{
					part: 'id',
					channelId: channel,
					q: 'cover',
					maxResults: 1,
					key: 'AIzaSyCwa1JrVNrdNIyXAafzZRkGXH27cdrJ3DM'},
						function(data){
							var output;
							$.each(data.items, function(i, item){

								videoId = item.id.videoId;

								output = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src=\ "//www.youtube.com/embed/'+videoId+' \ "></iframe></div>';

								//Append to result list

								$("#covers").append(output);
								karaoke();
							})//data
						}//function(data)
			);//get

			function karaoke(){
			$.get(
				"https://www.googleapis.com/youtube/v3/search",{
					part: 'id',
					channelId: channel,
					q: 'karaoke',
					maxResults: 1,
					key: 'AIzaSyCwa1JrVNrdNIyXAafzZRkGXH27cdrJ3DM'},
						function(data){
							var output;
							$.each(data.items, function(i, item){
								console.log(item);
								videoId = item.id.videoId;

								output = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src=\ "//www.youtube.com/embed/'+videoId+' \ "></iframe></div>';

								//Append to result list

								$("#karaoke").append(output);
								responde();
							})//data
						}//function(data)
			);//get

			function responde(){
			$.get(
				"https://www.googleapis.com/youtube/v3/search",{
					part: 'id',
					channelId: channel,
					q: 'responde',
					maxResults: 1,
					key: 'AIzaSyCwa1JrVNrdNIyXAafzZRkGXH27cdrJ3DM'},
						function(data){
							var output;
							$.each(data.items, function(i, item){
								console.log(item);
								videoId = item.id.videoId;

								output = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src=\ "//www.youtube.com/embed/'+videoId+' \ "></iframe></div>';

								//Append to result list

								$("#responde").append(output);

							})//data
						}//function(data)
			);//get

				}//function responde
			}//function karaoke
		}//function covers
	}//function getvids
});//document ready