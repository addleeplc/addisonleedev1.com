<?php // Template Name: Clublee Vouchers
get_header(); ?>

    <section class="template-section full beige">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2 outer-content">

                    <?php get_template_part('template-parts/content/content', 'vouchers'); ?>
                    
                    <?php wp_reset_query(); ?>

                    <?php if (function_exists("pagination")) {
                        pagination($additional_loop->max_num_pages);
                    } ?>

                </div>

            </div>

        </div>

    </section>
<!--     <section class="template-section flexi-cta full grey">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2 outer-content">

                    <div class="content">
                        <?php // show invite friends section on Black tier
                        if ( stripos($_SERVER['REQUEST_URI'],'clublee/vouchers/black') == true ) { ?>
                            <article id="invite-friends" class="feature">
                                <section>
                                    <p>Invite your friends into the Silver Tier</p>
                                    <a href="/clublee/invite-to-silver/" class="cta inverse">Invite</a>
                                </section>
                            </article>
                            <?php } ?>
                    </div>

                </div>

            </div>

        </div>

    </section> -->

    <?php get_footer(); ?>
