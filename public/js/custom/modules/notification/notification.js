function updateDate(currentNotificationCount)
{
	$.getJSON('/notification/update/date', function(data) 
    {
        if( currentNotificationCount > 0){
            $('#notificationBtn').find('.notify').remove();
    	    toastr.success('Suas novas mensagens foram visualizadas', 'Notificações');
        }
    });
}