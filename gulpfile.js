const { series, src, dest } = require('gulp');

exports.default = function() {
    // AdminLTE
    src('node_modules/admin-lte/dist/css/adminlte.min.css').pipe(dest('assets/css/'));
    src('node_modules/admin-lte/dist/js/adminlte.min.js').pipe(dest('assets/js/'));
    src('node_modules/admin-lte/dist/img/*').pipe(dest('assets/img/'));
    // fontawesome-free
    src('node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css').pipe(dest('assets/fontawesome-free/css/'));
    src('node_modules/admin-lte/plugins/fontawesome-free/webfonts/*').pipe(dest('assets/fontawesome-free/webfonts/'));
    // icheck-bootstrap
    src('node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css').pipe(dest('assets/icheck-bootstrap/'));
    // jquery
    src('node_modules/admin-lte/plugins/jquery/jquery.min.js').pipe(dest('assets/jquery/'));
    // bootstrap.bundle
    src('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js').pipe(dest('assets/bootstrap/js/'));
}