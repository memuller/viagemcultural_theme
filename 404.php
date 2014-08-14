<?php get_header(); ?>
<section class="container container_12">
    <section class="grid_12 box error">
		<h1>Desculpe-nos!</h1>
		<h2>Esta página não foi encontrada ou não existe conteúdo disponível.</h2>
		<span>O que você procura pode estar nas dicas <a href="<?php echo home_url('/regiao/'.'internacional') ?>">internacionais</a> ou <a href="<?php echo home_url('/regiao/'.'nacional') ?>">nacionais</a></span>
		<span>Caso queira entre em contato com a nossa equipe: <a href="mailto:contato@viagemcultural.com.br">contato@viagemcultural.com.br</a></span>
		<a class="button-blue" href="<?php bloginfo( 'url' ); ?>">Voltar para home</a>
	</section>
</section>
<?php get_footer(); ?>