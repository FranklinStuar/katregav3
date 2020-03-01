function getMessageResponse(response,type=null){
    textResponse = 'Error interno. Pruebelo nuevamente o comuníquese con un técnico'
    if(type!=null)
        return response
    else if(response.data!=null){
        if(response.data.message)
            textResponse = response.data.message
        else if(response.data.messaje)
            textResponse = response.data.messaje
        else if(response.data.mensaje)
            textResponse = response.data.mensaje
        else if(response.data.error)
            textResponse = response.data.error
        else if(response.body)
            textResponse = response.body
        else
            textResponse = response.data
    }
    if(typeof(textResponse)=='object'){
        if('keys',Object.keys(textResponse).indexOf('message')!= -1)
            textResponse = textResponse.message
        else
            textResponse = ""
    }
    if(Array.isArray(textResponse) && textResponse.indexOf('message') != -1)
        textResponse = textResponse['message']
    
    if(!textResponse || textResponse=='')
        textResponse = "Problemas internos. Estamos trabajando duro para solucionarlo pronto"
    return textResponse
}

function getErrorsResponse(response){
    if(typeof(response)!='object')
        return ""
    textError = ''
    if(Object.keys(response.data).indexOf('errors')!= -1){
        errors = response.data.errors
        if(typeof(errors)=='object')
            if('keys',Object.keys(errors).indexOf('type')!= -1)
                errors = errors.type

        textError = "<hr><ul>"
        for (let i = 0; i < errors.length; i++) 
            textError += "<li>"+errors[i]+"</li>"            
        textError += "</ul>"
    }
    if(response.data.error)
        textError += "<ul><li>"+response.data.error+"</li></ul>"
    return textError 
}

/**
 * 
 * @param {object} response mensaje del servidor
 * @param {string} type success, error
 * @param {string} head mensaje de cabecera en el mensaje
 * @param {object} timer time=tiempo a terminar, open{loading:(true-false),close{url:string,reload:true-false,message:string}}
 */
function swal_message(response,type=null,head=null,timer=null){
    status = (type && type=='success')?200:(type && type=='error')?400:response.status
    textResponse = getMessageResponse(response,type)
    typeText = "error"
    if(status >= 200 && status < 300){
        head = (head)?head:'¡Éxito!'
        typeText = 'success'
    }
    else if(status >= 500 && status < 600){
        head = (head)?head:'Error Interno!'
        textResponse = "Hemos cometido un error. Lo estamos solucionando lo más pronto"
    }
    else{
        textError = ""
        if(status >= 400 && status < 500)
            textError = getErrorsResponse(response)
        head = (head)?head:'Error'
        textResponse +='<br>'+textError
    }
    if(!timer){ //Si no tiene un tiempo muestra simplemente el mensaje
        swal(
            head,
            textResponse,
            typeText
        )
    }
    else{
        if(typeof(timer.close)=='function'){
            swal({
                title: head,
                html: textResponse,
                type: typeText,
                timer: timer.time,
                onOpen: () => {
                    if(timer.open.loading)
                        swal.showLoading()
                },
                onClose: timer.close
            }).then(timer.close)
        }else{
            swal({
                title: head,
                html: textResponse,
                type: typeText,
                timer: timer.time,
                onOpen: () => {
                    if(timer.open.loading)
                        swal.showLoading()
                },
                onClose: () => {
                    if(timer.close.reload)
                        location.reload()
                    else if(timer.close.url)
                        window.location.href = timer.close.url
                    else if(timer.close.back)
                        window.history.back()
                }
            }).then((result) => {
                if(timer.close.reload)
                    location.reload()
                else if(timer.close.url)
                    window.location.href = timer.close.url
                else if(timer.close.back)
                    window.history.back()
            })
        }
    }
	
}
function swal_message_error(error,timer=null){

    console.log(error)

    head = 'Error '+error.status + ': '+ error.statusText
    textResponse = error.responseJSON.message
    console.log('head + response',head,textResponse)
    if(!timer){ //Si no tiene un tiempo muestra simplemente el mensaje
        swal(
            head,
            textResponse,
            "error",
        )
    }
    else{
        if(typeof(timer.close)=='function'){
            swal({
                title: head,
                html: textResponse,
                type: "error",
                timer: timer.time,
                onOpen: () => {
                    if(timer.open.loading)
                        swal.showLoading()
                },
                onClose: timer.close
            }).then(timer.close)
        }else{
            swal({
                title: head,
                html: textResponse,
                type: typeText,
                timer: timer.time,
                onOpen: () => {
                    if(timer.open.loading)
                        swal.showLoading()
                },
                onClose: () => {
                    if(timer.close.reload)
                        location.reload()
                    else if(timer.close.url)
                        window.location.href = timer.close.url
                    else if(timer.close.back)
                        window.history.back()
                }
            }).then((result) => {
                
                if(timer.close.reload)
                    location.reload()
                else if(timer.close.url)
                    window.location.href = timer.close.url
                else if(timer.close.back)
                    window.history.back()
            })
        }
    }
	
}

