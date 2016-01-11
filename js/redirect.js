redirect();

function redirect(){
	if(window.navigator.userAgent.match(/Mobile/i)
	|| window.navigator.userAgent.match(/iPhone/i)
	|| window.navigator.userAgent.match(/iPod/i)
	|| window.navigator.userAgent.match(/IEMobile/i)
	|| window.navigator.userAgent.match(/Windows Phone/i)
	|| window.navigator.userAgent.match(/Android/i)
	|| window.navigator.userAgent.match(/BlackBerry/i)
	|| window.navigator.userAgent.match(/webOS/i))
	{
		/*alert('True - Mobile - ' + navigator.userAgent);*/
		window.location.href="http://m.originalbbqhut.com";
	} else {
		/*alert('False - Mobile - ' + navigator.userAgent);*/
	}

	if(window.navigator.userAgent.match(/Tablet/i)
	|| window.navigator.userAgent.match(/iPad/i)
	|| window.navigator.userAgent.match(/Nexus 7/i)
	|| window.navigator.userAgent.match(/Nexus 10/i)
	|| window.navigator.userAgent.match(/KFAPWI/i))
	{
		/*alert('True - Tablet - ' + navigator.userAgent);*/
		window.location.href="http://m.originalbbqhut.com";
	} else {
		/*alert('False - Tablet - ' + navigator.userAgent);*/
	}
};