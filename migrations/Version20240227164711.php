<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227164711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type_reclamation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404CF18BB82');
        $this->addSql('DROP INDEX UNIQ_CE606404CF18BB82 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD date_reclamation DATETIME NOT NULL, DROP reponse_id, DROP type, DROP name, CHANGE description description LONGTEXT NOT NULL, CHANGE etat type_reclamation_id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064047BA88B4D FOREIGN KEY (type_reclamation_id) REFERENCES type_reclamation (id)');
        $this->addSql('CREATE INDEX IDX_CE6064047BA88B4D ON reclamation (type_reclamation_id)');
        $this->addSql('ALTER TABLE reponse ADD reclamation_id INT NOT NULL, ADD contenu LONGTEXT NOT NULL, ADD date_reponse DATETIME NOT NULL, DROP description');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('CREATE INDEX IDX_5FB6DEC72D6BA2D9 ON reponse (reclamation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064047BA88B4D');
        $this->addSql('DROP TABLE type_reclamation');
        $this->addSql('DROP INDEX IDX_CE6064047BA88B4D ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD reponse_id INT DEFAULT NULL, ADD type VARCHAR(255) NOT NULL, ADD name VARCHAR(255) NOT NULL, DROP date_reclamation, CHANGE description description VARCHAR(255) NOT NULL, CHANGE type_reclamation_id etat INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404CF18BB82 FOREIGN KEY (reponse_id) REFERENCES reponse (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE606404CF18BB82 ON reclamation (reponse_id)');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9');
        $this->addSql('DROP INDEX IDX_5FB6DEC72D6BA2D9 ON reponse');
        $this->addSql('ALTER TABLE reponse ADD description VARCHAR(255) NOT NULL, DROP reclamation_id, DROP contenu, DROP date_reponse');
    }
}
