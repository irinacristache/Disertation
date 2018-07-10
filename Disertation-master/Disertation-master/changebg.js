//JavaScript document to allow the  user to change the background image


function changeImage(number)
{
	$.post('changebg.php', {number:number},
	function(data)
	{
		$('body').css('background-image','url("images/'+number+'.jpg")');
	});
}

function clearImage()
{
	$.get('changebg.php?resetBg',
	function(data)
	{
		$('body').css('background-image','');
		
	});
}