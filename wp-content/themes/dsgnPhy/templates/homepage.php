<?php
/* Template Name: Homepage Template*/
?>
<?php

get_header()
?>

<main class="main homepage" id="homepage">


    <?php

    // get_template_part("/component/homepage/content", "hero");

    // get_template_part("/component/homepage/content", "about")
    get_template_part("/component/homepage/content", "services");
    get_template_part("/component/homepage/content", "experience");
    get_template_part("/component/homepage/content", "start");



    ?>

</main>
<?php

get_footer()
?>