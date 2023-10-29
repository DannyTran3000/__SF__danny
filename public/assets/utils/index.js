const checkValidEmail = (email) => {
  const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  return emailRegex.test(email);
}

const sendRequest = (url, method, body, callback, opt) => {
  fetch(url, {
    method: method,
    body: body,
  })
  .then(response => {
    return response.json()
  })
  .then(data => {
    callback(data)
  } );
}

window.scrollTo({top: 0})
toggleGlobalLoader(true, true)
setTimeout(() => toggleGlobalLoader(false), 3000)