<!DOCTYPE htme>
<html lang="da">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php wp_head();?>
    </head>
    
    <header>
        <?php
            wp_nav_menu (
                       
                    array(
                           
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation'
                            
                    )
                        
                );
        ?>
    </header>
    
    <body <?php body_class();?>>
    
