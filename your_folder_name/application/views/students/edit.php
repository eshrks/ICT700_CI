<title>Edit Student <?= $student->id; ?></title>
</head>

<body class="bg-secondary">
    <div class="containter-fluid pb-3 pt-2" style="background-color: #e3f2fd;">
        <div class="col col-lg-4">
            <a class="btn btn-outline-primary mt-2" href="<?= site_url('students') ?>">Back to Students</a>
        </div>
    </div>
    <form method="post" action="<?= site_url('students/update/') . $student->id; ?>">
        <div class="container mt-3" style="max-width: 630px;">
            <div class="card shadow-lg p-3">

                <div class="form">

                    <h3 style="text-align: center;">Edit Student's Information</h3>


                    <div class="form-group">
                        <label>Grade Level</label>
                        <select name="grade_level" class="form-control">
                            <option value="<?= $student->grade_level ?>"><?= $student->grade_level ?></option>
                            <option value="Elementary">Elementary</option>
                            <option value="High School">High School</option>
                            <option value="College">College</option>
                        </select>
                        <?= form_error('grade_level'); ?>
                    </div>


                    <div class="form-group">
                        <label for="">Student Number</label>
                        <input type="text" class="form-control" name="student_number" id="" value="<?= $student->student_number ?>">
                        <?= form_error('student_number'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="" value="<?= $student->first_name ?>">
                        <?= form_error('first_name'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" id="" value="<?= $student->middle_name ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="" value="<?= $student->last_name ?>">
                        <?= form_error('last_name'); ?>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Midterm Grade</label>
                            <input type="text" class="form-control" name="midterm_grade" value="<?= $student->midterm_grade ?>">
                            <?= form_error('midterm_grade') ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Final Grade</label>
                            <input type="text" class="form-control" name="final_grade" value="<?= $student->final_grade ?>">
                            <?= form_error('final_grade') ?>
                        </div>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary" value="Update student">
            </div>
        </div>
    </form>