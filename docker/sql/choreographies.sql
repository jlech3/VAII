-- Tabuľka choreografií (repertoár súboru).
-- Docker tento skript spustí automaticky pri prvom vytvorení databázy.
-- Skript obsahuje diakritiku, preto spojenie nastavíme na UTF-8.
SET NAMES utf8mb4;
CREATE TABLE choreographies
(
    id           INT AUTO_INCREMENT PRIMARY KEY, -- id prideľuje databáza sama
    name         VARCHAR(100) NOT NULL,          -- názov choreografie
    author       VARCHAR(100) NOT NULL,          -- autor choreografie
    duration_min INT          NOT NULL,          -- dĺžka v minútach
    description  TEXT                            -- popis, nepovinný
);

-- Ukážkové dáta, aby zoznam nebol po spustení prázdny.
INSERT INTO choreographies (name, author, duration_min, description)
VALUES ('Padajú oriešky', 'Ján Kováč', 6, 'Tance a piesne z obcí v okolí Bánoviec.'),
       ('Chleba napiecť', 'Eva Nová', 5, 'Dievčenské spevy a tance.'),
       ('Drapky', 'Ján Kováč', 4, 'Ľahký a hravý párový tanec.');