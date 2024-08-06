# instruções de Execução do Projeto

## Pré-requisitos

> **PHP 8.2.12**
>
> **Composer 2.6.5**

## Instalando o PHP 8.2

### Windows

#### Passo 1: Download do PHP

1. Acesse o site oficial do PHP: [https://www.php.net/](https://www.php.net/)
2. Vá para a seção de downloads e escolha a versão do PHP que deseja instalar. Recomenda-se usar a versão mais recente que seja estável.
3. Baixe o arquivo ZIP para Windows (Non Thread Safe é recomendado para ambientes de desenvolvimento).

#### Passo 2: Extrair o PHP

1. Extraia o conteúdo do arquivo ZIP para uma pasta de sua escolha. Por exemplo, `C:\php`.

#### Passo 3: Configurar o PHP

1. Navegue até a pasta onde você extraiu o PHP.
2. Renomeie o arquivo `php.ini-development` para `php.ini`. Este arquivo é usado para configurar várias opções do PHP.
3. Abra o arquivo `php.ini` com um editor de texto e personalize as configurações conforme necessário. Por exemplo, você pode precisar configurar a diretiva `extension_dir` para apontar para o diretório `ext` dentro da pasta do PHP.

#### Passo 4: Adicionar o PHP ao PATH do Windows

1. No menu Iniciar, procure por "variáveis de ambiente" e selecione "Editar as variáveis de ambiente do sistema".
2. Na janela Propriedades do Sistema, clique em "Variáveis de Ambiente".
3. Nas variáveis de sistema, procure por `Path`, selecione-a e clique em "Editar".
4. Clique em "Novo" e adicione o caminho para a pasta do PHP (por exemplo, `C:\php`).
5. Clique em "OK" para fechar todas as janelas de diálogo.

#### Passo 5: Testar a Instalação

1. Abra o Prompt de Comando.
2. Exceute o comando abaixo. Isso deve mostrar a versão do PHP que você instalou, indicando que o PHP foi instalado corretamente.

```powershell
php -v
```

#### Passo 6: Habilitar fileinfo
Para habilitar o fileinfo, você deve editar o arquivo php.ini, para isso e descomentar a linha `;extension=fileinfo` e reiniciar o servidor.

### Mac

#### Passo 1: Instalar o Homebrew

Se você ainda não tem o Homebrew instalado, abra o Terminal e execute o comando abaixo:

```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

#### Passo 2: Instalar o PHP

```bash
brew install php
```

#### Passo 4: Verificar a Instalação

```bash
php -v
```

## Instalando o Composer 2.6.5

#### Windows

1. faça a instalação do composer baixando o instador pelo link *<https://getcomposer.org/download/>*.

### Linux / macOS

1. Abra o Terminal e execute o seguinte comando para baixar o instalador do Composer:

    ```bash
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ```

2. Em seguida, execute o comando abaixo para verificar a integridade do instalador:

    ```bash
    php composer-setup.php
    ```

3. Mover o Composer para o diretório binário global

    ```bash
    sudo mv composer.phar /usr/local/bin/composer
    ```

4. Verificar a instalação

    ```bash
    composer --version
   ```

## Executando o Projeto

Para Rodar o projeto, no teminal, vocë deve estar da pasta src e instalar as dependências do projeto com o comando:

```bash
composer install
```

Após a instalação das dependências, você deve executar o comando pelo terminal do projeto na pasta src:

```bash
php artisan serve
```

## Debugando o Projeto

### Instalando o XDebug
acesse o link [XDebug](https://xdebug.org/wizard).

#### Configurando o phpinfo para verificar a instalação do XDebug
acesse o arquivo `srxc/public/index.php` e substitua o conteúdo pelo código abaixo (Lembre de voltar o conteúdo original após a verificação)

```php
<?php
phpinfo();
```
execute o projeto pela url e copie o conteúdo da página e cole no site do xdebu e siga as instruções.

reinicie o servidor

### Configurando o Visual Studio Code
Para debugar o projeto, no visual studio code, você deve instalar a extensão `PHP Debug` e configurar o arquivo launch.json na pasta .vscode conforme abaixo:

#### Debugando com artisan serve
```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "log": true,
            "ignore": ["**/vendor/**/*.php"]
        }
    ]
}
```

#### Debugando com docker 
```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "hostname": "0.0.0.0",
            "port": 9003,
            "log": true,
            "pathMappings": {
                "/var/www/html": "${workspaceFolder}/src"
            },
            "ignore": ["**/vendor/**/*.php"],
            "xdebugSettings": {
                "max_children": 10000,
                "max_data": 10000,
                "show_hidden": 1
            }
        }
    ]
}
```
lembre-se de instalar a extensão PHP Debug, para mais detalhes acesse o link: [PHP XDebug](https://xdebug.org/docs/install)

## Extenões ulteis

para um melhor desenvolvimento, recomenda-se as instalações da extensão

`PHP Extension Pack`
