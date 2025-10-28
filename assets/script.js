$(document).ready(function() {
    loadTasks();

    $("#addBtn").click(function() {
        let task = $("#taskInput").val();
        if (task.trim() === "") return alert("Please enter a task");
        $.post("add_task.php", { task: task }, function() {
            $("#taskInput").val("");
            loadTasks();
        });
    });

    $(document).on("click", ".delete-btn", function() {
        let id = $(this).data("id");
        $.post("delete_task.php", { id: id }, function() {
            loadTasks();
        });
    });

    function loadTasks() {
        $.get("fetch_tasks.php", function(data) {
            $("#taskList").html(data);
        });
    }
});
