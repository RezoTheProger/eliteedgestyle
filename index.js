let button=document.querySelector('#menu-icon');
let navlist =document.querySelector('.navList');



button.onclick = ()=>{
    button.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}
window.onscroll= ()=>{
    button.classList.remove('bx-x');
    navlist.classList.remove('open');
}



const scriptURL = 'https://script.google.com/macros/s/AKfycbxPIr-bCbUbzuHbGbGiH7nsVCiL1c4-sq5y-J2oUnoEAXVwVtfQd1WbHjyK0Aduf80/exec'
    const form = document.forms['submit-to-google-sheet']
  const msg = document.getElementById("msg")
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML="Thanks For Subscribing!"
            setTimeout(function(){
                msg.innerHTML=""

            },5000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })


