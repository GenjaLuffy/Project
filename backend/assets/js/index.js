const wrapper = document.getElementById('wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.add('is-active');
});
loginLink.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.remove('is-active');
});
btnPopup.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.remove('active-popup');
});

