const typed = new Typed('.typed', {
	strings: [
		'<i class="dcompra"><strong><span class="ngr">¿Qué vas</span> <span class="org">a pedir hoy?</span></strong></i>',
		'<i class="dcompra"><strong><span class="ngr">Aquí encuentras</span> <span class="org">de todo!</span></strong></i>',
		'<i class="dcompra"><strong><span class="ngr">¿Buscando algo</span> <span class="org">para comer?</span></strong></i>',
		'<i class="dcompra"><strong><span class="ngr">Llegaste al</span> <span class="org">lugar indicado!</span></strong></i>'
	],

	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});