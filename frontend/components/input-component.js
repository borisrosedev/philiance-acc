export default function(data){
    return(
        `
        <article class="input-article">
            <label for=${data.name}></label>
            <input id=${data.name}
            type=${data.type} 
            placeholder=${data.placeholder}
        </article>
        `
    )
}