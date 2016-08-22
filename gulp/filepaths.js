var wordpress = './wordpress/wp-content/themes/Divi-child/';

var basePaths = {
    src: wordpress + 'app/assets/',
    dest: wordpress + 'app/build/',
    bower: wordpress + 'bower_components/'
};

var paths = {
    styles: {
        src: basePaths.src + 'sass/',
        dest: basePaths.dest + 'css/'
    }
};

var src = {
    styles: paths.styles.src + '**/*.scss',
};

var dest = {
    styles: paths.styles.dest,
};

module.exports = {
	src: src,
	dest:dest
}