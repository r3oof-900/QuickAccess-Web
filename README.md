
# QuickAccess Web Platform

**QuickAccess** is a PHP-based web platform that connects users with various types of support services, including:

- Technical Services  
- Health Services  
- Car Services  
- University Services  
- Household Services  

Users can register or log in to the platform, select the type of service they need, and view personalized service content pulled from a MySQL database.

---

## 🔧 Features

- User authentication system (login with session management)
- Dynamic homepage displaying available services
- Service selection and automatic assignment of service IDs
- Custom content and service images loaded from the database
- Modular structure using PHP includes (header, footer, login popup)
- Responsive design with HTML5, CSS3, and Font Awesome

---

## 🗂 Project Structure

- `index.php`: Main homepage displaying services based on user type  
- `php/Header.php`: Header component with navigation  
- `php/singin.php`: Login and registration popup  
- `php/con_footer.php`: Footer section  
- `connection/conn.php`: Database connection handler  
- `img/`: Folder containing service-related images  
- `assets/`: Contains CSS and JavaScript assets  
- `style.css`, `header.css`: Custom styling for layout and header  
- `script.js`: Client-side logic for interactions

---

## 💾 Database

The project uses a MySQL database with the following example tables:

- `users`: Stores user credentials, bio (service type), and ID  
- `home`: Stores service entries (title, description, image)

Example query to fetch services:
```sql
SELECT * FROM home;
```

---

## 🚀 How to Run

1. Clone or download this repository.
2. Set up a local server (e.g. XAMPP or WAMP).
3. Import the provided SQL database (if available).
4. Update the database credentials in `connection/conn.php`.
5. Run the project via `localhost/index.php`.

---

## 📌 Notes

- Make sure to enable PHP and MySQL in your local server.
- All service content is loaded dynamically based on the `users.bio` field.
- You can extend this platform by adding more service categories or an admin panel.

---

**Developed by Raoof**


## Login Credentials

To log in and explore the features of the website, you can use the following credentials:

- **User Login:**
  - **Username:** `Raoof`
  - **Password:** `1`

- **Admin Panel Login:** (for adding, editing, or deleting users)
  - **Username:** `admin`
  - **Password:** `admin`

> You can also log in using your own credentials if you have registered through the platform.
