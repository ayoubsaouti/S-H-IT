CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_login` varchar(256) NOT NULL,
  `id_article` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`users_login`) REFERENCES `users`(`users_login`),
  FOREIGN KEY (`id_article`) REFERENCES `articles`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT panier.quantity, articles.nom_article, articles.image_article, articles.content_article
FROM panier
INNER JOIN articles
ON panier.id_article = articles.id
WHERE panier.users_login = 'nom_utilisateur_connecté';



