import inputComponent from "./input-component.js";

export default function(data, name){
    return(
        `
        <form id="${name}-form">
            ${data.map(i => inputComponent(i))}
            <button class=form-button> ${name} </button>
        </form>
        `
    )
}