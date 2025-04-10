function loadTasks() {
    fetch('get_tasks.php')
        .then ((response) =>{
            return response.json();

        })
        .then((data) => {
            const taskList = document.getElementById('taskList');
            taskList.innerHTML = ' ';

            data.forEach((task) => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `Задача: ${task.task}`
                taskList.appendChild(listItem);
            })
        })
}

loadTasks();