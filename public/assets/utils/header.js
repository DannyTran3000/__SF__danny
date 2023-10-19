const header__nav = document.querySelector('#navigation')
const header__navItems = header__nav?.querySelectorAll('.header__menu .header__menu-item') || []
const header__navRunner = header__nav?.querySelector('.header__menu-runner')
const sectionIDs = ['#start', '#about', '#connect', '#project', '#contact']

let header__navItemWidths = []
let header__navItemXAxis = []

let header__sectionLocation = []

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

const header__collectSectionLocation = () => {
	const sections = document.querySelectorAll(sectionIDs.join(', '))

	header__sectionLocation = []
	
	for (let i = 0; i < sections.length; i++) {
		const section = sections[i]
		const rect = section.getBoundingClientRect();

		header__sectionLocation = [...header__sectionLocation, rect.top]
	}
}

const header__activeNavItem = (index) => {
	const currentActiveElement = document.querySelector('.header__menu-item.header__menu-item--active')
	if (currentActiveElement)
		currentActiveElement.classList.remove('header__menu-item--active')
	if (header__navItems[index])
		header__navItems[index].classList.add('header__menu-item--active')

		header__startNavRunner(index)
}

window.onload = () => {
	header__collectWidths()
	header__startNavRunner(0)

	header__collectSectionLocation()


	if (header__nav)
		header__nav.onmouseleave = () => header__resetNavRunner()

	window.onresize = () => header__collectSectionLocation()

	window.onscroll = () => {
		const current = document.documentElement.scrollTop || document.body.scrollTop
		let activeIndex = 0
		for (let i = 1; i < header__sectionLocation.length; i++) {
			if (current > header__sectionLocation[i] - 200) activeIndex = i
		}
		header__activeNavItem(activeIndex)
	}
}

