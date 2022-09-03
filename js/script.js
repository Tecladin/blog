const icone = document.getElementById('escuro');
const link = document.getElementById('dark-theme');
let theme = '1';
icone.addEventListener('click',()=>{
    if (link.disabled) {
        theme = '1'
    } else {
        theme = '2'
    }
    link.disabled = !link.disabled;
    localStorage.setItem('THEME',theme);
})

function setTheme() {
    let localTheme = localStorage.getItem('THEME');
    if (localTheme === '2') {
        link.disabled = true;
    } else {
        link.disabled = false;
    }
}

document.ready(()=>{
    setTheme();
})