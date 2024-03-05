    <title>Edit User <?= $user->id; ?></title>
    </head>

    <body class="bg-secondary">
        <div class="containter-fluid pb-3 pt-2" style="background-color: #e3f2fd;">
            <div class="col col-lg-4">
                <a class="btn btn-outline-primary mt-2" href="<?= site_url('users') ?>">Back to users</a>
            </div>
        </div>
        <form method="post" action="<?= site_url('users/update/') . $user->id; ?>">
            <div class="container mt-3" style="max-width: 700px;">
                <div class="card shadow-lg p-3">

                    <div class="form">

                        <h3 style="text-align: center;">Edit User's Information</h3>


                        <div class="form-group">
                            <label>User Level</label>
                            <select name="user_level" class="form-control">
                                <option value="<?= $user->user_level ?>"><?= $user->user_level ?></option>
                                <option value="Admin">Admin</option>
                                <option value="IT Admin">IT Admin</option>
                                <option value="User">User</option>
                            </select>
                            <?= form_error('user_level'); ?>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="" value="<?= $user->first_name ?>">
                                <?= form_error('first_name'); ?>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="">Middle Name (optional)</label>
                                <input type="text" class="form-control" name="middle_name" id="" value="<?= $user->middle_name ?>">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="" value="<?= $user->last_name ?>">
                                <?= form_error('last_name'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" id="" value="<?= $user->contact_number ?>">
                            <?= form_error('contact_number'); ?>
                        </div>

                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text" class="form-control" name="user_name" id="" value="<?= $user->user_name ?>">
                            <?= form_error('user_name'); ?>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="pword" id="" value="<?= $user->pword ?>">
                            <?= form_error('pword'); ?>
                        </div>

                    </div>
                    <input type="submit" class="btn btn-primary" value="Update user">
                </div>
            </div>
        </form>