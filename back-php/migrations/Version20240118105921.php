<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240118105921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_line (id INT AUTO_INCREMENT NOT NULL, salon_id INT DEFAULT NULL, product_quantity VARCHAR(255) DEFAULT NULL, product_total_price VARCHAR(255) DEFAULT NULL, product_base_price VARCHAR(255) DEFAULT NULL, INDEX IDX_9CE58EE14C91BDE4 (salon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_line_product (order_line_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_622E11A0BB01DC09 (order_line_id), INDEX IDX_622E11A04584665A (product_id), PRIMARY KEY(order_line_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_line ADD CONSTRAINT FK_9CE58EE14C91BDE4 FOREIGN KEY (salon_id) REFERENCES salon (id)');
        $this->addSql('ALTER TABLE order_line_product ADD CONSTRAINT FK_622E11A0BB01DC09 FOREIGN KEY (order_line_id) REFERENCES order_line (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_line_product ADD CONSTRAINT FK_622E11A04584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_line DROP FOREIGN KEY FK_9CE58EE14C91BDE4');
        $this->addSql('ALTER TABLE order_line_product DROP FOREIGN KEY FK_622E11A0BB01DC09');
        $this->addSql('ALTER TABLE order_line_product DROP FOREIGN KEY FK_622E11A04584665A');
        $this->addSql('DROP TABLE order_line');
        $this->addSql('DROP TABLE order_line_product');
    }
}
