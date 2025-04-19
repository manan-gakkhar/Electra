# Electra – Electricity Bill Calculator

## 📌 Overview

**Electra** is an innovative web-based application developed to simplify and streamline the process of calculating electricity bills. Designed using core web technologies including **HTML, CSS, and PHP**. Electra provides an interactive interface that enables users to input consumption figures, automatically calculates the bill, and presents a clear breakdown of the charges.

⚠️ **Important:**  
Electra uses PHP for backend processing. The PHP code **will not run** on a static hosting service (such as GitHub Pages). To run the project locally, you must set up a PHP environment.

---

## 🔧 Installation & Setup

### **1️⃣ Requirements**
Before running Electra, ensure that your system meets the following prerequisites:
- PHP installed on your system (Version 7.4 or later recommended)
- A local server like **XAMPP, WAMP, or MAMP** (for handling PHP execution)
- A web browser (Chrome, Firefox, Edge, etc.)

### **2️⃣ Installing PHP**
If you don't already have PHP installed, follow the steps below:

#### **Windows Installation:**
1. Download the PHP package from [official PHP website](https://www.php.net/downloads).
2. Extract the downloaded **ZIP file** to `C:\php`.
3. Add `C:\php` to your system’s environment variables for easy command-line access.
4. Test the installation by running:
   ```sh
   php -v
   ```
   If installed correctly, it should display the PHP version.

Alternatively, you can use **XAMPP** or **WAMP**, which come pre-packaged with PHP:
- **XAMPP:** Download & install from [Apache Friends](https://www.apachefriends.org/).
- **WAMP:** Get it from [WAMP official site](https://www.wampserver.com/en/).

#### **Mac Installation:**
Mac users can install PHP via **Homebrew**:
```sh
brew install php
```
Verify installation:
```sh
php -v
```

#### **Linux Installation (Ubuntu/Debian-based):**
```sh
sudo apt update
sudo apt install php
```
Check installation:
```sh
php -v
```

---

## 🚀 Running the Project

### Using XAMPP:
1. Install **XAMPP** and launch **Apache** from the control panel.
2. Move the project folder (`Electra`) to:
   ```
   C:\xampp\htdocs\
   ```
3. Open a web browser and navigate to:
   ```
   http://localhost/Electra/
   ```

### Using PHP Built-in Server:
1. Open a terminal or command prompt.
2. Navigate to the project folder:
   ```sh
   cd /path/to/Electra
   ```
3. Start the PHP server:
   ```sh
   php -S localhost:8000
   ```
4. Open **http://localhost:8000/** in a browser.

---

## 🏗️Project Structure
Electra
calculate.php   # Bill calculation logic
index.html      # Homepage with user input form
display.html    # Displays calculated bill details
main.js         # Handles UI interactions (if applicable)
styles.css      # Styling for the website
assets/         # Contains images, icons, and design assets
README.md       # Project documentation

---

## 🚀 Future Enhancements
- Database support for bill tracking
- Advanced tariff models
- User authentication and profile management

---

### 📄 License
This project is licensed under **MIT License** – feel free to modify and distribute it.

---

This README covers all essential details, from installation to execution, ensuring users can set up and run Electra on their local machines! 🚀 Let me know if you'd like any refinements. 😊
