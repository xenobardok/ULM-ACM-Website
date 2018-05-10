<?php include_once("./includes/header.php"); ?>
<body class="page">

<?php include_once("./includes/navbar.php"); ?>
    <section class="container">
        <h2>Be a part of ACM Today!</h2> <br>
        <div>
            <form action="/membership.php">
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
                    <label for="cwid">Campus-Wide ID</label>
                    <input type="text" class="form-control" name="cwid" placeholder="eg: 30012345" required="required">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <label for="skills">Your Skills and Hobbies</label>
                <textarea class="form-control" rows="5" id="comment" placeholder="eg: Java, Python, Web Developement, Artist" required="required"></textarea>
                <small id="skillshelp" class="form-text text-muted">Note:Any CS student is welcome to ACM. The skills will not be used to decide your eligibility.</small>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Join Now!</button>
            </form>
        </div>
    </section>

<?php include_once("./includes/footer.php") ?>