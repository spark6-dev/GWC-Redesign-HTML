## GWC Redesign HTML
This repo is used for development of the Goodwater main site.
There are two projects inside this repo: Gulp-Project and WP-Theme.  These
are separate projects right now, we hope to combine them at a later point and set up 
auto deployment to the wordpress environment

## Environments
Dev: https://goodwatercadev.wpengine.com/wp-admin

Prod: https://goodwatercap.com/wp-admin

## gulp-project folder

Gulp project for developing sass and javascript files for the main site.  
See Readme inside the directory to build / run the project.

## wp-theme folder

This is the theme folder file that gets installed in Wordpress.  The contents of wp-theme
should be installed on /wp-content/theme.  goodwater/css/main.css and goodwater/script/script.js is currently 
the same as gulp-project/dist folder.  

## TODO
- use wp-theme/goodwater as the dist folder so that there are not multiple copies of main.css and script.js
- remove duplicate images between wp-content/goodwater/images and gulp-project/source/images
- decompose wp-theme/goodwater/css/additional.css into sass files and place it into gulp-project
- remove wp-theme/goodwater/js/animation.js, wp-theme/goodwater/css/animation.css and 
  wp-theme/goodwater/template-parts/about/animation.php these are no longer used.  Remove the corresponding items in 
  gulp-project.
- create git CI and deploy job.  New code can be rsync'd via ftp to WP-Engine.

## Cache busting
- To bust the cache on dev and production, update _S_VERSION in wp-theme/goodwater/functions.php.  Then upload the file to dev and prod environments
  

