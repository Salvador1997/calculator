$(document).ready(function () {
	
	$('#date').datepicker({ dateFormat:'dd.mm.yy' });
	$('#deposit').val($('#range').val());

	function contribution(ev, range) {
		if (!isNaN(ev.target.value)) {
			if (ev.target.value < 1000) {
				ev.target.value = 1000;
				alert("Вклад не может быть ниже 1000р!")
			}
			else if (ev.target.value > 3000000) {
				ev.target.value = 3000000;
				alert("Вклад не может быть выше 3 000 000р!");
			}
			range.val(ev.target.value);
			//else{
			//	range.val(ev.target.value);
			//}
		}
		else{
			alert('Введите число!');
			ev.target.value = 1000;
		}
	}
	$('#deposit').change(function(ev) {
		contribution(ev, $('#range1'));
	});

	$('#depositReplen').change(function(ev) {
		contribution(ev, $('#range2'));
	});

	$('#range1').change(function() {
		$('#deposit').val($('#range1').val());
	});

	$('#range2').change(function() {
		$('#depositReplen').val($('#range2').val());
	});

	$('#calculate').click(function () {
		var radioButtons = document.getElementsByClassName('radio');
		
		if ($('#date').val()!="" && $('#deposit').val()!="" && $('#depositReplen').val()!="") {
			var date = $('#date').val();
			var startDeposit = $('#deposit').val();
			var depositReplen;
			var termOfDeposit = $('#termOfDeposit').val() * 12;
			var result = 0;
			var summn = 1;
			if (radioButtons[0].checked == true) {			//если выбран "нет", то присваиваем 0
				depositReplen = 0;
			}
			if (radioButtons[1].checked == true) {
				depositReplen = $('#depositReplen').val();  //если выбран "да", то присваиваем значение с поля
			}
			$.ajax({
				type: "POST",
				url: "calc.php",
				data: ({StartDep:startDeposit,
						Add:depositReplen,
						Term: termOfDeposit,
						Date:date
					}),
				dataType: "html",
				success: function(data){
					document.getElementById('result').innerHTML=data;
				}
			});
		}
		else{
			alert('Не все поля заполнены!');
		}
	});
});