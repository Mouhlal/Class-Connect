# 🎓 Class-Connect  

**Class-Connect** est une application web de gestion scolaire développée avec **Laravel** et **MySQL**. Elle permet aux administrateurs de gérer les professeurs, les matières, les groupes et les emplois du temps, tout en offrant aux étudiants un accès à leurs cours et notes.  

---

## ✨ Fonctionnalités principales  

✔️ **Gestion des utilisateurs** (administrateurs, professeurs, étudiants)  
✔️ **Attribution des matières aux enseignants**  
✔️ **Gestion des groupes et des emplois du temps**  
✔️ **Ajout et consultation des notes des étudiants**  
✔️ **Authentification sécurisée avec Laravel**  
✔️ **Interface d'administration pour la gestion scolaire**  

---

## 🚀 Technologies utilisées  

- **Laravel 10+** (framework PHP)  
- **MySQL** (base de données)  
- **Blade** (moteur de templates Laravel)  
- **Bootstrap / Tailwind CSS** (design de l'interface)  

---

## 📂 Structure du projet  

```
📦 Class-Connect  
 ┣ 📂 app/Http/Controllers    # Contrôleurs Laravel  
 ┣ 📂 database/migrations     # Migrations de la base de données  
 ┣ 📂 resources/views         # Templates Blade  
 ┣ 📂 routes                 # Définition des routes  
 ┣ 📜 .env                    # Configuration de l'application  
 ┗ 📜 README.md               # Documentation  
```  

---

## ⚙️ Installation et exécution  

### 🛠️ 1. Cloner le projet  
```bash
git clone https://github.com/Mouhlal/Class-Connect.git
cd summer
```  

### 🛠️ 2. Installer les dépendances  
```bash
composer install
```  

### 🛠️ 3. Configurer l’environnement  
- Copier le fichier `.env.example` en `.env`  
- Modifier les informations de connexion à la base de données dans `.env` :  
  ```ini
  DB_DATABASE=class_connect
  DB_USERNAME=root
  DB_PASSWORD=
  ```  
- Générer la clé d’application :  
  ```bash
  php artisan key:generate
  ```  

### 🛠️ 4. Exécuter les migrations et seeders  
```bash
php artisan migrate --seed
```  

### 🛠️ 5. Lancer le serveur  
```bash
php artisan serve
```  
L'application sera accessible sur : **http://127.0.0.1:8000**  




