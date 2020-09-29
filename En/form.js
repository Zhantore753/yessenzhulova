$(document).ready(function(){
	$("form").submit(function() { // Событие отправки с формы
		var form_data = $(this).serialize(); // Собираем данные из полей
		$.ajax({
			type: "POST", // Метод отправки
			url: "sendform.php", // Путь к PHP обработчику sendform.php
			data: form_data,
			success: function() {
				$('.popup').addClass('active');
				$('.thanks').addClass('active');
			}
		});
		event.preventDefault();
	});
});
