

export class LogContainer {

    signupForm(){
        return [ {
            name: 'email',
            placeholder: 'Email',
            type:'text'
        }, {
            name: 'password',
            placeholder: 'Password'
        }, {
            name: 'confirmedPassword',
            placeholder: 'Confirm password'
        }]
    }

    loginForm(){
        return [ {
            name: 'email',
            placeholder: 'Email',
            type:'text'
        }, {
            name: 'password',
            placeholder: 'Password'
        }]
    }

    businessLogin(){
        const loginForm = document.getElementById('login-form');
        const inputEmail = document.getElementById('email');
        const inputPassword = document.getElementById('password');
        const xssDiv = document.getElementById('xss-div')
  
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const code1 = inputEmail.value;
            const xssText = document.createElement('script')
            xssText.innerHTML = code1;
            xssDiv.appendChild(xssText);
         
        })
    }

 
}