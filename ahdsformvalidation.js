	//Script for confirming delete operations
	function deleteConfirm() { 
	var a = confirm("Are you sure you want to go ahead with this delete operation!");
	if (a) 
	{ 
	return true; 
	}
	else 
	{
	return false;
	}
	}