$("#form").submit((e)=>{
	$.ajax({
		type: "POST",
		url: "http://localhost:8000/exec",
		context: document.body,
		data: $("#form").serialize(),
		success: (content)=>$("#result").html(content.replace("eval()'d code"," ")),

	})
	e.preventDefault()

})
 