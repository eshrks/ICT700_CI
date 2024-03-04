<title>Users</title>
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
                    Users List
                    <a class="btn btn-primary" href="<?= site_url('users/add') ?>">Add new user</a>
                </h1>

                <!-- USERS TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped">

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