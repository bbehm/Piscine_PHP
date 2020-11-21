let cookies = document.cookie.split(';');
let task_id = document.cookie ? cookies.length : 0;
// fetches all cookies and adds the tasks saved as cookies to DOM
if (task_id > 0) {
    cookies.forEach((oneTask) => {
        task_id = oneTask.split('=')[0].trim();
        let task = oneTask.split('=')[1];
        let div = $('<div></div>').attr({
            id: task_id,
            onclick: "removeToDo(" + task_id + ")"
        });
        div.text(task);
        $('#ft_list').prepend(div);
    });
}
// opens prompt on-click and saves new to do as cookie + adds to DOM
$('#newToDo').click(event => {
    event.preventDefault();
    const task = prompt("New TO DO:");
    if (task && task.trim()) {
        task_id++;
        let div = $('<div></div>').attr({
            id: task_id,
            onclick: "removeToDo(" + task_id + ")"
        });
        div.text(task);
        $('#ft_list').prepend(div);
        document.cookie = task_id + "=" + task;
    }
})
// removes a to do entry based on id
function removeToDo(task_id) {
    if (confirm("Are you sure you want to delete this TO DO?")) {
        $('#' + task_id).remove();
        document.cookie = task_id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    }
}