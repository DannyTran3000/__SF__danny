const checkValidEmail = (email) => {
  const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  return emailRegex.test(email);
}

const send_request = (url, method, body, callback, opt) => {
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