const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmPasswordInput = form.querySelector('input[name="confirmedPassword"]');

function isEmail(email){
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword){
    return password === confirmedPassword;
}

function highlightValidation(element, condition){
    !condition ? element.classList.add('not-valid') : element.classList.remove('not-valid');
}

function emailValidation(){
        setTimeout(function (){highlightValidation(emailInput, isEmail(emailInput.value));
            }
            , 1000);
}

function passwordConfirmation() {
    setTimeout(function () {
            const passwordCondition = arePasswordsSame(
                confirmPasswordInput.previousElementSibling.value,
                confirmPasswordInput.value
            );
            highlightValidation(confirmPasswordInput, passwordCondition);
        }
        , 1000);
}

emailInput.addEventListener('keyup',emailValidation);

confirmPasswordInput.addEventListener('keyup', passwordConfirmation);