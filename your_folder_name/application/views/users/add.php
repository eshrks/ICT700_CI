<title>User Registration</title>
</head>

<body>
    <form method="post" action="<?= site_url('users/add') ?>">
        <div class="container mt-3" style="max-width: 700px;">
            <div class="card shadow-lg p-3">

                <div class="form">
                    <h3 style="text-align: center;">User's Information</h3>

                    <div class="form-group">
                        <label>User Level</label>
                        <select name="userLevel" class="form-control">
                            <?php $UserLevelName = (set_value('userLevel') == "") ? 'Select' : set_value('userLevel'); ?>
                            <?php $UserLevelValue = (set_value('userLevel') == "Select") ? '' : set_value('userLevel'); ?>

                            <option value="<?= $UserLevelValue ?>"><?= $UserLevelName ?></option>
                            <option value="Admin">Admin</option>
                            <option value="IT Admin">IT Admin</option>
                            <option value="User">User</option>
                        </select>
                        <?= form_error('userLevel'); ?>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="firstName" value="<?= set_value('firstName'); ?>">
                            <?= form_error('firstName'); ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Middle Name (optional)</label>
                            <input type="text" class="form-control" name="middleName" value="<?= set_value('middleName') ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value="<?= set_value('lastName'); ?>">
                            <?= form_error('lastName'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="contactNumber" value="<?= set_value('contactNumber'); ?>">
                        <?= form_error('contactNumber'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="userName" value="<?= set_value('userName'); ?>">
                        <?= form_error('userName'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" value="<?= set_value('password'); ?>">
                        <?= form_error('password'); ?>
                    </div>

                </div>
                <input type="submit" class="btn btn-success" value="Add User">
            </div>
        </div>
    </form>