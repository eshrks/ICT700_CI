    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b3dcfa;">
            <a class="navbar-brand" href="<?= site_url('dashboard') ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('students') ?>">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('users') ?>">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>