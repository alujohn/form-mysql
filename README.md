# Formulário com banco de dados MYSQL

### Formulário básico pra fazer testes com banco de dados MYSQL pra registro de informações. 
<img alt="formulario" height="300" width="520" src="https://github.com/alujohn/form-mysql/blob/main/img/img1.png?raw=true"/>
A conexão com o banco de dados foi feito com PHP e eu utilizei o XAMPP pra configuração do ambiente.
<img alt="xampp" height="400" width="620" src="https://github.com/alujohn/form-mysql/blob/main/img/img3.png?raw=true"/>
Resultado dos envios do formulário direto pro banco de dados.
<img alt="mysql" height="600" width="1020" src="https://github.com/alujohn/form-mysql/blob/main/img/img2.png?raw=true"/>

## Pontos importantes:
### - Se der conflito de port no mysql é bom mudar a padrão 3306 para 3312.
### - Se o banco de dados tiver senha é bom colocar na configuração no arquivo config.php, se não tiver deixa vazio mesmo.
### - Se der erro pra acessar o phpmyadmin, é bom procurar o arquivo "config.inc.php" que fica dentro da pasta do XAMPP e colocar a senha no campo "$cfg['Servers'][$i]['password'] = ''; pra as permissões".
