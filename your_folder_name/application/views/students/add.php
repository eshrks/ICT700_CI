<title>Student Registration</title>
</head>

<body>
    <form method="post" action="<?= site_url('students/add') ?>">
        <div class="container mt-3" style="max-width: 630px;">
            <div class="card shadow-lg p-3">

                <div class="form">

                    <h3 style="text-align: center;">Student's Information</h3>

                    <div class="form-group">
                        <label>Grade Level</label>
                        <select name="gradeLevel" class="form-control">
                            <?php $GradeLevelName = (set_value('gradeLevel') == "") ? 'Select' : set_value('gradeLevel'); ?>
                            <?php $GradeLevelValue = (set_value('gradeLevel') == "Select") ? '' : set_value('gradeLevel'); ?>

                            <option value="<?= $GradeLevelValue; ?>"><?= $GradeLevelName; ?></option>
                            <option value="Elementary">Elementary</option>
                            <option value="High School">High School</option>
                            <option value="College">College</option>
                        </select>
                        <?= form_error('gradeLevel') ?>
                    </div>


                    <div class="form-group">
                        <label for="">Student Number</label>
                        <input type="text" class="form-control" name="studentNumber" value="<?= set_value('studentNumber') ?>">
                        <?= form_error('studentNumber') ?>
                    </div>

                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?= set_value('firstName') ?>">
                        <?= form_error('firstName') ?>
                    </div>

                    <div class="form-group">
                        <label for="">Middle Name (optional)</label>
                        <input type="text" class="form-control" name="middleName" value="<?= set_value('middleName') ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastName" value="<?= set_value('lastName') ?>">
                        <?= form_error('lastName') ?>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Midterm Grade</label>
                            <input type="text" class="form-control" name="midtermGrade" value="<?= set_value('midtermGrade') ?>">
                            <?= form_error('midtermGrade') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Final Grade</label>
                            <input type="text" class="form-control" name="finalGrade" value="<?= set_value('finalGrade') ?>">
                            <?= form_error('finalGrade') ?>
                        </div>
                    </div>

                </div>

                <input type="submit" class="btn btn-success" value="Add Student">

            </div>
        </div>
    </form>
</body>

</html>