<?php
get_header();
?>

<?php $img = get_theme_file_uri(); ?>

<div id="content" class="site-content">
    <section id="slider">
        <div class="slick-slider">

            <?php
            if (have_rows('slider')) :
                while (have_rows('slider')) : the_row(); ?>

                    <div class="slide" style=" background-image:url('<?php the_sub_field('slider_obrazek'); ?>')">
                        <div class="wrapper">
                            <hr />
                            <div class="text">
                                <?php the_sub_field('slider_tekst'); ?>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>

        </div>
        <div class="slider-button">
            <div class="text">Rekrutacja</div>
        </div>
    </section>
    <div id="rekrutacja">
        <div class="wrapper">
            <a href="#" class="rek-btn">
                <div class="text">Rekrutacja 1</div>
            </a>
            <a href="#" class="rek-btn">
                <div class="text">Rekrutacja 2</div>
            </a>
        </div>
    </div>
    <div class="popup-ue">
        <div class="popup-ue-close">x</div>
        <div class="wrapper">
            <div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda sit quod voluptatum, pariatur deleniti vero molestias earum expedita error lab.</div>
            <div class="logotypy">
                <img src="<?php echo $img ?>/img/logo_program_regionalny.jpg" />
                <img src="<?php echo $img ?>/img/logo_rp.png" />
                <img src="<?php echo $img ?>/img/logo_malopolska.png" />
                <img src="<?php echo $img ?>/img/logo_fundusz.jpg" />
            </div>
        </div>

    </div>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <hr />
                    <h2>O projekcie</h2>
                    <div class="wrapper">
                        <img src="https://oees.pl/wp-content/uploads/2019/09/OEES_2019_slider_1369x674px_mapa_miejsc_v3.jpg" />
                        <a class="btn-s" href="#">ZOBACZ WIĘCEJ</a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ratione maxime excepturi neque iste eligendi veniam repellat voluptate similique, debitis sed minus quos libero et ducimus doloremque reiciendis ipsa obcaecati.
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <hr style="margin-top:100px;" />
                    <h2>Aktualności</h2>
                    <div class="wrapper">
                        <img src="http://oees.pl/wp-content/uploads/2019/05/MOEEH-promocja-firm-idei_www2-1.png" />
                        <a class="btn-s" href="#">ZOBACZ WIĘCEJ</a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit laudantium quis voluptate veritatis architecto! Eum ratione maxime excepturi neque iste eligendi veniam repellat voluptate similique.
                    </p>
                </div>
            </div>
        </div>

    </section>


    <?php if (get_field('for_obrazek')) { ?>

        <section id="for">
            <div class="container-fluid">
                <div class="row">

                    <img src="<?php the_field('for_obrazek'); ?>" />

                </div>
            </div>
        </section>
    <?php } ?>


    <section id="oferta">
        <div class="container">
            <div class="row">
                <div class="col-12 section-head">
                    <hr />
                    <h2>Co oferujemy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="<?php the_field('oferujemy1_link'); ?>" class="wrapper">
                        <div class="text-wrap">
                            <div class="text">
                                <?php the_field('oferujemy1_tekst'); ?>
                            </div>
                        </div>
                        <img src="<?php the_field('oferujemy1_zdjecie'); ?>" />
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="<?php the_field('oferujemy2_link'); ?>" class="wrapper">
                        <div class="text-wrap">
                            <div class="text">
                                <?php the_field('oferujemy2_tekst'); ?>
                            </div>
                        </div>
                        <img src="<?php the_field('oferujemy2_zdjecie'); ?>" />
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="<?php the_field('oferujemy3_link'); ?>" class="wrapper">
                        <div class="text-wrap">
                            <div class="text">
                                <?php the_field('oferujemy3_tekst'); ?>
                            </div>
                        </div>
                        <img src="<?php the_field('oferujemy3_zdjecie'); ?>" />
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="idea">
        <div class="container">
            <div class="row">
                <div class="col-12 section-head">
                    <hr />
                    <h2>Idea pojęć</h2>
                </div>
            </div>
            <div class="row">

                <?php
                if (have_rows('pojecie')) :
                    while (have_rows('pojecie')) : the_row(); ?>

                        <div class="col-12 col-md-6" style="margin-bottom:40px;">
                            <img src="<?php the_sub_field('idea_obrazek') ?>" />
                            <h3><?php the_sub_field('idea_naglowek') ?></h3>
                            <?php the_sub_field('idea_tekst') ?>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>


    <script type="text/javascript" src="//unpkg.com/vis-timeline@latest/dist/vis-timeline-graph2d.min.js"></script>
    <link href="//unpkg.com/vis-timeline@latest/dist/vis-timeline-graph2d.min.css" rel="stylesheet" type="text/css" />



    <section id="timeline">
        <div class="container">
            <div class="row">
                <div class="col-12 section-head">
                    <hr />
                    <h2>Harmonogram</h2>
                </div>
            </div>
        </div>
        <div id="visualization"></div>
        <script type="text/javascript">
            // DOM element where the Timeline will be attached
            var container = document.getElementById('visualization');

            // Create a DataSet (allows two way data-binding)
            var items = new vis.DataSet([
                <?php
                if (have_rows('harmonogram')) :
                    $i = 1;
                    while (have_rows('harmonogram')) : the_row();
                        ?> {
                            id: <?php echo $i ?>,
                            content: '<a class="vis-custom" href="#"><div class="title"><?php echo the_sub_field('nazwa'); ?></div><div class="place"><?php echo the_sub_field('miejsce'); ?></div><div class="date"><?php echo the_sub_field('data'); ?></div></a>',
                            start: '<?php echo the_sub_field('data'); ?>'
                        },

                <?php $i++;
                    endwhile;

                else :


                endif;

                ?>
            ]);





            // Configuration for the Timeline

            if ($(window).width() > 992) {

                var options = {
                    height: '300px',
                    zoomable: false,
                    start: '2018',
                    end: '2020',
                    min: '2017',
                    max: '2023',
                    showMinorLabels: false,
                    timeAxis: {
                        scale: 'month',
                        step: 1
                    }
                };
            } else {
                var options = {
                    height: '300px',
                    zoomable: false,
                    start: '2019',
                    end: '2020',
                    min: '2017',
                    max: '2023',
                    showMinorLabels: false,
                    timeAxis: {
                        scale: 'month',
                        step: 1
                    }
                };
            }

            // Create a Timeline
            var timeline = new vis.Timeline(container, items, options);
            this.timeline.moveTo(Date.now());
        </script>
    </section>

    <section id="logotypy-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="font-size:13px; margin-bottom:50px;">Projekt „Małopolska Open Eyes Economy Hub – promocja zagraniczna małopolskich FIRM-IDEI realizowany jest w ramach Regionalnego Programu Operacyjnego Województwa Małopolskiego na lata 2014 – 2020, w ramach 3 Osi Priorytetowej „Przedsiębiorcza Małopolska”, Działanie 3.3 „Umiędzynarodowienie małopolskiej gospodarki”, Poddziałanie 3.3.1 „Promocja gospodarcza Małopolski”.

                        Projekt jest współfinansowany ze środków Unii Europejskiej w ramach Europejskiego Funduszu Rozwoju Regionalnego.

                        Realizatorami projektu są Fundacja Gospodarki i Administracji Publicznej oraz Fundacja Warsztat Innowacji Społecznych.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <a href="http://fundacjagap.pl" target="_blank"><img src="<?php echo $img ?>/img/fgap_logo.png" /></a>
                        <a href="http://warsztat.org.pl/" target="_blank"><img src="<?php echo $img ?>/img/WIS_poziom.jpg" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_footer();
