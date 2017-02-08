<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>JavaScript program of Cocktail sort</title>
  </head>
  <body></body>
</html>
JavaScript Code :

function Cocktail_sort(arr) 
{
	var swapped;
	do {
		for(var i = 0; i < arr.length - 2; i++) {
			if(arr[i] > arr[i+1]) {
				var temp = arr[i];
				arr[i] = arr[i+1];
				arr[i+1] = temp;
				swapped = true;
			}
		}	
		if(!swapped) {
			break;
		}
		swapped = false;
		for( i = arr.length - 2; i > 0; i--) {
			if(arr[i] > arr[i+1]) {
				var temp1 = arr[i];
				arr[i] = arr[i+1];
				arr[i+1] = temp1;
				swapped = true;
			}
		}
	} while(swapped);
  return arr;
}

var test_arr = [3, 0, 2, 5, -1, 4, 1];

console.log(Cocktail_sort(test_arr));