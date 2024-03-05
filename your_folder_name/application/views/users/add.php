<title>User Registration</title>
</head>

<body class="bg-secondary">
    <form method="post" action="<?= site_url('users/add') ?>">
        <div class="container mt-3" style="max-width: 700px;">
            <div class="card shadow-lg p-3">

                <div class="form">
                    <h3 style="text-align: center;">User's Information</h3>

                    <div class="form-group">
                        <label>User Level</label>
                        <select name="user_level" class="form-control">
                            <?php $userLevelName = (set_value('user_level') == "") ? 'Select' : set_value('user_level'); ?>
                            <?php $userLevelValue = (set_value('user_level') == "Select") ? '' : set_value('user_level'); ?>

                            <option value="<?= $userLevelValue ?>"><?= $userLevelName ?></option>
                            <option value="Admin">Admin</option>
                            <option value="IT Admin">IT Admin</option>
                            <option value="User">User</option>
                        </select>
                        <?= form_error('user_level'); ?>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?= set_value('first_name'); ?>">
                            <?= form_error('first_name'); ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Middle Name (optional)</label>
                            <input type="text" class="form-control" name="middle_name" value="<?= set_value('middle_name'); ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="<?= set_value('last_name'); ?>">
                            <?= form_error('last_name'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" value="<?= set_value('contact_number'); ?>">
                        <?= form_error('contact_number'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">User Name</label>
                        <input type="text" class="form-control" name="user_name" value="<?= set_value('user_name'); ?>">
                        <?= form_error('user_name'); ?>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="pword" value="<?= set_value('pword'); ?>">
                        <?= form_error('pword'); ?>
                    </div>

                </div>
                <input type="submit" class="btn btn-success" value="Add new user">
            </div>
        </div>
    </form>