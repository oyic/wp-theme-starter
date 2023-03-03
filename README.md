# WordPress Theme Boilerplate
## A WordPress Theme Starter

*** Steps: ***

1. Clone this repo to your themes folder with your folder theme name.
   `` git clone https://github.com/oyic/wp-theme-starter.git [target-folder]  ``
2. Change directory to 
`` cd [target-folder] ``
3. Change rename-me into your theme name in package.json
``   "name": "rename-me" ``
4. Install dependencies
`` npm install ``
5. For Browsersync: pls change line 70 in gulpfile.babel.js the proxy value into your local env url: ie(http://localhost:3000)
`` proxy: "http://webfx.local/", ``
6. Start your development environment:
`` npm run start ``