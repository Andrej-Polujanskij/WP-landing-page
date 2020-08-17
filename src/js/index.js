import $ from 'jquery';
import './vendor/bootstrap.min.js';


import '../css-libs/bootstrap.min.css'
import '../css-libs/owl.carousel.min2.css'
import '../css-libs/fontawesome.min.css'
import '../css-libs/slicknav.css'
import '../css-libs/theme.css'
import '../css-libs/animate.css'

import '../scss/style.scss';

import '../css-libs/normalize.css'
import '../css-libs/style.css'
import '../css-libs/responsive.css'

import fns from "./functions"

import "./owl.carousel.min2.js"
import "./jquery.waypoints.min.js"
import "./jquery.counterup.min.js"
import "./slicknav.min.js"
import "./scrollUp.min.js"

import "./main.js"

$(document).ready(function () {
    fns.init();

});
