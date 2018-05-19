<?php include_once("./includes/header.php"); ?>
    <body class="page">

    <?php include_once("./includes/navbar.php"); ?>

    <section class="container images">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./img/events/cyber-security.jpg" alt="Cyber Security">
            </div>
            <div class="carousel-item">
            <img src="./img/events/git.jpg" alt="Git Workshop">
            </div>
            <div class="carousel-item">
            <img src="./img/events/pizza-social.jpg" alt="Pizza Social">
            </div>
            <div class="carousel-item">
            <img src="./img/events/cordova.jpg" alt="Hour of Code">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="container" data-aos="fade-up" data-aos-offset="200" data-aos-once="true">
        <h2>Calendar</h2> <br>
        <div class="row">
            <div class="col-sm-12">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=a3j6k01i4i7m2hnin31sbj5pa4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FChicago" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

            </div>
        </div>
    </section>

    <section class="container"  data-aos="fade-up" data-aos-offset="200" data-aos-once="true">
        <h2>Recommend an Event</h2> <br>
        <div>
            <form action="/events.php">
            <div class="row">
                <div class="col">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="fname" placeholder="John" required="required">
                </div>
                <div class="col">
                <label for="fname">Last Name</label>                                      
                <input type="text" class="form-control" name="lname" placeholder="Doe" required="required">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="eventName">Event Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Some Cool Event Name" required="required">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <label for="comment">Event Description</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="Enter the description of the event"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Send Request</button>
            </form>
        </div>
    </section>
    </div>
    <?php include_once("./includes/footer.php") ?>
