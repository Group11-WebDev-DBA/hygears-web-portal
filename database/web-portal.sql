-- Website-only tables. Import AFTER hygears.sql from the hygears-dba repo.
USE hygears_db;

-- News posts written by officers (see the News feature in the prototypes)
CREATE TABLE IF NOT EXISTS post (
  post_id      INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title        VARCHAR(150) NOT NULL,
  category     ENUM('Competition','Progress report','Workshop','Announcement','Recruitment') NOT NULL,
  summary      VARCHAR(255) NULL,
  body         TEXT         NOT NULL,
  cover_image  VARCHAR(255) NULL,              -- file name inside uploads/
  cover_alt    VARCHAR(255) NULL,              -- photo description for screen readers
  caption_by   VARCHAR(100) NULL,
  status       ENUM('draft','published') NOT NULL DEFAULT 'draft',
  published_at DATETIME     NULL,
  created_by   INT UNSIGNED NULL,              -- officer's person_id
  PRIMARY KEY (post_id),
  KEY idx_post_status_date (status, published_at),
  CONSTRAINT fk_post_created_by FOREIGN KEY (created_by) REFERENCES member (person_id)
);
