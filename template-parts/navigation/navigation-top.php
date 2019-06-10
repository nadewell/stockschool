<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="">
    
    </ul>
    <?php
        $args = array(
            'menu'              =>  'primary',
            'menu_class'        =>  'navbar-nav ml-auto',
            'menu_id'           =>  'main-navigation',
            'container'         =>  '',
            'theme_location'    =>  'primary',
            'walker'            => new Primary_Nav()
        );
        wp_nav_menu($args);
    ?>
    <a class="nav-link btn btn-primary" href="#">Free Trial</a>
</div>