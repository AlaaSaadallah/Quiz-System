<!-- list quizes like users > Actions: view - edit - delete - student result -->

<h1>Quizes page</h1>

<div class="card">
    <div class="card-header">
        Quizes
        <span style="float: right;">
            <a href="#" class="btn-sm icon icon-left btn-success"><i data-feather="alert-circle" style="float: right;"></i>
                Create Quiz</a>
        </span>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Grade</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Test 1</td>
                    <td>English</td>
                    <td>
                        <div class="avatar me-3">
                            <img src="dashboardTemplate/dist/assets/images/faces/1.jpg" alt="" srcset="">
                        </div>Graiden
                    Teacher</td>
                    <td>Grade 1</td>

                    <td colspan="3">
                        <a href="/quizSystem/profile.php" class="btn-sm icon icon-left btn-primary" style="margin-right: 2%;"><i data-feather="edit"></i>
                            View</a>

                        <a href="/quizSystem/admin/user_edit.php" class="btn-sm icon icon-left btn-warning" style="margin-right: 2%;"><i data-feather="alert-triangle"></i>
                            Edit</a>

                        <a href="#" class="btn-sm icon icon-left btn-danger" style="margin-right: 2%;"><i data-feather="alert-circle"></i>
                            Delete</a>
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>
</div>