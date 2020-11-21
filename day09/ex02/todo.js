let cookies = document.cookie.split(';');
let task_id = document.cookie ? cookies.length : 0;
// fetches all cookies and adds the tasks saved as cookies to DOM
if (task_id > 0) {
    cookies.forEach((oneTask) => {
        task_id = oneTask.split('=')[0].trim();
		let task = oneTask.split('=')[1];
		const parent = document.getElementById('ft_list');
		let newTask = document.createElement('div');
		newTask.innerHTML = task;
		newTask.setAttribute('id', task_id);
		newTask.setAttribute('onclick', "removeToDo(" + task_id + ")");
		parent.insertBefore(newTask, parent.firstChild);
    });
}
// opens prompt on-click and saves new to do as cookie + adds to DOM
document.getElementById('new').addEventListener('click', e => {
    e.preventDefault();
    const task = prompt("New TO DO:")
    if (task && task.trim()) {
        task_id++;
		const parent = document.getElementById('ft_list');
		let newTask = document.createElement('div');
		newTask.innerHTML = task;
		newTask.setAttribute('id', task_id);
		newTask.setAttribute('onclick', "removeToDo(" + task_id + ")");
		parent.insertBefore(newTask, parent.firstChild);
        document.cookie = task_id + "=" + task;
    }
})
// removes a to do entry based on id
function removeToDo(task_id) {
    if (confirm("Are you sure you want to delete this TO DO?")) {
        let parent = document.getElementById("ft_list");
        let task = document.getElementById(task_id);
        parent.removeChild(task);
        document.cookie = task_id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    }
}