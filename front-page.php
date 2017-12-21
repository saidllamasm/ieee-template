<?php get_header(); ?>
    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title"><?php echo cs_get_option( 'title_section_one' );?></h2>
                    <h5 class="description"><?php echo cs_get_option( 'content_section_one' );?></h5>
                </div>
            </div>
            <div class="separator separator-ieee"></div>
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left" style="background-image: url('<?php echo cs_get_option( 'image_one' );?>')">
                            <!-- First image on the left side -->
                            <p class="blockquote blockquote-ieee"><?php echo cs_get_option( 'content_frase' );?>
                                <br>
                                <br>
                                <small>-<?php echo cs_get_option( 'author_frase' );?></small>
                            </p>
                        </div>
                        <!-- Second image on the left side of the article -->
                        <div class="image-container" style="background-image: url('<?php echo cs_get_option( 'image_two' );?>')"></div>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right" style="background-image: url('<?php echo cs_get_option( 'image_three' );?>')"></div>
                        <h3><?php echo cs_get_option( 'title_section_two' );?></h3>
                        <p><?php echo cs_get_option( 'content_section_two' );?></p>
                        <p><?php echo cs_get_option( 'content_section_two_two' );?></p>
                        <p><?php echo cs_get_option( 'content_section_two_three' );?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-team text-center">
        <div class="container">
            <h2 class="title">Asamblea directiva 2018</h2>
            <div class="team">
                <div class="row">
                    <?php
                        $members = cs_get_option( 'members' );
                        if( ! empty( $members ) ) {
                          foreach ( $members as $member ) { ?>
                              <div class="col-md-4">
                                <div class="team-player">
                                    <img src="<?php echo $member['member_pic']; ?>" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                    <h4 class="title"><?php echo $member['member_name']; ?></h4>
                                    <p class="category text-ieee"><?php echo $member['member_job']; ?></p>
                                    <p class="description"><?php echo $member['member_desc']; ?></p>
                                    <?php if(!empty($member['member_tw'])) {?>
                                    <a href="<?php echo $member['member_tw']; ?>" class="btn btn-ieee btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                    <?php } if(!empty($member['member_mail'])) { ?>
                                    <a href="<?php echo $member['member_mail']; ?>" class="btn btn-ieee btn-icon btn-round"><i class="fa fa-envelope-o"></i></a>
                                    <?php } if(!empty($member['member_fb'])) { ?>
                                    <a href="<?php echo $member['member_fb']; ?>" class="btn btn-ieee btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                          <?php }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-next-events text-center">
        <div class="container">
            <h2 class="title">Próximos eventos</h2>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <?php
                        $events = cs_get_option( 'events' );
                        if( ! empty( $events ) ) {
                          foreach ( $events as $event ) { ?>
                            <div class="info info-horizontal">
                                <div class="icon icon-ieee">
                                    <i class="<?php echo $event['event_icon']; ?>"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title"><?php echo $event['event_title']; ?></h4>
                                    <p class="description"><?php echo $event['event_desc']; ?></p>
                                </div>
                            </div>
                          <?php }
                        }
                    ?>
                    
                </div>
                <div class="col-md-4 mr-auto">
                    <div class="card card-background card-background-product card-raised" style="background-image: url('http://demos.creative-tim.com/now-ui-kit-pro/assets/img/project9.jpg')">
                        <div class="card-body">
                            <h2 class="card-title">PARTICIPA CON NOSOTROS.</h2>
                            <p class="card-description text-white">
                                Aprende de la mano de los mejores
                            </p>
                            <a href="<?php echo cs_get_option('url_app_register'); ?>" class="pointer"><label class="badge badge-neutral">INSCRIBIRME</label></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode(cs_get_option('contact_shortcode'));?>
<?php get_footer(); ?>