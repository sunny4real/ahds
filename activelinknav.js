function GetCurrentPageName() { 
	//method to get Current page name from url. 
	var PageURL = document.location.href; 
	var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
	return PageName.toLowerCase() ;
	} 
	$(document).ready(function(){
	var CurrPage = GetCurrentPageName();
	switch(CurrPage){
	case 'index.php':
	$('#li_home').addClass('active') ;
	break;
	case 'about.php':
	$('#li_about').addClass('active') ;
	break;
	case 'news.php':
	$('#li_news').addClass('active') ;
	break;
	case 'supports.php':
	$('#li_supt').addClass('active') ;
	break;
	case 'trainingbooking.php':
	$('#li_train').addClass('active') ;
	break;
	case 'conferencebooking.php':
	$('#li_conf').addClass('active') ;
	break;
	case 'contacts.php':
	$('#li_cont').addClass('active') ;
	break;
	}
	});