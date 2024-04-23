// lazyload config
var ROOT_URL = location.protocol + '//' + location.host + '/si_pmks/public/template'
var MODULE_CONFIG = {
    chat:           [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/libs/notie/dist/notie.min.js',
                      ROOT_URL+'/assets/js/plugins/notie.js',
                      ROOT_URL+'/assets/js/app/chat.js'
                    ],
    mail:           [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/libs/notie/dist/notie.min.js',
                      ROOT_URL+'/assets/js/plugins/notie.js',
                      ROOT_URL+'/assets/js/app/mail.js'
                    ],
    user:           [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/libs/notie/dist/notie.min.js',
                      ROOT_URL+'/assets/js/plugins/notie.js',
                      ROOT_URL+'/assets/js/app/user.js'
                    ],
    search:         [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/assets/js/app/search.js'
                    ],
    invoice:        [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/libs/notie/dist/notie.min.js',
                      ROOT_URL+'/assets/js/app/invoice.js'
                    ],
    musicapp:       [
                      ROOT_URL+'/libs/list.js/dist/list.js',
                      ROOT_URL+'/assets/js/plugins/musicapp.js'
                    ],
    fullscreen:     [
                      ROOT_URL+'/libs/jquery-fullscreen-plugin/jquery.fullscreen-min.js',
                      ROOT_URL+'/assets/js/plugins/fullscreen.js'
                    ],
    jscroll:        [
                      ROOT_URL+'/libs/jscroll/dist/jquery.jscroll.min.js'
                    ],
    countTo:        [
                      ROOT_URL+'/libs/jquery-countto/jquery.countTo.js'
                    ],
    stick_in_parent:[
                      ROOT_URL+'/libs/sticky-kit/dist/sticky-kit.min.js'
                    ],
    stellar:        [
                      ROOT_URL+'/libs/jquery.stellar/jquery.stellar.min.js',
                      ROOT_URL+'/assets/js/plugins/stellar.js'
                    ],
    masonry:        [
                      ROOT_URL+'/libs/masonry-layout/dist/masonry.pkgd.min.js'
                    ],
    slick:          [
                      ROOT_URL+'/libs/slick-carousel/slick/slick.css',
                      ROOT_URL+'/libs/slick-carousel/slick/slick-theme.css',
                      ROOT_URL+'/libs/slick-carousel/slick/slick.min.js'
                    ],
    sort:           [
                      ROOT_URL+'/libs/html5sortable/dist/html.sortable.min.js',
                      ROOT_URL+'/assets/js/plugins/sort.js'
                    ],
    chartjs:        [
                      ROOT_URL+'/libs/moment/min/moment-with-locales.min.js',
                      ROOT_URL+'/libs/chart.js/dist/Chart.min.js',
                      ROOT_URL+'/libs/chart.js/dist/chart.ext.js',
                      ROOT_URL+'/assets/js/plugins/chartjs.js'
                    ],
    chartist:       [
                      ROOT_URL+'/libs/chartist/dist/chartist.min.css',
                      ROOT_URL+'/libs/chartist/dist/chartist.min.js',
                      ROOT_URL+'/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
                      ROOT_URL+'/libs/chartist/dist/chartist.ext.js',
                      ROOT_URL+'/assets/js/plugins/chartist.js'
                    ],
    dataTable:      [
                      ROOT_URL+'/libs/datatables/media/js/jquery.dataTables.min.js',
                      ROOT_URL+'/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                      ROOT_URL+'/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
                      ROOT_URL+'/assets/js/plugins/datatable.js'
                    ],
    bootstrapTable: [
                      ROOT_URL+'/libs/bootstrap-table/dist/bootstrap-table.min.js',
                      ROOT_URL+'/libs/bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js',
                      ROOT_URL+'/libs/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.min.js',
                      ROOT_URL+'/assets/js/plugins/tableExport.min.js',
                      ROOT_URL+'/assets/js/plugins/bootstrap-table.js'
                    ],
    bootstrapWizard:[
                      ROOT_URL+'/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
                    ],
    dropzone:       [
                      ROOT_URL+'/libs/dropzone/dist/min/dropzone.min.js',
                      ROOT_URL+'/libs/dropzone/dist/min/dropzone.min.css'
                    ],
    typeahead:      [
                      ROOT_URL+'/libs/typeahead.js/dist/typeahead.bundle.min.js',
                      ROOT_URL+'/assets/js/plugins/typeahead.js'
                    ],
    datepicker:     [
                      ROOT_URL+'/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
                      ROOT_URL+'/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
                    ],
    daterangepicker:[
                      ROOT_URL+'/libs/daterangepicker/daterangepicker.css',
                      ROOT_URL+'/libs/moment/min/moment-with-locales.min.js',
                      ROOT_URL+'/libs/daterangepicker/daterangepicker.js'
                    ],
    fullCalendar:   [
                      ROOT_URL+'/libs/moment/min/moment-with-locales.min.js',
                      ROOT_URL+'/libs/fullcalendar/dist/fullcalendar.min.js',
                      ROOT_URL+'/libs/fullcalendar/dist/fullcalendar.min.css',
                      ROOT_URL+'/libs/notie/dist/notie.min.js',
                      ROOT_URL+'/assets/js/plugins/notie.js',
                      ROOT_URL+'/assets/js/app/calendar.js'
                    ],
    parsley:        [
                      ROOT_URL+'/libs/parsleyjs/dist/parsley.min.js'
                    ],
    select2:        [
                      ROOT_URL+'/libs/select2/dist/css/select2.min.css',
                      ROOT_URL+'/libs/select2/dist/js/select2.min.js',
                      ROOT_URL+'/assets/js/plugins/select2.js'
                    ],
    summernote:     [
                      ROOT_URL+'/libs/summernote/dist/summernote.css',
                      ROOT_URL+'/libs/summernote/dist/summernote-bs4.css',
                      ROOT_URL+'/libs/summernote/dist/summernote.min.js',
                      ROOT_URL+'/libs/summernote/dist/summernote-bs4.min.js'
                    ],
    vectorMap:      [
                      ROOT_URL+'/libs/jqvmap/dist/jqvmap.min.css',
                      ROOT_URL+'/libs/jqvmap/dist/jquery.vmap.js',
                      ROOT_URL+'/libs/jqvmap/dist/maps/jquery.vmap.world.js',
                      ROOT_URL+'/libs/jqvmap/dist/maps/jquery.vmap.usa.js',
                      ROOT_URL+'/libs/jqvmap/dist/maps/jquery.vmap.france.js',
                      ROOT_URL+'/assets/js/plugins/jqvmap.js'
                    ],
    plyr:           [
                      ROOT_URL+'/libs/plyrist/src/plyrist.css',
                      ROOT_URL+'/libs/plyr/dist/plyr.polyfilled.min.js',
                      ROOT_URL+'/libs/wavesurfer.js/dist/wavesurfer.min.js',
                      ROOT_URL+'/libs/plyrist/src/plyrist.js',
                      ROOT_URL+'/assets/js/plugins/plyr.js'
                    ]
  };

var MODULE_OPTION_CONFIG = {
  parsley: {
    errorClass: 'is-invalid',
    successClass: 'is-valid',
    errorsWrapper: '<ul class="list-unstyled text-sm mt-1 text-muted"></ul>'
  }
}
