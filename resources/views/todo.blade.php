<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand h1" href="#">Todos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li type="button" class="nav-item" id="todoBtn">
                        <a class="nav-link active" >Todos</a>
                    </li>
                    <li type="button" class="nav-item" id="tagBtn">
                        <a class="nav-link" href="tag-view.php">Tags</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('home') }}" class="btn btn-outline-primary text-decoration-none ">Log Out</a>
        </div>
    </nav>
    <div class="container py-5 d-block" id="todoContainer">
        <h1 class="text-center">Your Todos</h1>
        <div class="d-flex gap-2 w-100 justify-content-between mt-3">
            <button class="btn btn-outline-primary d-flex gap-2" data-bs-toggle="modal" data-bs-target="#todoModal">
                <span>Add Todo</span>
                <i class="bi bi-plus-lg"></i>
            </button>
            <form action="todo-view.php" method="post" class="d-flex gap-2">
                <input type="date" name="search_date" class="form-control">
                <input type="submit" name="search_date_btn" class="btn btn-outline-primary" value="search">
            </form>
            <form action="todo-view.php" method="post" class="d-flex gap-2">
                <input type="search" name="search_activity" class="form-control" placeholder="Search activity...">
                <input type="submit" name="search_activity_btn" class="btn btn-outline-primary" value="Search">
            </form>
        </div>
        <div class="row gap-3 mt-4 justify-content-center ">
            <div class="col-3 bg-body-tertiary p-0 pb-1 overflow-hidden rounded d-flex flex-column gap-2 text-wrap">
                <div class="d-flex align-items-center bg-primary p-3 text-white w-100 justify-content-between ">
                    <div class="d-flex gap-2 align-items-center">
                        <h4>Makan</h4>
                    </div>
                    <div class="dropdown drop">
                        <button class="dropdown-toggle bg-transparent text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; outline: none">
                            <i class="fa fa-ellipsis"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="" method="post" id="updateTodo">
                                    <button type="button" class="d-flex gap-2 align-items-center bg-transparent px-3" id="updateBtn" data-bs-toggle="modal" value="" data-bs-target="#updateModal" name="update_todo" style="border: none; outline: none;">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <span>Update</span>
                                    </button>
                                </form>
                                <form action="todo-view.php" method="post">
                                    <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn d-flex align-items-center gap-2 bg-transparent px-3" value="" name="delete_todo" style="border: none; outline: none;">
                                        <i class="fa fa-xmark"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-4 py-2 d-flex flex-column gap-3">
                    <div class="d-flex gap-2 align-items-center ">
                        <i class="fa fa-calendar-minus text-muted"></i>
                        <span>2024-02-02</span>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa fa-calendar-minus text-muted "></i>
                        <span>2024-02-02</span>
                    </div>
                    <div>
                        <div class="d-flex gap-2 align-items-center">
                            <i class="fa fa-tag text-muted "></i>
                            <span>Productivity</span>
                        </div>
                    </div>
                    <form action="todo-view.php" method="post" class="p-0">
                        <button type="submit" name="to_undone" class=" bg-transparent p-0 d-flex gap-2 align-items-center " value="" style="border: none; outline: none">
                            <i class="fa fa-check-square text-muted" ></i>
                            <span>Done</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="todoModal" tabindex="-1" aria-labelledby="todoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Add New Todo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="todo-view.php" method="post" class="d-flex flex-column gap-3">
                        <div>
                            <label for="activity">Activity</label>
                            <input type="text" name="activity" placeholder="Enter your activity" class="form-control">
                        </div>
                        <div>
                            <label for="tags">Tag</label>
                            <select name="tags" id="tags" class="form-select">
                                <option value="" hidden>Select Tag</option>
                                <option value="1">Productivity</option>
                            </select>
                        </div>
                        <div>
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div>
                            <label for="start_date">End Date</label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <input type="submit" name="add_todo" class="btn btn-primary w-25" id="loginBtn" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title update fs-5" id="loginModalLabel">Update Todo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="todo-view.php" id="updateTodoForm" method="post" class="d-flex flex-column gap-3 update-todo-modal">
                        <div>
                            <label>Activity</label>
                            <input type="text" name="activity" id="activityUpdate" placeholder="Enter your activity" class="form-control" >
                        </div>
                        <div>
                            <label for="tags">Tag</label>
                            <select name="tags" id="tagsUpdate" class="form-select">
                                <option value="" hidden>Select Tag</option>
                                <option value="1">Productivity</option>
                            </select>
                        </div>
                        <div>
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="startDateUpdate" class="form-control">
                        </div>
                        <div>
                            <label for="start_date">End Date</label>
                            <input type="date" name="end_date" id="endDateUpdate" class="form-control">
                        </div>
                        <input type="hidden" id="todoIDField" name="todo_id" >
                        <input type="submit" name="update_todo" class="btn btn-primary w-25" id="loginBtn" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./main.js"></script>
    <script src="https://kit.fontawesome.com/268638873b.js" crossorigin="anonymous"></script>
</body>
</html>
