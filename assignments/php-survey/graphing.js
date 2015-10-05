window.onload = function biggestNumber() {
	var numbers = document.querySelectorAll(".number");
	// console.log(numbers);
	var ii = numbers.length;
	// console.log(ii);
	var numberList = [];
	for(i = 0; i < ii; i++) {
		numberList[i] = numbers[i].innerHTML;
	}
	// console.log(numberList);
	var biggestNumber = Math.max.apply(Math, numberList);
	console.log(biggestNumber);

	if(biggestNumber != 0) {
		for(i = 0; i < ii; i++) {
			numbers[i].style.height = (100 * ( numbers[i].innerHTML / biggestNumber )) + "px";
		}

	}
}
