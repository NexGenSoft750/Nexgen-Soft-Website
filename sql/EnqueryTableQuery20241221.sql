CREATE TABLE enquiry (
    enquiry_id INT AUTO_INCREMENT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    company_name VARCHAR(255),
    email VARCHAR(255),
    phone_number VARCHAR(100),
    message TEXT,
    PRIMARY KEY(enquiry_id)
);
