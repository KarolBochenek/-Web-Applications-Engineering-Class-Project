<?php
echo <<<HEADER
<header> 
            <img src="public/img/uploads/logo.svg" alt="logo">
            <div class="search-bar">
                    <input placeholder="Search">
            </div>
            <div class="header-buttons">
            <ul>
                <li>
                    <i class="lorem ipsum"></i>
                    <a href="/additem" class="button">Add item</a>
                </li>
                <li>
                    <i class="lorem ipsum"></i>
                    <a href="/items" class="button">Full items list</a>
                </li>
                <li>
                    <i class="lorem ipsum"></i>
                    <a href="#" class="button">Manage</a>
                </li>
                <li>
                    <i class="lorem ipsum"></i>
                    <a href="/logout" class="button">Log out</a>
                </li>

            </ul> 
            </div>
        </header>
HEADER;