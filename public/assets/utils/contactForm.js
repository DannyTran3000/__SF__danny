const ContactForm__resetValidation = () => {
  const validationBox = document.querySelector('#contact .contact__validation')
    if (validationBox) validationBox.innerHTML = ''
}

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
    const validationBox = document.querySelector('#contact .contact__validation')
    if (validationBox) validationBox.innerHTML = `
        <p>Invalid email address!!! Please check your Email address input.</p>
      `
    else window.alert('Invalid email address!!! Please check your Email address input.')

    return
  }

  const response = fetch(
    '/index.php',
    {
      method: 'POST',
      body: {
        data: {hello: 'asdlasnd'} 
      }
    }
  )

  response.then(res => {
    return res.json()
    // console.log(res.json())
  }).then(res => console.log(res))

  // console.log(response)
}