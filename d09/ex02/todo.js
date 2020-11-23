function removeFromList(elem) {
	var element = elem;
	if (confirm("Delete TO-DO?"))
		element.remove();
}
function addTask() {
	var text = prompt("New TO-DO");
	if (text === "" || text === null)
		return ;
	addToList(text);
}
function addToList(text)
{
	var div = document.createElement('div');
	var textnode = document.createTextNode(text);
	var list = document.getElementById("ft_list");
	div.appendChild(textnode);
	div.setAttribute("onClick", "removeFromList(this)");
	list.appendChild(div);
	list.insertBefore(div, list.childNodes[0]);
}
window.onload = function() {
	var cookies = document.cookie;
	if (cookies)
	{
		var tmp = null;
		tmp = JSON.parse(cookies);
		if (tmp) {
			tmp.forEach(function (i) {
				addToList(i);
			});
		}
	}
}
window.onunload = function() {
	var list = document.getElementById("ft_list").children;
	var freshcookie = [];
	for (var i=0; i<list.length; i++) {
		freshcookie.unshift(list[i].innerHTML);
	}
	document.cookie = JSON.stringify(freshcookie);
}