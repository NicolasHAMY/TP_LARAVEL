# TP_LARAVEL

**Composition du groupe :**
- Nicolas Hamy (#NicolasHAMY)
- Simon Bourrasseau (#simonbourrasseau)
- Margaux Dechaud (#PseudoSerieux)

**Création d'un site Web avec Laravel :**

- Présentation des réseaux sociaux utilisés
- Page de contact avec email de confirmation

**PREREQUIS**

- Démarrer Xamp (serveur Apache + MySQL).

- Cloner le projet dans le /www (ou équivalent) Xamp.

- Installer Laravel dans le dossier nicodenv: 

```composer install```

```composer init``` (n'insérez aucun paramètre)

- Rename .env.example en .env

    Copier : 
    
        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=f8f287e3e7e92e
        MAIL_PASSWORD=5bbeeffa6d5914
        MAIL_ENCRYPTION=false

    A la place de la session MAIL.

```composer update```

```php artisan generate:key```

- Rendez-vous sur localhost/[racine du projet] !