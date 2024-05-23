<?php

include "./header.php";

?>

<body>
    <nav>
        <a href="#">
            <img src="./static/logo.png" width="40px" alt="Logo">
        </a>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="login.php" class="login-button">Login</a>
    </nav>
    <section style="min-height: 92vh;
                width: 100%;
                background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
                                  url('./static/uni.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">
        <div class="textbox">
            <img src="./static/logo.png" alt="Logo">
            <h1>Welcome to <?= $setting['college_name'] ?></h1>
            <p> <?= $setting['slogan'] ?></p>
        </div>
    </section>
    <section id="about">
        <h2>About Us</h2>
        <p><?= $setting['about'] ?></p>
        <div class="row">
            <div class="course-col">
                <h5>CSE</h5>
                <img class="imge" src="./static/logo.png" alt="Logo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, deleniti eaque omnis dolores molestiae enim harum! Placeat libero eum amet perferendis tempore. Ipsam soluta ut officiis atque laborum veritatis voluptatum!</p>
            </div>
            <div class="course-col">
                <h5>ME</h5>
                <img class="imge" src="./static/logo.png" alt="Logo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, deleniti eaque omnis dolores molestiae enim harum! Placeat libero eum amet perferendis tempore. Ipsam soluta ut officiis atque laborum veritatis voluptatum!</p>
            </div>
            <div class="course-col">
                <h5>EE</h5>
                <img class="imge" src="./static/logo.png" alt="Logo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, deleniti eaque omnis dolores molestiae enim harum! Placeat libero eum amet perferendis tempore. Ipsam soluta ut officiis atque laborum veritatis voluptatum!</p>
            </div>
        </div>
    </section>
    <section id="contact" class="d-flex justify-content-center align-items-center flex-column">
        <form method="post" action="api/contact.php">
            <h2>Contact Us</h2>
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
    <div class="content-wrapper">
        <div class="content">
            <div class="contact-info">
                <p><strong><?= $setting['college_name'] ?></strong></p>
                <p class="sqsrte-small">
                    <?= $setting['college_name'] ?><br> Placeholder Address<br>
                </p>
                <p class="sqsrte-small">
                    Phone Number: Placeholder No.
                </p>
                <p class="sqsrte-small">
                    Email: <a href="">Placeholder Email</a>
                </p>
            </div>
        </div>
    </div>
    <div class="copy">
        Copyright &copy; <?= date('Y') ?> <?= $setting['college_name'] ?>. All rights reserved.
    </div>
    </div>
</body>

<?php

include "./footer.php";

?>
