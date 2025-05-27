# ModelKitOne

**ModelKitOne** ist eine webbasierte Open-Source-Software in PHP, mit der jeder ohne Programmierkenntnisse datenbasierte Anwendungen (CRUD) erstellen kann – inspiriert von der Einfachheit und Flexibilität von WordPress.

---

## 🚀 Ziel

Erstelle deine eigene Datenverwaltungs- oder Mini-Webanwendung – ganz ohne Programmierung. Tabellen, Formulare und Ansichten lassen sich bequem im Browser konfigurieren und sofort verwenden.

---

## 🔧 Features (MVP)

- 🧱 Tabellen und Felder per Web-Oberfläche definieren
- 🛠️ Automatische Erstellung von:
  - Datenbanktabellen (MySQL/SQLite)
  - Admin-Interfaces (Erstellen, Bearbeiten, Löschen, Listen)
- 🔐 Einfaches Benutzer-Login
- 🎨 Template-System für eigene Layouts
- 📁 Modulstruktur für Erweiterbarkeit (wie bei WordPress Plugins)

---

## 📦 Tech-Stack

- **PHP 8.x**
- **MySQL** oder **SQLite**
- **Twig** als Template-Engine
- Keine externen Frameworks notwendig – läuft auf Shared Hosting!

---

## 🛠️ Installation

1. Repository klonen oder ZIP herunterladen
2. In Webserver-Verzeichnis legen
3. `/installer/install.php` im Browser aufrufen
4. Datenbankdaten eingeben, Admin-Zugang setzen – fertig!

---

## 📁 Verzeichnisstruktur

```bash
modelkitone/
├── index.php
├── core/             # MVC-Kern: Controller, Model, View
├── modules/          # CRUD-Module wie 'customers', 'products' usw.
├── templates/        # Twig-Templates
├── public/           # CSS, JS, Images
├── schema/           # JSON-Definitionen der Module
├── installer/        # Installationsskript
├── config/           # DB-Konfiguration
└── LICENSE
