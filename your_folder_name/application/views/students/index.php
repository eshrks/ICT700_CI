<title>Students</title>
</head>

<body class="bg-secondary">
    <section id="content">
        <div class="container-fluid">
            <div class="container text-light bg-dark shadow-lg mt-5 p-5">

                <!-- FLASHDATAS -->
                <div>
                    <?php if ($this->session->flashdata('successAdd')) : ?>
                        <?= '<p class="alert alert-success">' . $this->session->flashdata('successAdd') . '</p>'; ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('successDelete')) : ?>
                        <?= '<p class="alert alert-success">' . $this->session->flashdata('successDelete') . '</p>'; ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('successUpdate')) : ?>
                        <?= '<p class="alert alert-success">' . $this->session->flashdata('successUpdate') . '</p>'; ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('errorAdd')) : ?>
                        <?= '<p class="alert alert-danger">' . $this->session->flashdata('errorAdd') . '</p>'; ?>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('errorUpdate')) : ?>
                        <?= '<p class="alert alert-danger">' . $this->session->flashdata('errorUpdate') . '</p>'; ?>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <h1 class="col col-9">Students List
                        <a class="btn btn-primary" href="<?= site_url('students/add') ?>">Add new student</a>
                    </h1>
                    <a class="col col-3 text-center" href="<?= site_url('students/deleted') ?>"><img src="assets/img/trashbin.png" alt="Trashbin"></a>
                </div>

                <!-- TABLE -->
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
                                        <a href="<?= site_url('students/edit/'. $student->id); ?>" class="btn btn-success">Edit</a>
                                        |
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-id="<?= $student->id; ?>">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- MODAL -->
                <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="delete-modal-label">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark">
                                <h4>Are you sure you want to delete this student?</h4>
                            </div>
                            <div class="modal-footer">
                                <form action="<?= site_url('students/delete') ?>" method="post">
                                    <input type="hidden" name="id" id="delete-id" value="">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>