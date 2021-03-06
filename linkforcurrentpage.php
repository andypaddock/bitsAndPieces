<!-- Add a class to something if its the same as the current page, outside of standard WordPress 'currentpage' system  -->

<div class="toggle-list">
            <div class="sticky">

               <?php $actual_link = get_permalink(); ?>
                <?php if( have_rows('services_toggle', '118') ):
                    while( have_rows('services_toggle', '118') ): the_row();
                    ?>
                <?php $page_link = get_sub_field('page_link', '118'); ?>
                <div class="toggle-list__item">
                    <div class="trigger"></div>
                    <div class="heading heading__4">
                        <a
                            href="<?php the_sub_field('page_link', '118'); ?>"><?php the_sub_field('heading', '118');?></a>
                    </div>
                    <div class="target <?php if ( $actual_link == $page_link ) { echo 'open'; } else {} ?>">
                        <?php the_sub_field('content', '118');?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>


        </div>
