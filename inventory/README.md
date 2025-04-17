# inventory
14.04.2025. 
zrobimy tutaj program do inwentaryzaji

Potrzebne rzeczy:
1. Dodawanie produktów do macierzy
2. Usuwanie produktów z macierzy
3. Raportowanie zdarzeń
4. generowanie dokumentów


potrzebne tabele:
- użytkownicy:
CREATE TABLE IF NOT EXISTS users (
    id AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telephone_user VARCHAR(15),
    position_user VARCHAR(50),
    begin_working DATE NOT NULL,
    finish_working DATE
    
);

- typy zdarzeń
CREATE TABLE IF NOT EXISTS types_event (
    id SERIAL PRIMARY KEY,
    name_type VARCHAR(50) NOT NULL UNIQUE,
    description_type TEXT
); 
- lokalizacja przedmiotu (siedziby firmy)
CREATE TABLE localization (
    id SERIAL PRIMARY KEY,
    name_location VARCHAR(100) NOT NULL,
    description_location TEXT,
    address VARCHAR(200)
);

- przedmiot:
CREATE TABLE If NOT EXISTS items (
    id AUTO_INCREMENT PRIMARY KEY,
    name_item VARCHAR(100) NOT NULL,
    description_item TEXT,
    id_item VARCHAR(50) UNIQUE NOT NULL, -- Unikalny identyfikator przedmiotu, np. kod kreskowy
    price_item DECIMAL(10, 2) NOT NULL,
    information TEXT, -- Uwagi
    purchase_date DATE NOT NULL,
    purchase_document VARCHAR(100), -- Numer dokumentu zakupu
    disposal_date DATE, -- Data rozchodu
    disposal_document VARCHAR(100), -- Dokument rozchodu
    issue_date DATE, -- Data wydania
    return_date DATE, -- Data zwrotu
    id_location INT, -- Klucz obcy do lokalizacji
    
    FOREIGN KEY (id_location) REFERENCES locations(id) ON DELETE SET NULL
);


- event 
CREATE TABLE IF NOT EXISTS event_history (
    id AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_item INT NOT NULL,
    id_event_type INT NOT NULL,
    event_description TEXT,
    event_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE RESTRICT,
    FOREIGN KEY (id_item) REFERENCES items(id) ON DELETE CASCADE,
    FOREIGN KEY (id_event_type) REFERENCES types_event(id) ON DELETE RESTRICT
);

