<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211129134442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre ADD gamme_id INT NOT NULL');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFD2FD85F1 FOREIGN KEY (gamme_id) REFERENCES gamme_chambre (id)');
        $this->addSql('CREATE INDEX IDX_C509E4FFD2FD85F1 ON chambre (gamme_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFD2FD85F1');
        $this->addSql('DROP INDEX IDX_C509E4FFD2FD85F1 ON chambre');
        $this->addSql('ALTER TABLE chambre DROP gamme_id');
    }
}
