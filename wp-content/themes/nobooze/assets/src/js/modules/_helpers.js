export const vh = () => {
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`)

    // We listen to the resize event
    window.addEventListener('resize', () => {
        // We execute the same script as before
        let vh = window.innerHeight * 0.01
        document.documentElement.style.setProperty('--vh', `${vh}px`)
    })
}

// Toggle has-scrollbar class to body element to use correct with
export const handleWindow = () => {
    var body = document.querySelector('body')

    if (window.innerWidth > body.clientWidth + 5) {
        body.classList.add('has-scrollbar')
        body.setAttribute(
            'style',
            '--scroll-bar: ' + (window.innerWidth - body.clientWidth) + 'px'
        )
    } else {
        body.classList.remove('has-scrollbar')
    }
}
