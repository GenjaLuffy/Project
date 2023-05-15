const wrapper = document.getElementById('wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.add('is-active');
});
loginLink.addEventListener('click',(e)=>{
    e.preventDefault();
    wrapper.classList.remove('is-active');
});