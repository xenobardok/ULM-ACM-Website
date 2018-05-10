<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar" aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto	d-block d-sm-block d-xs-block d-md-block d-lg-none d-xl-none" href="index.php"><img src="./img/acm_new_logo.png" alt=""></a>
        <div class="collapse navbar-collapse justify-content-md-center" id="myNavBar">
            <li class="nav-item <?php if ($page_name=='' || $page_name=='index.php' ){echo "active";} ?> "><a href="index.php"><i class="fas fa-home"></i></a></li>
            <li class="nav-item <?php if ($page_name=='events.php' ){echo "active";} ?>"><a href="events.php">Events</a></li>
            <li class="nav-item <?php if ($page_name=='surviving-cs.php' ){echo "active";} ?>"><a href="surviving-cs.php">Surviving CS</a></li>
            <a class="navbar-brand d-sm-none d-md-none d-none d-lg-block" href="index.php"><img src="./img/acm_new_logo.png" alt=""></a>
            <li class="nav-item <?php if ($page_name=='contacts.php' ){echo "active";} ?>"><a href="contacts.php">Contacts</a></li>
            <li class="nav-item <?php if ($page_name=='membership.php' ){echo "active";} ?>"><a href="membership.php">Membership</a></li>
            <li class="nav-item <?php if ($page_name=='faqs.php' ){echo "active";} ?>"><a href="faqs.php">FAQs</a></li>
        </div>
    </div>
    </nav>