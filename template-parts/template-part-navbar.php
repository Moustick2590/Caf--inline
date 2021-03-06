<div class="container-fluid" id="navBar">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-expand-lg" id="navheader">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon burger"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarTogglerDemo01">
                <a href="http://localhost/wordpress/accueil" class="col-md-3 navbar-brand " id="lien_cafe">Café-inline<img class="img-fluid" src="/wordpress/wp-content/uploads/2019/02/logo_café-inline_petit.png" alt="logo café inline mini" id="small_icon" width="152" height="150"> </a>
                <div class="col-md-6">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class'=> 'headerMenu_class' ) ); ?>
                </div>
                <div class="col-md-2 d-flex social" >
                    <a class="nav-link liensocial" target="_blank" href="https://www.linkedin.com/company/access-code-school/about/"><i class="fab fa-linkedin"></i></a>
                    <a class="nav-link liensocial" target="_blank" href="https://www.facebook.com/AccessCodeSchool/"><i class="fab fa-facebook-square"></i></a>
                    <a class="nav-link liensocial" target="_blank" href="https://twitter.com/accesscodeofp?lang=fr"><i class="fab fa-twitter-square"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>