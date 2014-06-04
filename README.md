Viagem Cultural
===============

Tema de Wordpress para uso no site da Viagem Cultural.

### Usando Less/CoffeeScript

Certifique-se de ter instalado o *node.js* e *npm* no sistema.

Instale a interface de linha de comando do Grunt de forma global:

```
$ npm install -g grunt-cli
```

Na pasta do tema, instale as dependências necessárias:

```
$ npm install
```

Agora execute:

```
$ grunt watch
```

A tarefa `watch` irá realizar as seguintes tarefas:
 * __assets/less/__: todos os arquivos `.less` da pasta serão copilados, concatenados e minimizados em `assets/app.css.min`;
 * __assets/styles/__: todos os arquivos `.css` da pasta serão concatenados e e minimizados com os arquivos LESS;
 * __style.css__: será também concatenado com os arquivos LESS e CSS anteriores. Não coloque conteúdo neste arquivo além dos necessários para o funcionamento do Wordpress;
 * __assets/coffee/__: todos os arquivos `.coffee` da pasta serão copilados no arquivo `assets/app.js.min`;
 * atualizará o arquivo `lib/scripts.php`, que carregará a versão de CSSs e JSs atualizadas nos passos anteriores;
 * emitirá uma notificação de sistema informando que tudo foi realizado com sucesso.

### Realizando Commits

Ao fazer um commit, lembre-se sempre de incluir também o arquivo `lib/enqueue.php`, pois ele força o navegador a utilizar as versões atualizadas de CSS/JS; do contrário, é possível que ele user versões em cache.