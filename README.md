
# Board Game Shop – Database Driven Website

## Project Overview

This project is a **database-driven web application** developed as part of the *Database Driven Websites* module for the FdSc Software Development programme.

The system is a **Content Management System (CMS)** for a specialised **board game shop**, allowing users to browse games and registered members to manage inventory by adding new products.

The website demonstrates the integration of **front-end and back-end technologies**, focusing on **accessibility, security, usability, and scalability**.

---

## Objectives

* Build a fully functional **database-driven website**
* Implement **user authentication (login system)**
* Allow **members to add new board games**
* Ensure **secure database interactions**
* Follow **modern web standards (HTML5, CSS3)**
* Apply **accessibility best practices**
* Demonstrate **modular and object-oriented programming**

---

## Features

### Public Area

* Home page
* About Us
* Board Game Catalogue
* Contact Page
* FAQ Page

### Members Area

* Login system (with validation)
* Add new board game (title, description, image)
* Data stored in database and displayed dynamically

### Optional Feature

* Search functionality using PHP and SQL

---

## Technologies Used

### Front-End

* HTML5 (semantic markup)
* CSS3 (responsive design & layout)
* JavaScript (form validation & interactivity)

### Back-End

* PHP (server-side scripting)
* MySQL (database management)

### Development Tools

* VS Code (or similar IDE)
* Git (version control)
* XAMPP / Localhost server environment

---

## System Architecture

### Modular Design

The system is built using a **modular structure**, meaning the code is divided into reusable and independent components.

#### Benefits of Modularity:

* Easier maintenance
* Improved readability
* Reusable code components
* Separation of concerns

#### Example Modules:

* `db_connect.php` – database connection
* `header.php` / `footer.php` – reusable layout components
* `auth.php` – authentication logic
* `functions.php` – reusable helper functions
* `add_item.php` – logic for inserting new games

---

## Object-Oriented Programming (OOP)

The project uses **Object-Oriented Programming principles in PHP** to improve structure and scalability.

### Why OOP?

* Organises code into logical structures
* Improves maintainability
* Encourages reuse and scalability
* Makes debugging easier

### Example Classes:

* `Database` – handles connection and queries
* `User` – manages login/authentication
* `Game` – represents a board game object

### OOP Concepts Used:

* **Encapsulation** – data and methods grouped into classes
* **Abstraction** – hiding complex database logic
* **Reusability** – classes used across multiple pages

---

## Database Design

The system uses a **relational database (MySQL)**.

### Example Tables:

* `users` (id, username, password)
* `games` (id, name, description, image, category)

### SQL Usage:

* SELECT – retrieve board games
* INSERT – add new games
* WHERE clauses – filtering/searching

---

## Security Measures

To protect the system from common vulnerabilities:

### Implemented Security:

* Prepared statements (prevents SQL Injection)
* Input validation (client + server side)
* Output sanitisation (prevents XSS)
* Password hashing (secure login system)

### Limitations:

* Basic authentication (no multi-factor login)
* Limited role-based access control
* No advanced intrusion detection

---

## Accessibility & Usability

The site follows **modern accessibility guidelines**:

### Accessibility Features:

* Semantic HTML elements (`<nav>`, `<main>`, `<section>`)
* Alt text for images
* Proper heading structure
* Keyboard-friendly navigation
* Colour contrast considerations

### Usability Considerations:

* Simple navigation structure
* Consistent layout
* Clear content organisation
* Responsive design

---

## Scalability

The project is designed with scalability in mind:

### Scalable Aspects:

* Modular file structure
* OOP-based backend
* Database-driven content

### Potential Improvements:

* Pagination for large datasets
* API-based architecture
* Cloud database hosting

---

## Integration of Technologies

The system integrates:

* **HTML/CSS** → structure & styling
* **JavaScript** → client-side validation
* **PHP** → server-side logic
* **MySQL** → data storage

### Workflow Example:

1. User submits form
2. JavaScript validates input
3. PHP processes data
4. SQL query updates database
5. Updated data displayed dynamically

---

## Installation & Setup

1. Install XAMPP or similar
2. Clone repository:

   ```bash
   git clone <your-repo-url>
   ```
3. Place project in `htdocs`
4. Import database via phpMyAdmin
5. Start Apache & MySQL
6. Open in browser:

   ```
   http://localhost/boardgame-shop
   ```

---

## Testing

* Form validation tested (valid/invalid input)
* SQL queries tested for correctness
* Login system tested for security
* Cross-browser testing performed

---

##  Future Improvements

* Advanced search & filtering
* User registration system
* Admin dashboard
* Reviews & ratings system
* Payment integration (e-commerce expansion)



* Turn this into your **actual assignment report (the 2500 words)**
* Or tailor it exactly to **your code structure (if you show me your files)**
