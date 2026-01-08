# Symfony 8 + FrankenPHP (Docker)

Environnement de dev prêt-à-l’emploi pour Symfony 8 avec FrankenPHP + Caddy sous Docker. Fonctionne sous Windows (WSL2), macOS et Linux.

## 🚀 Prérequis

- Docker Desktop (WSL2 activé sous Windows)
- Git

## 📦 Démarrer le projet

Clone le dépôt :

```bash
git clone https://github.com/ldandoyCours/symfony-frankenphp.git
cd symfony-frankenphp
```

### Construire et lancer

```bash
docker compose up --build -d
```

### Variables d’environnement

Copie le .env de base si besoin :

```bash
cp app/.env app/.env.local
```

## 🧭 Organisation

```bash
.
├─ app/                 # Code Symfony (public/, config/, src/, etc.)
├─ config/
    └─ Caddyfile        # Config Caddy/FrankenPHP (router Symfony)
    └─ php.ini          # Config du PHP.ini
├─ Dockerfile           # Image FrankenPHP + PHP extensions + Composer
├─ docker-compose.yml   # Services, volumes, ports, env
```

Le dépôt expose bien Dockerfile, docker-compose.yml et Caddyfile à la racine GitHub.

## 🧰 Commandes utiles

```bash
# Démarrer/arrêter
docker compose up -d
docker compose down

# Rebuild si Dockerfile change
docker compose build --no-cache app

# Shell dans le conteneur
docker compose exec app sh

# Lancer des commandes Symfony
docker compose exec app php bin/console about
docker compose exec app php bin/console cache:clear

```

## 📚 Liens utiles

- Symfony 8 – Docs : https://symfony.com/doc/current/index.html
- FrankenPHP : https://frankenphp.dev
- Caddy – Docs : https://caddyserver.com/docs/
