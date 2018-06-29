<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site com Facebook Login</title>
    <!-- O jQuery NÃO é necessário para utilização do SDK Javascript do Facebook. Incluí por utilizar em outra parte deste exemplo -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <!-- Logo após a abertura da tag <body> inseri o trecho de código de carregameto e inicialização do SDK Javascript do Facebook -->
    <div id="fb-root"></div>
    <script>

        // A função abaixo é executada assim que o SDK é carregado.
        window.fbAsyncInit = function() {
            // Essa é a função de inicialização do SDK. É necessário configurar alguns parâmetros na inicialização do SDK.
            FB.init({
              appId      : '422226971286715', // Substitua pela AppID do aplicativo que você criou anteriormente.
              status     : true, // Informa ao SDK que para checar o staus do login do usuário.
              cookie     : true, // Habilita o uso de cokie
              xfbml      : true  // habilita o uso da linguagem XFBML
            });
 
            // Função que será chamada automaticamente quando hover mudança no status da sessão do usuário
            // que irá acontecer quando ele clicar no botão Entrar
            FB.Event.subscribe('auth.authResponseChange', function(response) {
                //Se o usuário estiver logado no facebook e já deu as permissões para seu aplicativo o status será connected
                if (response.status === 'connected') {
                    // Executa a função usuarioConectado().
                    usuarioConectado();
                }
            });
        };
 
        // A função abaixo vai incluir no cabeçalho do html o carregamento do SDK Javascript do Facebook.
        (function(d){
            var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            // Substituí o en_US por pt_BR para usarmos nosso idioma.
            js.src = "//connect.facebook.net/pt_BR/all.js";
            ref.parentNode.insertBefore(js, ref);
        }(document));
 
        // Função de exemplo que é executada quando o usuário esta logado e já deu as permissões para o aplicativo.
        function usuarioConectado() {
            // Com a função FB.api, é possível fazer chamadas para o Graph API.
            // Usando o parâmetro /me , você pode solicitar informações do usuário conectado.
            FB.api('/me', function(response) {
                // Usando jQuery, será exibido no paragrafo com id info as informações abaixo, capturdas com o FB.api.
// <script type="text/javascript"> var variaveljs = 'Mauricio Programador'; </script.
                $('#info').html(
                    'Olá teste novo<br>' + 
                    'Nome: '+response.name +
                    '<br>username: '+response.username +
                    '<br>Link perfil: '+response.link +
                    '<br>Email: '+response.email +
                    '<br>Sexo: '+response.gender +
                    '<br>ID: '+response.id +
//                  '<?php echo "<br>Olá PHP'+response.id +'"; ?>' + 
                    '<?php $pegaidface = "'+response.id +'"; ?>' + 
                    '<?php echo "<h1>$pegaidface</h1>"; ?>'
                     
                );
                // Um exemplo de como você pode recuperar a foto do usuário.
                $('#foto').html('<img src="https://graph.facebook.com/'+response.id+'/picture" alt="'+response.name+'" />')
            })


;


        }


    </script>
 
    <p id="info">Olá visitante!</p>
        <p id="foto"></p>
 
    <!-- Botão para login implementado em XFBML. Além da permissão padrão, está sendo solicitado acesso ao email do usuário.
         Quando o usuário clicar neste botão, será aberta uma janela solicitando que ele entre no Facebook (caso esteja deslogado) e autorize            o aplicativo a obter as permissões solicitadas. -->
    <fb:login-button autologoutlink="true" perms="user_likes" size="large"></fb:login-button><br>
<form action="login.php" method='POST'>
<input type="image" src="fblogin1.png"value="Login" onclick="FB.login();">
<input type="submit" value="Logout" onclick="FB.logout();">
</form>

<script>
  FB.Event.subscribe("auth.logout", function() {window.location = 'http://google.com'});
</script><br>

<h1><?php echo "$pegaidface";  ?></h1>

 
</body>
</html>
   











 <!-- Logo após a abertura da tag <body> inseri o trecho de código de carregameto e inicialização do SDK Javascript do Facebook 
    <div id="fb-root"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '422226971286715',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<body>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div><br>

<a href="https://www.facebook.com/dialog/oauth?client_id=422226971286715&redirect_uri=http://localhost/&scope=email,user_website,user_location">Entrar com Facebook</a><br>


