let phoneInput = document.getElementById('tel');
let phoneMask = IMask(phoneInput, {
	mask: '+{7}(000)000-00-00'
});

let btn = document.querySelector(".hero__btn")
let popup = document.querySelector(".popup")
let closeBtn = document.querySelector(".popup__close")

btn.addEventListener("click", () => {
	popup.style.display = "flex";
});

closeBtn.addEventListener("click", () => {
	popup.style.display = "none";
})

document.addEventListener('click', function(event) {
	if (popup.style.display === "flex" && !event.target.closest('.popup__main') && !event.target.closest('.hero__btn')) {
		popup.style.display = "none";

	}
});