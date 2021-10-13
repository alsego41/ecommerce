let cart = []
let count = document.querySelector('#carritoCount')
count.innerText = JSON.parse(getCookie('cart')).length

const addToCart = (id, state) => {
	cart = JSON.parse(getCookie('cart'))
	if (state == 1) {
		cart.push(id)
		document.cookie = `cart=${JSON.stringify(cart)}`
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

const removeProduct = (id) => {
	cart = JSON.parse(getCookie('cart'))
	cart = cart.filter((product) => product !== id)
	document.cookie = `cart=${JSON.stringify(cart)}`
	location.reload()
}

const editQty = (id) => {
	cart = JSON.parse(getCookie('cart'))
	let prod = document.querySelector(`#product-${id}-qty`).value
	cart = cart.filter((product) => product !== id)
	for (let i = 0; i < prod; i++) {
		cart.push(id)
	}
	document.cookie = `cart=${JSON.stringify(cart)}`
	count.innerText = JSON.parse(getCookie('cart')).length
}
