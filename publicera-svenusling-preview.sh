#!/usr/bin/env bash

# Publicera preview av Sven Uslings databasvisning via SSH på webservern

# Källans namn samt sökväg till katalogen att kopiera
source_user="wargen41"
source_rep="svenusling-preview"
source_branch="main"
source_dir="$source_rep-$source_branch"

# Check if the domain argument is provided
if [ -z "$1" ]; then
  echo "Usage: $0 <domain>"
  exit 1
fi

# Assign the first argument to the domain variable
domain=$1

set -euo pipefail

# Navigate to the domain directory
cd ~/domains/"$domain" || { echo "Error: The domain '$domain' does not exist."; exit 1; }

# Download the zip file
wget "https://github.com/$source_user/$source_rep/archive/$source_branch.zip"

# Unzip files in the site directory
unzip main.zip "$source_dir/*"

# Move files to their respective homes
rsync -av "$source_dir/" public_html/

# Remove temporary directories and files
rm "$source_branch.zip"
rm -r "$source_dir"

# Kör composer update ifall något har ändrats i composer.json
cd public_html
../../../composer.phar update

echo "Klart!"
