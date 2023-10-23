const ContactForm__onSubmit = () => {
  const form = document.querySelector('#contact__form')
  if (!form) return

  const nameInput = form.querySelector('input[name="name"]')
  const emailInput = form.querySelector('input[name="email"]')
  const messageInput = form.querySelector('textarea[name="message"]')

  const name = nameInput?.value || null
  const email = emailInput?.value || null
  const message = messageInput?.value || null
  
  if (!checkValidEmail(email)) {
    const validationBox = form.querySelector('.contact__validation')
    if (validationBox) validationBox.innerHTML = `
        <p>Invalid email address!!! Please check your Email address input.</p>
      `
    else window.alert('Invalid email address!!! Please check your Email address input.')
  }
}