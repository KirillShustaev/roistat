let phoneInput = document.getElementById('tel');
let phoneMask = IMask(phoneInput, {
	mask: '+{7}(000)000-00-00'
});

let btn = document.querySelector(".hero__btn")
let popup = document.querySelector(".popup")
let closeBtn = document.querySelector(".popup__close")

btn.addEventListener("click", () => {
	popup.style.display = "flex"
	setTimeout(() => [
		popup.style.opacity = 1
	], 300)
});

closeBtn.addEventListener("click", () => {
	popup.style.opacity = 0;
	setTimeout(()=>[
		popup.style.display = "none"
	], 300)
})

document.addEventListener('click', function(event) {
	if (popup.style.display === "flex" && !event.target.closest('.popup__main') && !event.target.closest('.hero__btn')) {
		popup.style.opacity = 0;
		setTimeout(()=>[
			popup.style.display = "none"
		], 300)
	}
});

let headerBtn = document.querySelectorAll(".header__btn")

headerBtn.forEach((e) => {
	e.addEventListener("click", ()=> {
		for(elem of headerBtn) {
			elem.classList.remove("header__btn_active")
		}
		e.classList.add("header__btn_active")
	})
})

let burgerBtn = document.querySelector(".burger")
let menu = document.querySelector(".header__btnBlock")
let link = document.querySelectorAll(".header__btn")

burgerBtn.addEventListener("click", ()=> {
	menu.classList.toggle("transMenu")
	burgerBtn.classList.toggle("transBurger")
	document.body.classList.toggle("stop-scroll");
})

link.forEach((e) => {
	e.addEventListener("click",() => {
		menu.classList.remove("transMenu");
		document.body.classList.remove("stop-scroll");
		burgerBtn.classList.remove("transBurger")
	})
})

document.addEventListener('click', function(event) {
    if (!event.target.closest('.header__btn') && !event.target.closest('.burger')
		&& !event.target.closest('.header__btnBlock')) {
		menu.classList.remove("transMenu");
		document.body.classList.remove("stop-scroll");
		burgerBtn.classList.remove("transBurger")
    }
});