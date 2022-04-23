// function typeWriter
function typeWriter(element) {
    const textArray = element.innerHTML.split('');
    element.innerHTML = '';
    textArray.forEach((letter, i) => {
        setTimeout(() =>
            element.innerHTML += letter, 80 * i);
    });
}
const title = document.querySelector('h3');
typeWriter(title);

//Eu estudei e aprende essa funcionalidade no github de: https://github.com/davi1985/
