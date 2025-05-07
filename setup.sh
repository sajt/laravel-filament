#!/bin/bash

# Könyvtár nevének kinyerése az aktuális útvonalból
DIR_NAME=$(basename $(pwd))

# .ddev/config.yaml módosítása
sed -i '' "s/laravel-filament/$DIR_NAME/g" .ddev/config.yaml

echo "DDEV konfiguráció frissítve: $DIR_NAME"
