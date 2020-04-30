
const nameInput = document.querySelector('[name="name"]'),
    emailInput = document.querySelector('[name="email"]'),
    phoneInput = document.querySelector('[name="phone"]'),
    msgArea = document.querySelector('[name="message"]'),
    btn = document.querySelector('.btn');
const inputs = document.querySelectorAll('input');

///// Удаляет поле с ошибкой
let delErrorMsg = (event) => {
   
    target = event.target;
    if (target.value === '' || event.target.classList.contains('isCheck')) {
        console.log(target.value === '')
        // let error = target.nextSibling;
        let inputWrap = target.parentElement;
        let children = inputWrap.children;
        for(let key in children){
            console.log(children[key])
            // if(children[key].classList.contains('error')){
                // error.remove(inputWrap);
                if(children[key].className === 'error'){
                    console.log(children[key])
                   console.log(children[key].remove(inputWrap));
                //    error.remove(inputWrap);

                }
            // }     
        }    
        // console.log(children)
        // console.log(children.classList.contains('error'))
        // error.remove(inputWrap);
    }
}
///// Формирует вывод ошибки
let checkValidForm = (event, error) => {
    let target = event.target;
    let div = document.createElement('div');
    div.className = 'error';
    // div.style.position = 'absolute';
    // div.style.right = '50%';
    // div.style.bottom = '35%';
    div.innerHTML = error;
    target.after(div);
    event.target.classList.remove('isCheck');
}
inputs.forEach(item => {
    console.log(item)
    item.addEventListener('input', (event) => {
        delErrorMsg(event);
    })
})


/////Проверка поля имени
let checkValidInputName = (event, name) => {
    name = name.value;
    name = name.trim();
    let error = '';
    if (name.length < 2 || !name.length > 20 || name === '') {
        checkValidForm(event, 'Введите корректное имя!');
    } else {
        event.target.classList.add('isCheck');
    }
    name.split('').forEach(item => {
        if (!isNaN(parseInt(item))) {
            checkValidForm(event, 'Имя не моэет содержать цыфры');
        } else {
            event.target.classList.add('isCheck');
        }
    })
}
nameInput.addEventListener('change', (event) => {
    checkValidInputName(event, nameInput);
})



//////Проверка поля емаил
let checkValidInputEmail = (event, email) => {
    console.log(event)
    email = email.value;
    email = email.trim();
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        checkValidForm(event, 'Поле должно содержать @ и .');
    } else {
        event.target.classList.add('isCheck');
    }
}
emailInput.addEventListener('change', (event) => {
    checkValidInputEmail(event, emailInput);
})



////Проверка поля телефон
let checkValidInputPhone = (event, phone) => {
    // phone = phone.value;
    // phone = phone.trim();
    // let rep = /[\.;":'a-zA-Zа-яА-Я]/;
    // console.log(phone.value.match(rep))
    let regexp = /\d/g;
    if (!phone.value.match(regexp)) {
        phone.value = '';
        checkValidForm(event, 'Номер не должен содержать букв');
    }else {
        phone.value = phone.value.match(regexp).join('');
        event.target.classList.add('isCheck');
    }
}
phoneInput.addEventListener('input', (event) => {
    checkValidInputPhone(event, phoneInput);
})


////Проверка поля msg
let checkValidInputMsg = (event, msg) => {
    msg = msg.value;
    msg = msg.trim();
    console.log(msg)
    if (msg.length < 15 && msg.length !==0) {
        checkValidForm(event, 'Опишите проблему максимально развернуто');
    }else {
        event.target.classList.add('isCheck');
    }
}
msgArea.addEventListener('change', (event) => {
    checkValidInputMsg(event, msgArea);
})

