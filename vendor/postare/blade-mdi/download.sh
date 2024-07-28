#!/bin/sh

echo "Cloining Templarian/MaterialDesign..."
git clone git@github.com:Templarian/MaterialDesign.git

echo "Copying the SVGs..."
cp -r MaterialDesign/svg/* resources/svg/

echo "Modifying the SVGs..."
find resources/svg -name "*.svg" -exec sed -i '/<svg/{/fill/!s/<svg/<svg fill="currentColor"/;}' {} +

# find . -name "*-outline.svg" -exec sed -i 's/<svg/<svg fill="none" stroke="currentColor"/' {} +
# find . -name "*.svg" ! -name "*-outline.svg" -exec sed -i 's/<svg/<svg fill="currentColor"/' {} +

echo "Removing the cloned repo..."
rm -rf MaterialDesign/

echo "SVGs updated!"
