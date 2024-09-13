// ask page codes

const askEmail = document.getElementById('askEmailInput');
const askPhone = document.getElementById('askPhoneInput');
const askSubBtn = document.getElementById('askSubBtn')

askSubBtn.addEventListener('click',function () {

    if (askEmail.value != ''){
        askPhone.removeAttribute('required');
    }else{
        askPhone.setAttribute('required','');
    };
});
