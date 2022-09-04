const i = document.getElementById('escuro'),link = document.getElementById('dark-theme');
i.addEventListener('click',()=>{
    link.disabled=!link.disabled;
    if (link.disabled) {
        document.cookie = "T=1;SameSite=Lax;Max-Age=-9" //tema escuro
    } else {
        document.cookie = "T=1;SameSite=Lax" //tema claro
    }
    IconOver()
})
function IconOver(){
    if (link.disabled) {
        i.innerHTML ='\ue801' //tema escuro
    } else {
        i.innerHTML ='\ue803'; //tema claro
    }
}
i.addEventListener('mouseover',IconOver);

i.addEventListener('mouseleave',()=>{
    if (link.disabled) {
        i.innerHTML ='\ue804' //tema escuro
    } else {
        i.innerHTML ='\ue802' //tema claro
    }
})