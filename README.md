# Senhas WiFi

Sistema para distribuição de senhas de rede sem fio.

## Funcionalidades

* Fornece credenciais de rede sem fio guardadas no .env.

## Instalação

### Básico

```sh
git clone git@github.com:wgnann/senhaswifi
composer install
cp .env.example .env
php artisan key:generate
```

É necessário configurar as variáveis relevantes:
* `REDEWIFI`: lista de redes separadas por vírgula;
* `SENHAWIFI`: lista de senhas separadas por vírgula;
* `SENHAUNICA_CODIGO_UNIDADE`: código da unidade segundo o replicado.
