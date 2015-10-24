function monthChange() {	
	change();
}

function yearChange() {
	change();
}

function change() {
	var day_limit;

	var month 	 = document.getElementById('month');
	var day 	 = document.getElementById('day');
	var year 	 = document.getElementById('year');

	var monthInt = parseInt(month.value);
	var dayInt	 = parseInt(day.value);
	var yearInt  = parseInt(year.value);

	switch(monthInt) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 11:
			day_limit = 31;
			break;
		case 2:
			if ( (yearInt % 2) == 0 ) {
				day_limit = 29;
			} else {
				day_limit = 28;
			}
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			day_limit = 30;
			break;
	}

	var str = "";
	for ( i = 1; i <= day_limit; i++ ) {
		if ( i == dayInt ) {
			str += "<option selected>" + i + "</option>";
			continue;
		}
		str += "<option>" + i + "</option>";
	}

	day.innerHTML = str;
}