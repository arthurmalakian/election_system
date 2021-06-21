# Sistema de eleição

Este é um sistema de eleição básico.

## Changelog

- 21/06/2021
    Limpeza visual;
    Mudança de nomes de variáveis para adotar padrão;
    Remoção de métodos ineficientes.
## Instalação


No diretório de sua escolha faça a clonagem desse repositório.
```bash
git clone https://github.com/arthurmalakian/election_system.git
```

Em seguida crie seu arquivo .env
```bash
cp .env.development .env
```

Para alterar os dados de login do administrador, você deve alterar as variáveis ADMIN_LOGIN e ADMIN_PASSWORD. os dados de login padrão são:
```bash
email: admin@mail.com
senha: admin
```

Suba os seus containers utilizando
```bash
docker-compose up -d
```

Execute o container
```bash
sudo docker exec -it election_system_laravel /bin/bash
```

No container execute os seguintes comandos:
```bash
composer install
```
```bash
php artisan key:generate
```
```bash
php artisan migrate --seed
```

Pronto, você pode acessar o sistema web através do endereço http://localhost:8000/.

