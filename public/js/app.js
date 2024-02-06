function messageText(message) {
	const page = window.location.href.includes('articoli');
	if(page)
		message.text('Sei sicuro di voler eliminare l\'articolo selezionato? ATTENZIONE: verranno eliminati tutti i movimenti relativi a questo articolo');
	else
		message.text('Sei sicuro di voler eliminare il movimento selezionato?');
}

$(document).ready(function() {
	$("form>span").click(function() {
		const button = $(this);
		const container = $("<div></div>");
		const message = $("<p></p>");
		messageText(message);
		const cancelBtn = $("<span></span>").text("Annulla");
		const confirmBtn = $("<button></button>").text("Elimina");
		const div = $("<div></div>");

		container.addClass("d-flex flex-column justify-content-center align-items-center position-absolute bg-light rounded shadow h-25 w-25 px-5");
		container.css({"top": "50%", "left": "50%", "transform": "translate(-50%, -50%)"});
		container.attr("id", "container");
		message.addClass("alert alert-light");
		cancelBtn.attr("id", "cancelBtn");
		cancelBtn.addClass("btn btn-lg btn-primary mx-2");
        confirmBtn.addClass("btn btn-lg btn-danger mx-2");
		
		button.after(container);
		container.append(message);
        container.append(div);
        div.append(cancelBtn);
        div.append(confirmBtn);

		$("#cancelBtn").click(function() {
			$("#container").remove();
		});
	});
})