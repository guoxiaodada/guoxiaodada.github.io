var menu=document.getElementById('menu')
var menub=document.getElementById('menub')
var ul=document.getElementById('ul')
menu.addEventListener('click',function() {
	slide()
},false)
menub.addEventListener('click',function() {
	slideb()
},false)
function slide(){
	menu.style.display="none"
	menub.style.display="block"
	ul.style.height="300px"
	ul.style.opacity="1"
}
function slideb(){
	menu.style.display="block"
	menub.style.display="none"
	ul.style.height="0";
	ul.style.opacity="0"
}