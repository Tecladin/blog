const icone=document.getElementById("escuro"),link=document.getElementById("dark-theme")
icone.addEventListener("click",()=>{link.disabled?document.cookie="T=1;SameSite=Lax":document.cookie="T=1;Max-Age=-9",link.disabled=!link.disabled})