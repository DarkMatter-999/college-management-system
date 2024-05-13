<?php

include "./header.php";

?>

<body>
    <div>
        <nav>
            <a href="#">
                <img src="./static/logo.png" width="40" alt="Logo">
            </a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    <section style="min-height: 95vh;
                width: 100%;
                background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
                                  url('./static/uni.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
        <div class="textbox">
            <img src="./static/logo.png" alt="Logo">
            <h1>Welcome to <?= $setting['school_name'] ?></h1>
        </div>
    </section>
    <section id="about">
        <div>
            <img src="./static/logo.png" alt="Logo">
        </div>
        <div>
            <h5>About Us</h5>
            <p><?= $setting['about'] ?></p>
        </div>
    </section>
    <section id="contact" class="d-flex justify-content-center align-items-center flex-column">
        <form method="post" action="api/contact.php">
            <h3>Contact Us</h3>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success'] ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </section>
    <div class="copy">
        Copyright &copy; <?= date('Y') ?> <?= $setting['school_name'] ?>. All rights reserved.
    </div>
    </div>

</body>

<?php

include "./footer.php";

?>