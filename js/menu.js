function toggleMenu(){
	var menu = document.getElementById('menu');
	var ul = document.getElementById('nav').classList;
	menu.addEventListener('click', function(){
		ul.toggle('open-nav');
		menu.classList.toggle('rotate');
		event.preventDefault();
	});
};