<?php global $post_object, $post; ?>
<aside class="grid_4 alpha omega">
    <section class="advertising">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Viagem Cultural Sidebar -->
		<ins class="adsbygoogle"
			 style="display:inline-block;width:300px;height:250px"
			 data-ad-client="ca-pub-5125580832355198"
			 data-ad-slot="6384348260"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
    </section>
    <section class="related">
        <?php $videos = $post_object->children('video') ?>
        <?php if (!$post_object->next && !empty($videos) ): ?>
            <div class="episode grid_4 alpha omega">
                <h1>Assista o Episódio</h1>
                <ul class="clearfix">
                    <?php foreach ($videos as $video): ?>
                        <li class="grid_4 alpha omega">
                            <a href="<?php echo $video->permalink ?>">
                                <div class="episode-image clearfix">
                                    <?php echo get_the_post_thumbnail($video->base->ID, 'sidebar_thumbnail', array('class' => 'grid_2 alpha scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
                                    <img class="play" src="<?php bloginfo('template_directory'); ?>/images/play.png"/>
                                </div>
                                <h2 class="grid_2 omega"><?php echo $video->title ?></h2>
                                <span class="exhibition grid_2 omega">Programa do dia: <time><?php echo $video->broadcast_date ?></time></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>
        <div class="related-tips grid_4 alpha omega">
            <h1>Veja outras dicas</h1>
            <ul class="clearfix">
            <?php foreach ($post_object->related() as $related): ?>
                <li class="grid_4 alpha omega">
                    <a href="<?php echo $related->permalink ?>">
                        <div class="episode-image">
							<?php echo get_the_post_thumbnail($related->ID, 'sidebar_thumbnail', array('class' => 'grid_2 alpha scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
						</div>
                        <h2 class="grid_2 omega"><?php echo $related->title ?></h2>
                    </a>
                </li>                
            <?php endforeach ?>
            </ul>
        </div>
    </section>
</aside>