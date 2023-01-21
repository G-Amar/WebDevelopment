function checkName(name){
  const nameExp = /^[a-z]+$/i;
  if(name.value.match(nameExp))
    return true;
  else{
    alert("Invalid Name!");
    name.focus();
    return false;
  }
}
function checkPhone(phone){
  const phoneExp = /^[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]$/;
  if(phone.value.match(phoneExp))
    return true;
  else{
    alert("Invalid Phone Number!");
    phone.focus();
    return false;
  }
}

function formatPhone(phoneString){
  return `(${phoneString.replace('-',')')}`
}

function validate(){
  let name = document.getElementById('name')
  let phone = document.getElementById('phone')
  let address = document.getElementById('address')
  let validName = checkName(name);
  let validPhone = checkPhone(phone);
  if(validName && validPhone){
    let newPhone = formatPhone(phone.value);
    formOutput = document.getElementById('formOutput');
    formOutput.innerHTML = `Name: ${name.value} <br> Address: ${address.value} <br> Phone #: ${newPhone}`; 
  }
}

function charCount(textArea){
  let count = textArea.value.length;
  document.getElementById('charCount').innerHTML = count;
  return true;
}

function letterCount(textArea){
  let count = 0;
  let str = textArea.value;
  for(let i = 0; i< str.length; i++){
    if(str[i].match(/[a-z]/i))
      count++;
  }
  document.getElementById('letterCount').innerHTML = count;
  return true;
}

function addBookmarks(){
  list = document.getElementById('bookmarks');
  const urls = ["https://www.google.com/",
                "https://www.youtube.com/", 
                "https://www.cs.ryerson.ca/~a44gupta/",
                "https://stackoverflow.com/",
                "http://example.com"];
  let bookmarkString = '';
  for(let url of urls){
    bookmarkString += `<li><a href=\"${url}\">${url}</a>`;
      //if starts with html, append green padlock image
      if(url.match(/^https/))
        bookmarkString += " <img src=\"green lock.ico\" alt=\"Green Padlock\">";
      else
        bookmarkString += " <img src=\"grey lock.ico\" alt=\"Grey Padlock\">";
      bookmarkString += "</li>"
  }
  list.innerHTML = bookmarkString;
  return true;
}
