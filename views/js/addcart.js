let cart = []
let count = document.querySelector('#carritoCount')
count.innerText = JSON.parse(getCookie('cart')).length

const addToCart = (id, state) => {
	cart = JSON.parse(getCookie('cart'))
	// console.log(id)
	if (state == 1) {
		// console.log(`Producto ${id} agregado al carrito`)
		cart.push(id)
		// console.log(cart)
		document.cookie = `cart=${JSON.stringify(cart)}`
		// Cookie retrieve
	}
	count.innerText = cart.length
}

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
// console.log(JSON.parse(getCookie('cart')))
