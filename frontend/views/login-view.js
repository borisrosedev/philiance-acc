import formComponent from "../components/form-component.js"
export default function(data){
    return(
        `
            <main class="login-page">
                <section id="login-form-title">
                    <h1>Login Form</h1>
                </section>
                <section id="login-form-section">
                    ${formComponent(data, 'login')}
                </section>
            </main>
        `
    )
}