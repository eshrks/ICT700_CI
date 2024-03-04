<title>Students</title>
</head>

<body>
    <section id="content">
        <div class="container-fluid">
            <div class="container shadow-lg mt-5 p-5">

                <!-- FLASHDATAS -->
                <div>
                    <?php if ($this->session->flashdata('successAdd')) : ?>
                        <?= '<p class="alert alert-success">' . $this->session->flashdata('successAdd') . '</p>'; ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('errorAdd')) : ?>
                        <?= '<p class="alert alert-danger">' . $this->session->flashdata('errorAdd') . '</p>'; ?>
                    <?php endif; ?>
                </div>

                <h1 class="col col-9">
                    Students List
                    <a class="btn btn-primary" href="<?= site_url('students/add') ?>">Add new student</a>
                </h1>

                <!-- STUDENTS TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped">

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
                                        <a href="#">Edit</a>
                                        |
                                        <a href="#">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </section>