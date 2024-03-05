<title>Users</title>
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
                    <h1 class="col col-9">Users List
                        <a class="btn btn-primary" href="<?= site_url('users/add') ?>">Add new user</a>
                    </h1>
                    <a class="col col-3 text-center" href="<?= site_url('users/deleted') ?>"><img src="assets/img/trashbin.png" alt="Trashbin"></a>
                </div>

                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>User Level</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Contacts</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $user->user_level; ?></td>
                                    <td><?= $user->first_name; ?></td>
                                    <td><?= $user->last_name; ?></td>
                                    <td><?= $user->user_name; ?></td>
                                    <td><?= $user->contact_number; ?></td>
                                    <td>
                                        <a href="<?= site_url('users/edit/' . $user->id); ?>" class="btn btn-success">Edit</a>
                                        |
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-id="<?= $user->id; ?>">Delete</button>
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
                                <h4>Are you sure you want to delete this user?</h4>
                            </div>
                            <div class="modal-footer">
                                <form action="<?= site_url('users/delete') ?>" method="post">
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