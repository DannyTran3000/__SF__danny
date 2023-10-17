const header__nav = document.querySelector('#navigation')
const header__navItems = header__nav?.querySelectorAll('.header__menu .header__menu-item') || []
const header__navRunner = header__nav?.querySelector('.header__menu-runner')

let header__navItemWidths = []
let header__navItemXAxis = []

const header__collectWidths = () => {
	for (let i = 0; i < header__navItems.length; i++) {
		const header__navItem = header__navItems[i]
		header__navItemXAxis = [
			...header__navItemXAxis,
			i > 0
				? header__navItemXAxis[i - 1] + header__navItems[i - 1].offsetWidth
				: 0
		]
		header__navItemWidths = [...header__navItemWidths, header__navItem.offsetWidth]
		header__navItem.onmouseenter = () => header__startNavRunner(i)
	}
}

const header__startNavRunner = (index) => {
	if (header__navRunner) {
		header__navRunner.style.left = `${header__navItemXAxis[index] || 0}px`
		header__navRunner.style.width = `${header__navItemWidths[index] || 0}px`
	}
}

const header__resetNavRunner = () => {
	let activeIndex = 0
	for (let i = 0; i < header__navItems.length; i++) {
		const header__navItem = header__navItems[i]
		if (header__navItem?.classList.contains('header__menu-item--active')) activeIndex = i
	}
	header__startNavRunner(activeIndex)
}

window.onload = () => {
	header__collectWidths()
	header__startNavRunner(0)

	if (header__nav)
		header__nav.onmouseleave = () => header__resetNavRunner()
}