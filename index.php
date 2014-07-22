<?php get_header(); ?>
<section class="container_12">
    <?php $next_trip = \ViagemCultural\Travel::next(); ?>
    <?php if ($next_trip): ?>
        <section class="next-trip box grid_12">
            <div class="next-trip-image grid_12 alpha omega">
                <?php echo get_the_post_thumbnail($next_trip->ID, 'trip_thumbnail', array('class' => 'scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
            </div>
            <div class="next-trip-info grid_12 alpha omega">
                <span>Próxima parada:</span>
                <h1><?php echo $next_trip->title ?></h1>
                <a href="<?php echo $next_trip->permalink ?>" class="button-white">Saiba mais</a>
            </div>
        </section>
    <?php else: ?>
        <?php // teaser fixo para a página institucional quando não tiver próxima viagem ?>
    <?php endif; ?>   

    <section class="last-trips grid_12">
        <div class="title grid_12 alpha omega">
            <h1>Ultimas Viagens</h1>
            <a href="#" class="button-blue">Mais viagens</a>
        </div>
        <ul class="trips">
            <?php foreach (array_slice($next_trip->siblings(), 0, 3) as $trip): ?>
                <?php $video = $trip->children('video'); $video = $video[0]; ?>
                <li class="trip box shadow grid_4 alpha">
                    <div class="trip-image">
                        <?php echo get_the_post_thumbnail($trip->ID, 'tip_thumbnail', array('class' => 'scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
                    </div>
                    <div class="trip-info">
                        <h2><?php echo $trip->title ?></h2>
                        <a href="<?php echo $trip->permalink ?>" class="button-white more">Saiba mais</a>
                        <a href="<?php echo $video->permalink ?>" class="button-white watch">Assistir o programa</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="social grid_12">
        <div class="grid_6 alpha">
            <h2>Curta a nossa página</h2>
            <div class="facebook box">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fprogramaviagemcultural&amp;width=400&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1386894271558535" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:260px;" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="grid_6 omega">
            <h2>Compartilhe nas redes sociais</h2>
            <div class="sharing box">
                <ul>
                    <li>
                        <span>Curta no Facebook</span>
                        <div>
                            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.viagemcultural.com.br%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=1386894271558535" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                        </div>
                    </li>
                    <li>
                        <span>Compartilhe no Twitter</span>
                        <div>
                            <a href="https://twitter.com/share" class="twitter-share-button" data-text="Viagem Cultural - O melhor site de dicas de viagem!" data-lang="pt">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                    </li>
                    <li>
                        <span>Recomende no Plus</span>
                        <div>
                            <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
                            <div class="g-plusone" data-size="medium" data-href="http://www.viagemcultural.com.br"></div>

                            <!-- Posicione esta tag depois da última tag do botão +1. -->
                            <script type="text/javascript">
                                window.___gcfg = {lang: 'pt-BR'};

                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                    </li>
                    <li>
                        <span>Assine nosso Feed</span>
                        <div></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>