(function () {
	window.addEventListener('DOMContentLoaded', function () {
		// console.log(123);
		var hamburger = document.getElementsByClassName('hamburger');

		console.log(hamburger[0].classList.contains('is-active'));
		for(var i =0; i < hamburger.length; i++){

			hamburger[i].addEventListener('click', function () {
				console.log(this);
				if(this.classList.contains('is-active') ){
					this.classList.remove('is-active');
				} else {
					this.classList.add('is-active');
				}
			});

		}
	});
})();