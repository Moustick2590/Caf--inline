<div class="container-fluid" id="navBar">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="navheader">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                <a href="" class="navbar-brand " id="lien_cafe">Café-inline<img class="img-fluid" src="/wordpress/wp-content/uploads/2019/02/logo_café-inline_petit.png" alt="logo café inline mini" id="small_icon" width="152" height="150"> </a>
                <?php wp_nav_menu( array( 'theme_location' => 'Header Menu' ) ); ?>
                <div class="d-flex social" >
                    <a class="nav-link liensocial" href="#"><i class="fab fa-linkedin"></i></a>
                    <a class="nav-link liensocial" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a class="nav-link liensocial" href="#"><i class="fab fa-twitter-square"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>