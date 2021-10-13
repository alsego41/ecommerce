let cart = []
const addToCart = (id, state) => {
	// console.log(id)
	if (state == 1) {
		console.log(`Producto ${id} agregado al carrito`)
		cart.push(id)
		document.querySelector('#carritoCount').innerText = cart.length
		console.log(cart)
		document.cookie = `cart=${JSON.stringify(cart)}`
		// Cookie retrieve
	}
}

document.querySelector('#carritoCount').innerText = cart.length

function getCookie(name) {
	let matches = document.cookie.match(
		new RegExp(
			'(?:^|; )' +
				name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') +
				'=([^;]*)'
		)
	)
	return matches ? decodeURIComponent(matches[1]) : undefined
}
console.log(JSON.parse(getCookie('cart')))
