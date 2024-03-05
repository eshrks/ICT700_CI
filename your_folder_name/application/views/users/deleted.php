<title>Users</title>
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
                    <a class="col col-3 text-center" href="<?= site_url('users') ?>"><img src="../assets/img/user.png" alt="user"></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-dark">

                        <thead>
                            <tr>
                                <th>User Level</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Username</th>
                                <th>Contacts</th>
                                <th>Option</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $user->user_level; ?></td>
                                    <td><?= $user->last_name; ?></td>
                                    <td><?= $user->first_name; ?></td>
                                    <td><?= $user->user_name; ?></td>
                                    <td><?= $user->contact_number; ?></td>
                                    <td>
                                        <a href="<?= site_url('users/restore/') . $user->id; ?>" class="btn btn-outline-primary">Restore</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </section>