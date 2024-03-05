<title>Students</title>
</head>

<body class="bg-secondary">
    <section id="content">
        <div class="container-fluid">
            <div class="container text-light bg-dark shadow-lg mt-5 p-5">

                <?php if ($this->session->flashdata('successRestore')) : ?>
                    <?= '<p class="alert alert-success">' . $this->session->flashdata('successRestore') . '</p>'; ?>
                <?php endif; ?>

                <div class="row">
                    <h1 class="col col-9">Recently Deleted List</h1>
                    <a class="col col-3 text-center" href="<?= site_url('students') ?>"><img src="../assets/img/student.png" alt="student"></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thread>
                            <tr>
                                <th>Grade Level</th>
                                <th>Student Number</th>
                                <th>Full Name</th>
                                <th>Midterm Grade</th>
                                <th>Final Grade</th>
                                <th>Option</th>
                            </tr>
                        </thread>

                        <tbody>
                            <?php foreach ($students as $student) : ?>
                                <tr>
                                    <td><?= $student->grade_level ?> </td>
                                    <td><?= $student->student_number ?> </td>
                                    <td><?= $student->first_name . " " . $student->last_name ?> </td>
                                    <td><?= $student->midterm_grade ?> </td>
                                    <td><?= $student->final_grade ?> </td>
                                    <td>
                                        <a href="<?= site_url('students/restore/'. $student->id); ?>" class="btn btn-outline-primary">Restore</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
