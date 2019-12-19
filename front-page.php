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

                        <?php if (get_sub_field('slider_tekst')) { ?>
                            <div class="wrapper">
                                <hr />
                                <div class="text">
                                    <?php the_sub_field('slider_tekst'); ?>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

            <?php
                endwhile;
            endif;
            ?>

        </div>
        <div class="slider-button">
            <div class="text">ZGŁOŚ SIĘ</div>
        </div>
    </section>
    <div id="rekrutacja">
        <div class="wrapper">
            <a href="<?php the_field('rekrutacja_link_1'); ?>" class="rek-btn">
                <div class="text"><?php the_field('rekrutacja_tekst_1'); ?></div>
            </a>
            <a href="<?php the_field('rekrutacja_link_2'); ?>" class="rek-btn">
                <div class="text"><?php the_field('rekrutacja_tekst_2'); ?></div>
            </a>
        </div>
    </div>
    <div class="popup-ue">
        <div class="popup-ue-close">x</div>
        <div class="wrapper">
            <div class="text"><?php the_field('tekst_nad_logotypami'); ?></div>
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
                    <h2><?php the_field('naglowek_-_lewy'); ?></h2>
                    <div class="wrapper">
                        <img src="<?php the_field('obrazek_-_lewy'); ?>" />
                        <a class="btn-s" href="<?php the_field('link_-_lewy'); ?>">ZOBACZ WIĘCEJ</a>
                    </div>
                    <p>
                        <?php the_field('opis_-_lewy'); ?> </p>
                </div>
                <div class="col-12 col-md-5">
                    <hr style="margin-top:100px;" />
                    <h2><?php the_field('naglowek_-_prawy'); ?></h2>
                    <div class="wrapper">
                        <img src="<?php the_field('obrazek_-_prawy'); ?>" />
                        <a class="btn-s" href="<?php the_field('link_-_prawy'); ?>">ZOBACZ WIĘCEJ</a>
                    </div>
                    <p>
                        <?php the_field('opis_-_prawy'); ?>
                    </p>
                </div>
            </div>
        </div>

    </section>


    <?php if (get_field('for_obrazek')) { ?>

        <section id="for">
            <div class="container">
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
                    <h2>Co oferujemy?</h2>
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


    <?php if (get_field('for3_obrazek')) { ?>

        <section id="for3">
            <div class="container">
                <div class="row">

                    <img src="<?php the_field('for3_obrazek'); ?>" />

                </div>
            </div>
        </section>
    <?php } ?>


    <section id="idea">
        <div class="container">

            <div class="row" style="padding-top:100px; padding-bottom:40px;">

                <?php
                if (have_rows('pojecie')) :
                    while (have_rows('pojecie')) : the_row(); ?>

                        <div class="col-12 col-md-6" style="margin-bottom:40px;">
                            <a href="<?php the_sub_field('idea_link') ?>"><img src="<?php the_sub_field('idea_obrazek') ?>" /></a>
                            <a href="<?php the_sub_field('idea_link') ?>">
                                <h3><?php the_sub_field('idea_naglowek') ?></h3>
                            </a>
                            <?php the_sub_field('idea_tekst') ?>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </section>


    <?php if (get_field('for2_obrazek')) { ?>

        <section id="for2">
            <div class="container">
                <div class="row">

                    <img src="<?php the_field('for2_obrazek'); ?>" />

                </div>
            </div>
        </section>
    <?php } ?>





    <section id="timeline">
        <div class="container">
            <div class="row">
                <div class="col-12 section-head">
                    <hr />
                    <h2>Harmonogram</h2>
                </div>
            </div>
        </div>

        <div class="timeline-slider">

            <?php
            $glowny = 0;
            $t = 0;
            if (have_rows('timeline')) :


                while (have_rows('timeline')) : the_row();
                    $t++;
                    $t_kolor_b = $t_kolor;
                    $t_kolor = get_sub_field('t_kolor');
                    if (get_sub_field('t_glowny')) {
                        $glowny = $t - 1;
                    }
            ?>


                    <div class="event">
                        <a href="<?php the_sub_field('t_link'); ?>" class="info-box" id="box<?php echo $t; ?>">
                            <div class="img">
                                <img src="<?php the_sub_field('t_obrazek'); ?>" />
                            </div>
                            <div class="middle">
                                <div class="text">
                                    <h3><?php the_sub_field('t_naglowek'); ?></h3>
                                    <p><?php the_sub_field('t_opis'); ?></p>
                                </div>
                            </div>
                            <div class="bottom" style="background: <?php echo $t_kolor ?> ">
                                <div class="text">
                                    <?php the_sub_field('t_miejsce'); ?>
                                </div>
                            </div>
                        </a>
                        <div class="circle" style="background:<?php echo $t_kolor ?>">
                            <div class="in">
                                <?php the_sub_field('t_data'); ?>
                            </div>
                        </div>
                        <div class="line" id="line<?php echo $t; ?>"></div>
                        <style>
                            #box<?php echo $t; ?>:after {
                                border-top: 30px solid <?php echo $t_kolor ?> !important;
                            }

                            #line<?php echo $t - 1; ?> {
                                background: <?php echo $t_kolor_b ?>;
                                background: linear-gradient(90deg, <?php echo $t_kolor_b ?> 15%, <?php echo $t_kolor ?> 85%);
                            }
                        </style>
                    </div>





            <?php
                endwhile;
            endif;

            ?>
        </div>
        <style>
            .event:last-child .line {
                background: linear-gradient(90deg, <?php echo $t_kolor ?> 15%, #FBFBFB 85%) !important;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('.timeline-slider').slick({
                    arrows: false,
                    initialSlide: <?php echo $glowny; ?>,
                    slidesToShow: 1,
                    variableWidth: true,
                    infinite: false,
                    centerMode: true

                });
            });
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
                        <a href="<?php the_field('lewy_-_odnosnik'); ?>" target="_blank"><img src="<?php the_field('lewy_-_obrazek'); ?>" /></a>
                        <a href="<?php the_field('prawy_-_odnosnik'); ?>" target="_blank"><img src="<?php the_field('prawy_-_obrazek'); ?>" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_footer();
