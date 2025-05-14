CREATE TABLE user_comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    site_experience TEXT,
    improvement_ideas TEXT,
    rating INT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
