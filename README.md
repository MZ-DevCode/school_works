# School Projects 🎓

A collection of web development assignments and school projects.

## 🛒 Project: Stationery Shop (Sklep Papierniczy)
A simple web-based shop interface that interacts with a MySQL database to display products and calculate promotional prices.

### ✨ Features
- **Dynamic Product List**: Fetches promotional items from the database (PHP/MySQLi).
- **Price Calculator**: Calculates a 15% discount for selected items via a POST form.
- **Responsive Layout**: Three-column layout (Left, Middle, Right) with a clean CSS design.
- **Database Integration**: Includes SQL dump for easy environment setup.

### 🛠 Tech Stack
- **PHP** (procedural style)
- **MariaDB / MySQL**
- **HTML5 & CSS3**

### 🚀 How to Run Locally
1. **Database Setup**:
   - Create a database named `sklep2`.
   - Import the SQL dump file:
     ```
     mysql -u root -p sklep2 < school_version/sklep.sql
     ```
2. **Server Configuration**:
   - Ensure you have PHP and MariaDB installed.
   - Update `mysqli_connect` in `index.php` with your credentials if necessary.
3. **Start the Project**:
   - Run the built-in PHP server in the project folder:
     ```
     php -S localhost:8000
     ```
4. **Access the App**:
   - Open your browser and go to `http://localhost:8000`.

