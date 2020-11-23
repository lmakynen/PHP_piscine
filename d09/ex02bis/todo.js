var parent_list;
function addTodo(todo){
	if (todo === null || todo.length == 0)
		return;
	parent_list.prepend($('<div>' + todo + '</div>').click(removeTodo));
	saveCookie();
}
function addPrompt(){
	var todo = prompt("New TO-DO", "");
	addTodo(todo);
}
function removeTodo(){
    if (confirm("Delete TO-DO?"))
		this.remove();
	saveCookie();
}
$(document).ready(function(){
	parent_list = $('#ft_list');
	$('#new').click(addPrompt);
	$('#ft_list .to-do').click(removeTodo);
    var temp = document.cookie;
	if (temp)
	{
		var cookies = $.parseJSON(temp);
		cookies.forEach(cook =>
			addTodo(cook)
		);
	}
});
function saveCookie(){
	var todo = parent_list.children();
	var newCookie = [];
	for (var i = 0; i < todo.length; i++)
		newCookie.unshift(todo[i].innerHTML);
	document.cookie = JSON.stringify(newCookie);
}