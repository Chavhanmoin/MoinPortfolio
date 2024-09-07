## A Responsive portfolio
https://github.com/Chavhanmoin/MoinPortfolio

This is a portfolio website or personal page. People  use it to 
* Showcase their work.
* Build their personal brand.
* Get more clients or jobs.
* Get feedback on their work.
* Track their progress.
A portfolio is a great tool for anyone who wants to show off their skills and experience, and it can be a valuable asset for anyone who is looking to advance their career.

## File Structure

- `index.html`: Homepage of the website.
- `style.css`: CSS file for styling,which is located inside css folder.
- `script.js`: JavaScript file for interactivity,which is located inside script folder.
- `contact.php`: PHP file for contact page,also used to connect with database

## Database detail
Hostname: localhost
Username: root
pwd: "" //password is not set for database.
database name:portfolio

$con = new mysqli("localhost", "root", "", "portfolio"); this is line number 38 in contact.php,which is used to make connection with database.We can change the database configuration here in order to connect with database.

##Steps to create database.
1.Create data base with name "portfolio".
2.Run the following SQL query to create table in database:
   CREATE TABLE IF NOT EXISTS contact_messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(100) NOT NULL,
    mobile_number VARCHAR(20) NOT NULL,
    email_subject VARCHAR(100) NOT NULL,
    message_text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

3.Youre all set!! Now the website is fully functional.