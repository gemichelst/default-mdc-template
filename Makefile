stylus:
	./node_modules/stylus/bin/stylus -m --include node_modules -u jeet -u axis -u autoprefixer-stylus -u rupture lib/stylus/*.styl -o css/ -w
html:
	./node_modules/pug-cli/index.js -P -w lib/pug/*.pug -o .
install:
	echo "installing NPM packages..."
	npm install
