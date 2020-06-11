<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200610211018 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, raison_social VARCHAR(255) DEFAULT NULL, adresse_commerce VARCHAR(255) DEFAULT NULL, cp INT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, email_commerce VARCHAR(255) DEFAULT NULL, tel_commerce INT DEFAULT NULL, regate_ppdc INT DEFAULT NULL, action VARCHAR(255) DEFAULT NULL, date_debut VARCHAR(255) DEFAULT NULL, ref_benefiaire VARCHAR(255) DEFAULT NULL, nom_prenom_rais VARCHAR(255) DEFAULT NULL, lieu_remise VARCHAR(255) DEFAULT NULL, numero_cp_couloir VARCHAR(255) DEFAULT NULL, libelle_voie VARCHAR(255) DEFAULT NULL, comp_commune_servicepostal VARCHAR(255) DEFAULT NULL, cp_cl VARCHAR(255) DEFAULT NULL, localite VARCHAR(255) DEFAULT NULL, acce_benefiaire VARCHAR(255) DEFAULT NULL, indic_complementaire VARCHAR(255) DEFAULT NULL, frais TINYINT(1) DEFAULT NULL, premier_necessite TINYINT(1) DEFAULT NULL, sec TINYINT(1) DEFAULT NULL, nombre_objet INT DEFAULT NULL, tel_cli INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, commentaires VARCHAR(255) DEFAULT NULL, type_livraison VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commande');
    }
}
