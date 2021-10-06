<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211001130043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experience ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C103A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_590C103A76ED395 ON experience (user_id)');
        $this->addSql('ALTER TABLE hobby ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE hobby ADD CONSTRAINT FK_3964F337A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_3964F337A76ED395 ON hobby (user_id)');
        $this->addSql('ALTER TABLE skill ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5E3DE477A76ED395 ON skill (user_id)');
        $this->addSql('ALTER TABLE social_network ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE social_network ADD CONSTRAINT FK_EFFF5221A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EFFF5221A76ED395 ON social_network (user_id)');
        $this->addSql('ALTER TABLE training_and_graduate ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE training_and_graduate ADD CONSTRAINT FK_CAC8E0D8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CAC8E0D8A76ED395 ON training_and_graduate (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C103A76ED395');
        $this->addSql('DROP INDEX IDX_590C103A76ED395 ON experience');
        $this->addSql('ALTER TABLE experience DROP user_id');
        $this->addSql('ALTER TABLE hobby DROP FOREIGN KEY FK_3964F337A76ED395');
        $this->addSql('DROP INDEX IDX_3964F337A76ED395 ON hobby');
        $this->addSql('ALTER TABLE hobby DROP user_id');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477A76ED395');
        $this->addSql('DROP INDEX IDX_5E3DE477A76ED395 ON skill');
        $this->addSql('ALTER TABLE skill DROP user_id');
        $this->addSql('ALTER TABLE social_network DROP FOREIGN KEY FK_EFFF5221A76ED395');
        $this->addSql('DROP INDEX IDX_EFFF5221A76ED395 ON social_network');
        $this->addSql('ALTER TABLE social_network DROP user_id');
        $this->addSql('ALTER TABLE training_and_graduate DROP FOREIGN KEY FK_CAC8E0D8A76ED395');
        $this->addSql('DROP INDEX IDX_CAC8E0D8A76ED395 ON training_and_graduate');
        $this->addSql('ALTER TABLE training_and_graduate DROP user_id');
    }
}
