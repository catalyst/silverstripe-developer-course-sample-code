#!/bin/sh
mkdir -p themes/yourtheme/dist/css
mkdir -p themes/yourtheme/dist/js
mkdir -p themes/yourtheme/dist/img
touch themes/yourtheme/dist/css/app.css
touch themes/yourtheme/dist/js/app.js
convert -size 200x50 plasma:violet-indigo themes/yourtheme/dist/img/logo.png
mkdir -p themes/yourtheme/templates/Includes/
touch themes/yourtheme/templates/Includes/
touch themes/yourtheme/templates/Includes/Navigation.ss
touch themes/yourtheme/templates/Includes/Footer.ss
mkdir -p themes/yourtheme/templates/Layout
touch themes/yourtheme/templates/Layout/Page.ss
touch themes/yourtheme/templates/Page.ss
