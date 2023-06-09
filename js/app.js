// подстановка h1 в title

let h2 = document.getElementById('h2');
if (h2) {
    let h2Text = h2.innerText;
    let title = document.getElementById('title');
    title.innerHTML = h2Text;
    console.log(title);
}

// *********
let openPopUpButtons = document.querySelectorAll('.open-pop-up');
let popUp = document.querySelector('.pop-up');
let popupBg = document.querySelector('.pop-up-bg');
let closePopupButton = document.querySelector('.close-form');
//открытие формы
openPopUpButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        popUp.classList.add('active');
        popupBg.classList.add('active');

    })
});

closePopupButton.addEventListener('click', () => {
    popupBg.classList.remove('active');
    popUp.classList.remove('active');
});


document.addEventListener('click', (e) => {
    if (e.target === popupBg) {
        popupBg.classList.remove('active');
        popUp.classList.remove('active');
    }
});
//**************** */

// ! ЗАпрет вставки из буфера в поле телефон
let inputTel = document.querySelectorAll(".tel-input");
inputTel.forEach(el => {
    el.addEventListener("paste", (e) => { e.preventDefault() });
});

// >Маска для вставки в поле ввода номера телефона                                                                                 
document.addEventListener("DOMContentLoaded", function () {
    var phoneInputs = document.querySelectorAll('.phone-field');

    var getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    var onPhonePaste = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        var pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            var pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    var onPhoneInput = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
            var firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    var onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        var inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    for (var phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
});
// ****************************************

// условия проверки полей ввода телефона и согласия
let btnSend = document.querySelector(".btn-send")
let inputAgreement = document.querySelector(".agreement-checkbox")
let inpTel = document.querySelector(".inp-tel")

inpTel.addEventListener("keyup", saveTelNumber)
inputAgreement.addEventListener("click", toglAgreement)
function toglAgreement() {
    if (inputAgreement.value == 0) {
        inputAgreement.setAttribute('value', 1)
        checked()
    } else {
        inputAgreement.setAttribute('value', 0)
        checked()
    }
}
function checked() {
    console.log(inputAgreement.value)
    if ((inputAgreement.value == 1) && (telNumber.length == 11)) {
        btnSend.classList.add('active')
    } else {
        btnSend.classList.remove('active')
    }
}
let telNumber = []
function saveTelNumber() {
    let = telInputValue = inpTel.value.split("")
    telNumber = telInputValue.filter(item => (Number(item)) || (item === "0"));
    if (telNumber.length == 11) {
        console.log(telNumber);
    }
    checked()
}
