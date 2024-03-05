<title>Student Registration</title>
</head>

<body class="bg-secondary">
    <form method="post" action="<?= site_url('students/add') ?>">
        <div class="container mt-3" style="max-width: 630px;">
            <div class="card shadow-lg p-3">

                <div class="form">
                    <h3 style="text-align: center;">Student's Information</h3>

                    <div class="form-group">
                        <label>Grade Level</label>
                        <select name="grade_level" class="form-control">
                            <?php $GradeLevelName = (set_value('grade_level') == "") ? 'Select' : set_value('grade_level'); ?>
                            <?php $GradeLevelValue = (set_value('grade_level') == "Select") ? '' : set_value('grade_level'); ?>

                            <option value="<?= $GradeLevelValue; ?>"><?= $GradeLevelName; ?></option>
                            <option value="Elementary">Elementary</option>
                            <option value="High School">High School</option>
                            <option value="College">College</option>
                        </select>
                        <?= form_error('grade_level') ?>
                    </div>


                    <div class="form-group">
                        <label for="">Student Number</label>
                        <input type="text" class="form-control" name="student_number" value="<?= set_value('student_number') ?>">
                        <?= form_error('student_number') ?>
                    </div>

                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="<?= set_value('first_name') ?>">
                        <?= form_error('first_name') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Middle Name (optional)</label>
                        <input type="text" class="form-control" name="middle_name" value="<?= set_value('middle_name') ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="<?= set_value('last_name') ?>">
                        <?= form_error('last_name') ?>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Midterm Grade</label>
                            <input type="text" class="form-control" name="midterm_grade" value="<?= set_value('midterm_grade') ?>">
                            <?= form_error('midterm_grade') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Final Grade</label>
                            <input type="text" class="form-control" name="final_grade" value="<?= set_value('final_grade') ?>">
                            <?= form_error('final_grade') ?>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-success" value="Add new student">
            </div>
        </div>
    </form>
</body>

</html>