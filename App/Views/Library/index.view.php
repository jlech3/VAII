<?php

/** @var \Framework\Support\View $view */

$view->setLayout('portal');
?>

<div class="page">
    <h1>Knižnica</h1>
    <p>15 choreografií · hudba aj tanec na jednom mieste</p>
    <form class="filters">
        <input type="search" placeholder="Hľadaj choreografiu alebo súbor…" aria-label="Hľadať">

        <select aria-label="Región">
            <option>Región: všetky</option>
            <option>Horné Ponitrie</option>
            <option>Trenčianske</option>
            <option>Liptov</option>
        </select>

        <select aria-label="Zoradenie">
            <option>Najnovšie</option>
            <option>Podľa názvu</option>
        </select>

        <div class="toggle">
            <span>Zobraziť:</span>
            <button type="button" class="active">Všetko</button>
            <button type="button">Hudba</button>
            <button type="button">Tanec</button>
        </div>
    </form>

    <div class="cards">
        <article class="card">
            <header class="card-header">
                <h2>Padajú oriešky</h2>
                <span class="region">Horné Ponitrie</span>
            </header>
            <p class="card-meta">5 súborov · 3 hudba · 2 tanec</p>

            <h3>Hudba</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">PDF</span>
                    <span class="file-name">Noty – 1. husle</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
                <li>
                    <span class="file-type">MP3</span>
                    <span class="file-name">Nahrávka – celé číslo</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>

            <h3>Tanec</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">MP4</span>
                    <span class="file-name">Video – celá choreografia</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>
        </article>

        <article class="card">
            <header class="card-header">
                <h2>Chleba napiecť</h2>
                <span class="region">Horné Ponitrie</span>
            </header>
            <p class="card-meta">5 súborov · 3 hudba · 2 tanec</p>

            <h3>Hudba</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">PDF</span>
                    <span class="file-name">Noty – 1. husle</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
                <li>
                    <span class="file-type">MP3</span>
                    <span class="file-name">Nahrávka – celé číslo</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>

            <h3>Tanec</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">MP4</span>
                    <span class="file-name">Video – celá choreografia</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>
        </article>

        <article class="card">
            <header class="card-header">
                <h2>Drapky</h2>
                <span class="region">Horné Ponitrie</span>
            </header>
            <p class="card-meta">5 súborov · 3 hudba · 2 tanec</p>

            <h3>Hudba</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">PDF</span>
                    <span class="file-name">Noty – 1. husle</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
                <li>
                    <span class="file-type">MP3</span>
                    <span class="file-name">Nahrávka – celé číslo</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>

            <h3>Tanec</h3>
            <ul class="materials">
                <li>
                    <span class="file-type">MP4</span>
                    <span class="file-name">Video – celá choreografia</span>
                    <a href="#" download aria-label="Stiahnuť">↓</a>
                </li>
            </ul>
        </article>
    </div>

</div>