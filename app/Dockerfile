# Utiliser une image de base avec MySQL
FROM mysql:latest

# Définir les variables d'environnement pour l'initialisation de la base de données
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=shop
ENV MYSQL_USER=boris
ENV MYSQL_PASSWORD=boris

# Copier les scripts SQL pour l'initialisation de la base de données (facultatif)
COPY ./scripts/ /docker-entrypoint-initdb.d/

# Exposer le port MySQL (par défaut : 3306)
EXPOSE 3306

# Commande par défaut pour démarrer le serveur MySQL
CMD ["mysqld"]