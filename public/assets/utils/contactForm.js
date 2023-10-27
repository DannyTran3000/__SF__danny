const ContactForm__resetValidation = () => {
  const validationBox = document.querySelector('#contact .contact__validation')
    if (validationBox) validationBox.innerHTML = ''
}

const ContactForm__displayError = (message) => {
  const validationBox = document.querySelector('#contact .contact__validation')
  if (validationBox) validationBox.innerHTML = `
      <p>{message}</p>
    `
  else window.alert(messgae)
}

const ContactForm__handleSubmit = (data) => {
  console.log('go here', data)
}

const ContactForm__onSubmit = () => {
  const form = document.querySelector('#contact__form')
  if (!form) {
    console.log('Form Not Found')
    return
  }

  const email = form.querySelector('input[name="email"]')?.value || null
  if (!checkValidEmail(email)) {
    ContactForm__displayError('Invalid email address!!! Please check your Email address input.')
    return
  }

  const formData = new FormData(form)
  send_request('/contact', 'POST', formData, ContactForm__handleSubmit)
}