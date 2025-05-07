#!/bin/bash

# Könyvtár nevének kinyerése az aktuális útvonalból
DIR_NAME=$(basename $(pwd))

# .ddev/config.yaml módosítása
perl -pi -e "s/laravel-filament/$DIR_NAME/g" .ddev/config.yaml

# .env módosítása
perl -pi -e "s/laravel-filament/$DIR_NAME/g" .env

echo "DDEV konfiguráció frissítve: $DIR_NAME"