function toast_message(response,type=null,stayTime = 1,sticky = false){
    stayTime *=1000 //ingresa en segundos y lo transformo en milisegundos
    
    if(type && type != 'success' && type != 'error'){
        $().toastmessage('showToast', {
			text     : "<p class='white-text'>"+response+"<p>",
			stayTime : stayTime,
			sticky   : sticky,
			type     : type
		});
    }
    else{
        status = (type && type=='success')?200:(type && type=='error')?400:response.status
        textResponse = getMessageResponse(response,type)
    
        if(status >= 200 && status < 300)
            $().toastmessage('showToast', {
                text     : "<p class='white-text'>"+textResponse+"<p>",
                stayTime : stayTime,
                sticky   : sticky,
                type     : 'success'
            });
        else if(status >= 500 && status < 600)
            $().toastmessage('showToast', {
                text     : "<p class='white-text'>Hemos cometido un error. Lo estamos solucionando lo más pronto<p>",
                stayTime : stayTime,
                sticky   : sticky,
                type     : 'error'
            });
        else{
            textError = ""
            if(status >= 400 && status < 500)
                textError = getErrorsResponse(response)
            $().toastmessage('showToast', {
                text     : "<p class='white-text'>"+textResponse+"<p><p class='white-text'>"+textError+"<p>",
                stayTime : stayTime,
                sticky   : sticky,
                type     : 'error'
            });
        }
    }
}

function swal_message_delete(title, url){
    swal({
        title: title,
        text: 'Al eliminar se quitará de la lista permanentemente',
        type: 'question',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonClass: 'btn btn-danger',
        cancelButtonClass: 'btn btn-default',
        // buttonsStyling: false
    }).then(function () {
        $.ajax({
            url: url,
            type: 'DELETE',
            success: function(response) {
                if(response.url)
                    swal_message(response.message,'success',null,{
                        time:2000,
                        open:{loading:true},
                        close:function(){
                            window.location.href = response.url;
                        }
                    })
                else
                    swal_message(response)
            },
            error:(error)=>{
                swal_message_error(error)
            }
        });
    })
}

function llenarNumero(text,tam,relleno){
	var result = ""
	text = text.toString()
	for (var i = tam -text.length - 1; i >= 0; i--) {
		result += relleno;
	}
	result += text
	return result
}

// Validates that the input string is a valid date formatted as "mm/dd/yyyy"
function isValidDate(dateString){
	// First check for the pattern
	if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
			return false;

	// Parse the date parts to integers
	var parts = dateString.split("/");
	var day = parseInt(parts[0], 10);
	var month = parseInt(parts[1], 10);
	var year = parseInt(parts[2], 10);

	// Check the ranges of month and year
	if(year < 1000 || year > 3000 || month == 0 || month > 12)
			return false;

	var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

	// Adjust for leap years
	if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
			monthLength[1] = 29;

	// Check the range of the day
	return day > 0 && day <= monthLength[month - 1];
}
 
function todayForInput(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10) 
            dd='0'+dd
    if(mm<10) 
        mm='0'+mm
    return yyyy+'-'+mm+'-'+dd;
}
 
function dateAddMonth(date,month){
    date = date.split('-')
    var dd = date[2]*1;
    var mm = date[1]*1;
    var yyyy = date[0]*1;

    mm += month

    if(mm > 12){
        yyyy++;
        mm -= 12
    }

    if(dd<10) 
        dd='0'+dd
    if(mm<10) 
        mm='0'+mm
    return yyyy+'-'+mm+'-'+dd;
}

function comparateDate(date1,date2){
    d1 = new Date(date1)
    d2 = new Date(date2)
    if(d1.getTime() == d2.getTime())
        return 0
    if(d1.getTime() > d2.getTime())
        return 1
    if(d1.getTime() < d2.getTime())
        return -1
    // como el if es con numeros poner un boolean puede ayudar
    return false
}

function slugify(string) {
    const a = 'àáäâãåăæçèéëêǵḧìíïîḿńǹñòóöôœøṕŕßśșțùúüûǘẃẍÿź·/_,:;'
    const b = 'aaaaaaaaceeeeghiiiimnnnooooooprssstuuuuuwxyz------'
    const p = new RegExp(a.split('').join('|'), 'g')
    return string.toString().toLowerCase()
      .replace(/\s+/g, '-') // Replace spaces with -
      .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
      .replace(/&/g, '-and-') // Replace & with ‘and’
      .replace(/[^\w\-]+/g, '') // Remove all non-word characters
      .replace(/\-\-+/g, '-') // Replace multiple - with single -
      .replace(/^-+/, '') // Trim - from start of text
      .replace(/-+$/, '') // Trim - from end of text
  }