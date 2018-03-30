import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/revealOnScroll';
import StickyHeader from './modules/StickyHeader';
import Modal from './modules/Modal';
import $ from 'jquery';

var mobile = new MobileMenu();
new RevealOnScroll($('.feature-item'), '85%');
new RevealOnScroll($('.testimonial'), '85%');
var sticky = new StickyHeader();
var modal = new Modal();
