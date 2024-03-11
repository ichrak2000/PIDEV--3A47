<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240303203851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, service_associe VARCHAR(255) NOT NULL, date_de_creation DATETIME NOT NULL, image_path VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, rating_value SMALLINT DEFAULT NULL, comment LONGTEXT DEFAULT NULL, score INT NOT NULL, INDEX IDX_D8892622ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, categoriee_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, duree TIME NOT NULL, disponibilite VARCHAR(255) NOT NULL, id_user VARCHAR(255) NOT NULL, date_de_creation DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, etat INT DEFAULT NULL, UNIQUE INDEX UNIQ_E19D9AD2D7601CF4 (categoriee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2D7601CF4 FOREIGN KEY (categoriee_id) REFERENCES categorie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622ED5CA9E6');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2D7601CF4');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE service');
    }
}
