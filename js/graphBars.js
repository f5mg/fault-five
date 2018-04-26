// JavaScript Document
document.addEventListener('scroll', function() {
  var graphBar1 = document.querySelector('.graph-bar--1');
  var graphBar2 = document.querySelector('.graph-bar--2');
  var graphBar3 = document.querySelector('.graph-bar--3');
  var graphBar4 = document.querySelector('.graph-bar--4');
  var graphBar5 = document.querySelector('.graph-bar--5');
  if(window.scrollY >= graphBar1.scrollTop) {
    graphBar1.classList.add('graph-bar--1-animate');
  }
  if(window.scrollY >= graphBar2.scrollTop) {
    graphBar2.classList.add('graph-bar--2-animate');
  }
  if(window.scrollY >= graphBar3.scrollTop) {
    graphBar3.classList.add('graph-bar--3-animate');
  }
  if(window.scrollY >= graphBar4.scrollTop) {
    graphBar4.classList.add('graph-bar--4-animate');
  }
  if(window.scrollY >= graphBar5.scrollTop) {
    graphBar5.classList.add('graph-bar--5-animate');
  }
});